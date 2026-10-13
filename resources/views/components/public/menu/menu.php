<?php

use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public bool $isOpen = false;

    #[On('open-menu')]
    public function open(): void
    {
        $this->isOpen = true;
    }

    #[On('close-menu')]
    public function close(): void
    {
        $this->isOpen = false;
    }

    public function toggle(): void
    {
        $this->isOpen = ! $this->isOpen;
    }
};
