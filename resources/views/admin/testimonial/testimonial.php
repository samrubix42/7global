<?php

use App\Models\Testimonial;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin'), Title('Testimonials - 7A Global Machinery')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public string $statusFilter = 'all';

    public string $ratingFilter = 'all';

    // Modal state
    public bool $showModal = false;

    public bool $isEditing = false;

    public ?int $testimonialId = null;

    // Form inputs
    public string $name = '';

    public string $designation = '';

    public string $description = '';

    public int $rating = 5;

    public bool $is_active = true;

    // Delete modal state
    public bool $showDeleteModal = false;

    public ?int $deleteId = null;

    public string $deleteName = '';

    /**
     * @return array<string, array<int, string>>
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'designation' => ['required', 'string', 'min:2', 'max:255'],
            'description' => ['required', 'string', 'min:10'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'is_active' => ['boolean'],
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function messages(): array
    {
        return [
            'name.required' => 'Client name is required.',
            'designation.required' => 'Client role/company designation is required.',
            'description.required' => 'Testimonial feedback text is required.',
            'description.min' => 'The feedback must be at least 10 characters.',
            'rating.required' => 'Please select a star rating (1 to 5).',
            'rating.between' => 'Rating must be between 1 and 5.',
        ];
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingStatusFilter(): void
    {
        $this->resetPage();
    }

    public function updatingRatingFilter(): void
    {
        $this->resetPage();
    }

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->testimonialId = null;
        $this->name = '';
        $this->designation = '';
        $this->description = '';
        $this->rating = 5;
        $this->is_active = true;
        $this->isEditing = false;
        $this->showModal = true;
    }

    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $testimonial = Testimonial::findOrFail($id);

        $this->testimonialId = $testimonial->id;
        $this->name = $testimonial->name;
        $this->designation = $testimonial->designation;
        $this->description = $testimonial->description;
        $this->rating = (int) $testimonial->rating;
        $this->is_active = (bool) $testimonial->is_active;
        $this->isEditing = true;
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetValidation();
        $this->testimonialId = null;
        $this->name = '';
        $this->designation = '';
        $this->description = '';
        $this->rating = 5;
        $this->is_active = true;
        $this->isEditing = false;
    }

    public function setRating(int $score): void
    {
        $this->rating = max(1, min(5, $score));
    }

    public function save(): void
    {
        $validated = $this->validate();

        if ($this->isEditing && $this->testimonialId) {
            $testimonial = Testimonial::findOrFail($this->testimonialId);
            $testimonial->update($validated);

            $this->closeModal();

            $this->dispatch('toast-show', [
                'message' => 'Testimonial updated successfully.',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            Testimonial::create($validated);

            $this->closeModal();

            $this->dispatch('toast-show', [
                'message' => 'Testimonial created successfully.',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }
    }

    public function toggleStatus(int $id): void
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->is_active = ! $testimonial->is_active;
        $testimonial->save();

        $this->dispatch('toast-show', [
            'message' => 'Testimonial status updated successfully.',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function confirmDelete(int $id): void
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->deleteId = $testimonial->id;
        $this->deleteName = $testimonial->name.' ('.$testimonial->designation.')';
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->deleteId = null;
        $this->deleteName = '';
    }

    public function delete(): void
    {
        if ($this->deleteId) {
            $testimonial = Testimonial::findOrFail($this->deleteId);
            $testimonial->delete();

            $this->closeDeleteModal();

            $this->dispatch('toast-show', [
                'message' => 'Testimonial deleted successfully.',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }
    }

    #[Computed]
    public function stats(): array
    {
        $avg = Testimonial::avg('rating');

        return [
            'total' => Testimonial::count(),
            'active' => Testimonial::where('is_active', true)->count(),
            'average_rating' => $avg ? number_format((float) $avg, 1) : '5.0',
        ];
    }

    #[Computed]
    public function testimonials(): LengthAwarePaginator
    {
        return Testimonial::query()
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->search.'%')
                        ->orWhere('designation', 'like', '%'.$this->search.'%')
                        ->orWhere('description', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->statusFilter === 'active', fn ($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'inactive', fn ($q) => $q->where('is_active', false))
            ->when($this->ratingFilter !== 'all', fn ($q) => $q->where('rating', (int) $this->ratingFilter))
            ->orderByDesc('id')
            ->paginate(8);
    }
};
