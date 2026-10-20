<?php

use Livewire\Component;

new class extends Component
{
    public bool $drawerOpen = false;

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $company = '';

    public string $subject = 'General Inquiry';

    public string $message = '';

    public bool $submitted = false;

    public function toggleDrawer(): void
    {
        $this->drawerOpen = ! $this->drawerOpen;
    }

    public function closeDrawer(): void
    {
        $this->drawerOpen = false;
    }

    public function submitInquiry(): void
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

    public function resetInquiry(): void
    {
        $this->reset(['name', 'email', 'phone', 'company', 'subject', 'message']);
        $this->submitted = false;
    }
};
