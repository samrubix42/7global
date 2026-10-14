<?php

use App\Models\Faq;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin'), Title('FAQ Management - 7A Global Machinery')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public string $statusFilter = 'all';

    // Modal state
    public bool $showModal = false;

    public bool $isEditing = false;

    public ?int $faqId = null;

    // Form inputs
    public string $question = '';

    public string $answer = '';

    public bool $is_active = true;

    // Delete modal state
    public bool $showDeleteModal = false;

    public ?int $deleteId = null;

    public string $deleteQuestion = '';

    /**
     * @return array<string, array<int, string>>
     */
    protected function rules(): array
    {
        return [
            'question' => ['required', 'string', 'min:5', 'max:500'],
            'answer' => ['required', 'string', 'min:10'],
            'is_active' => ['boolean'],
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function messages(): array
    {
        return [
            'question.required' => 'Please enter the question.',
            'question.min' => 'The question must be at least 5 characters.',
            'answer.required' => 'Please provide the answer text.',
            'answer.min' => 'The answer must be at least 10 characters.',
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

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->faqId = null;
        $this->question = '';
        $this->answer = '';
        $this->is_active = true;
        $this->isEditing = false;
        $this->showModal = true;
    }

    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $faq = Faq::findOrFail($id);

        $this->faqId = $faq->id;
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->is_active = (bool) $faq->is_active;
        $this->isEditing = true;
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetValidation();
        $this->faqId = null;
        $this->question = '';
        $this->answer = '';
        $this->is_active = true;
        $this->isEditing = false;
    }

    public function save(): void
    {
        $validated = $this->validate();

        if ($this->isEditing && $this->faqId) {
            $faq = Faq::findOrFail($this->faqId);
            $faq->update($validated);

            $this->closeModal();

            $this->dispatch('toast-show', [
                'message' => 'FAQ updated successfully.',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            Faq::create($validated);

            $this->closeModal();

            $this->dispatch('toast-show', [
                'message' => 'FAQ created successfully.',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }
    }

    public function toggleStatus(int $id): void
    {
        $faq = Faq::findOrFail($id);
        $faq->is_active = ! $faq->is_active;
        $faq->save();

        $this->dispatch('toast-show', [
            'message' => 'FAQ status updated successfully.',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function confirmDelete(int $id): void
    {
        $faq = Faq::findOrFail($id);
        $this->deleteId = $faq->id;
        $this->deleteQuestion = $faq->question;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->deleteId = null;
        $this->deleteQuestion = '';
    }

    public function delete(): void
    {
        if ($this->deleteId) {
            $faq = Faq::findOrFail($this->deleteId);
            $faq->delete();

            $this->closeDeleteModal();

            $this->dispatch('toast-show', [
                'message' => 'FAQ deleted successfully.',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'total' => Faq::count(),
            'active' => Faq::where('is_active', true)->count(),
            'inactive' => Faq::where('is_active', false)->count(),
        ];
    }

    #[Computed]
    public function faqs(): LengthAwarePaginator
    {
        return Faq::query()
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('question', 'like', '%'.$this->search.'%')
                        ->orWhere('answer', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->statusFilter === 'active', fn ($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'inactive', fn ($q) => $q->where('is_active', false))
            ->orderByDesc('id')
            ->paginate(8);
    }
};
