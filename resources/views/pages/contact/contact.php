<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Contact Us | 7A GLOBAL MACHINERY PVT. LTD.')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $company = '';

    public string $subject = 'General Inquiry';

    public string $message = '';

    public bool $submitted = false;

    public function submit(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'nullable',
            'subject' => 'required',
            'message' => 'nullable',
        ]);

        $this->submitted = true;
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'email', 'phone', 'company', 'subject', 'message']);
        $this->submitted = false;
    }
};
