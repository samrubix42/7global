<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('layouts::auth'), Title('Sign In - 7A Global Admin')] class extends Component
{
    #[Validate('required|email', message: [
        'required' => 'Please enter your email address.',
        'email' => 'Please provide a valid email format.',
    ])]
    public string $email = '';

    #[Validate('required|min:4', message: [
        'required' => 'Please enter your account password.',
        'min' => 'Password must be at least 4 characters.',
    ])]
    public string $password = '';

    public bool $remember = false;

    public function mount(): void
    {
        if (Auth::check()) {
            $this->redirect(route('admin.dashboard'));
        }
    }

    public function fillDemo(): void
    {
        if (User::where('email', 'admin@7global.com')->doesntExist()) {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@7global.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
        }

        $this->email = 'admin@7global.com';
        $this->password = 'password';
        $this->resetErrorBag();
    }

    public function login()
    {
        $this->validate();

        // Safety fallback: if no user exists at all, create admin
        if (User::where('email', $this->email)->doesntExist() && $this->email === 'admin@7global.com') {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@7global.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        $this->addError('email', 'These credentials do not match our records.');
    }
};
