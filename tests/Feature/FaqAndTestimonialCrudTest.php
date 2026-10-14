<?php

namespace Tests\Feature;

use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class FaqAndTestimonialCrudTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::firstOrCreate(
            ['email' => 'admin@7global.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );
    }

    public function test_faq_admin_page_renders_successfully(): void
    {
        $response = $this->actingAs($this->admin)->get('/admin/faqs');

        $response->assertStatus(200);
        $response->assertSee('FAQ Management');
        $response->assertSee('Add FAQ');
    }

    public function test_faq_can_be_created_with_modal_and_dispatches_toast(): void
    {
        Livewire::actingAs($this->admin)
            ->test('admin::faq')
            ->call('openCreateModal')
            ->assertSet('showModal', true)
            ->assertSet('isEditing', false)
            ->set('question', 'What is the working cylinder width?')
            ->set('answer', 'The cylinder width options range from 1800mm to 3300mm.')
            ->set('is_active', true)
            ->call('save')
            ->assertHasNoErrors()
            ->assertSet('showModal', false)
            ->assertDispatched('toast-show', function ($eventName, $params) {
                $payload = $params[0] ?? $params;

                return ($payload['message'] ?? '') === 'FAQ created successfully.'
                    && ($payload['type'] ?? '') === 'success'
                    && ($payload['position'] ?? '') === 'top-right';
            });

        $this->assertDatabaseHas('faqs', [
            'question' => 'What is the working cylinder width?',
            'is_active' => true,
        ]);
    }

    public function test_faq_can_be_edited_with_modal_and_dispatches_toast(): void
    {
        $faq = Faq::create([
            'question' => 'Old Question Title?',
            'answer' => 'Old answer text for the question.',
            'is_active' => true,
        ]);

        Livewire::actingAs($this->admin)
            ->test('admin::faq')
            ->call('openEditModal', $faq->id)
            ->assertSet('showModal', true)
            ->assertSet('isEditing', true)
            ->assertSet('faqId', $faq->id)
            ->set('question', 'Updated Question Title?')
            ->set('answer', 'Updated answer text with new details.')
            ->call('save')
            ->assertHasNoErrors()
            ->assertSet('showModal', false)
            ->assertDispatched('toast-show', function ($eventName, $params) {
                $payload = $params[0] ?? $params;

                return ($payload['message'] ?? '') === 'FAQ updated successfully.'
                    && ($payload['type'] ?? '') === 'success';
            });

        $this->assertDatabaseHas('faqs', [
            'id' => $faq->id,
            'question' => 'Updated Question Title?',
        ]);
    }

    public function test_faq_status_can_be_toggled(): void
    {
        $faq = Faq::create([
            'question' => 'Is heating steam-based?',
            'answer' => 'Yes, steam heating is standard.',
            'is_active' => true,
        ]);

        Livewire::actingAs($this->admin)
            ->test('admin::faq')
            ->call('toggleStatus', $faq->id)
            ->assertDispatched('toast-show');

        $this->assertFalse((bool) $faq->fresh()->is_active);
    }

    public function test_faq_can_be_deleted_with_modal_and_dispatches_toast(): void
    {
        $faq = Faq::create([
            'question' => 'Delete this FAQ test item?',
            'answer' => 'Temporary answer text to be removed.',
            'is_active' => true,
        ]);

        Livewire::actingAs($this->admin)
            ->test('admin::faq')
            ->call('confirmDelete', $faq->id)
            ->assertSet('showDeleteModal', true)
            ->assertSet('deleteId', $faq->id)
            ->call('delete')
            ->assertSet('showDeleteModal', false)
            ->assertDispatched('toast-show', function ($eventName, $params) {
                $payload = $params[0] ?? $params;

                return ($payload['message'] ?? '') === 'FAQ deleted successfully.';
            });

        $this->assertDatabaseMissing('faqs', [
            'id' => $faq->id,
        ]);
    }

    public function test_testimonial_admin_page_renders_successfully(): void
    {
        $response = $this->actingAs($this->admin)->get('/admin/testimonials');

        $response->assertStatus(200);
        $response->assertSee('Client Testimonials');
        $response->assertSee('Add Testimonial');
    }

    public function test_testimonial_can_be_created_with_modal_and_dispatches_toast(): void
    {
        Livewire::actingAs($this->admin)
            ->test('admin::testimonial')
            ->call('openCreateModal')
            ->assertSet('showModal', true)
            ->set('name', 'Robert Sterling')
            ->set('designation', 'Laundry Manager, Grand Resort')
            ->set('description', 'Superb machinery with unmatched ironing speed and energy savings.')
            ->set('rating', 5)
            ->set('is_active', true)
            ->call('save')
            ->assertHasNoErrors()
            ->assertSet('showModal', false)
            ->assertDispatched('toast-show', function ($eventName, $params) {
                $payload = $params[0] ?? $params;

                return ($payload['message'] ?? '') === 'Testimonial created successfully.'
                    && ($payload['type'] ?? '') === 'success'
                    && ($payload['position'] ?? '') === 'top-right';
            });

        $this->assertDatabaseHas('testimonials', [
            'name' => 'Robert Sterling',
            'rating' => 5,
            'is_active' => true,
        ]);
    }

    public function test_testimonial_can_be_edited_and_dispatches_toast(): void
    {
        $testimonial = Testimonial::create([
            'name' => 'Alice Johnson',
            'designation' => 'Hospital Admin',
            'description' => 'Great performance on bed linens.',
            'rating' => 4,
            'is_active' => true,
        ]);

        Livewire::actingAs($this->admin)
            ->test('admin::testimonial')
            ->call('openEditModal', $testimonial->id)
            ->assertSet('showModal', true)
            ->set('rating', 5)
            ->set('description', 'Updated feedback text with 5 stars rating.')
            ->call('save')
            ->assertHasNoErrors()
            ->assertSet('showModal', false)
            ->assertDispatched('toast-show', function ($eventName, $params) {
                $payload = $params[0] ?? $params;

                return ($payload['message'] ?? '') === 'Testimonial updated successfully.'
                    && ($payload['type'] ?? '') === 'success';
            });

        $this->assertDatabaseHas('testimonials', [
            'id' => $testimonial->id,
            'rating' => 5,
        ]);
    }

    public function test_testimonial_can_be_deleted_with_modal_and_dispatches_toast(): void
    {
        $testimonial = Testimonial::create([
            'name' => 'Temp Client',
            'designation' => 'Hotel Staff',
            'description' => 'Temporary description to be deleted.',
            'rating' => 5,
            'is_active' => true,
        ]);

        Livewire::actingAs($this->admin)
            ->test('admin::testimonial')
            ->call('confirmDelete', $testimonial->id)
            ->assertSet('showDeleteModal', true)
            ->call('delete')
            ->assertSet('showDeleteModal', false)
            ->assertDispatched('toast-show', function ($eventName, $params) {
                $payload = $params[0] ?? $params;

                return ($payload['message'] ?? '') === 'Testimonial deleted successfully.';
            });

        $this->assertDatabaseMissing('testimonials', [
            'id' => $testimonial->id,
        ]);
    }
}
