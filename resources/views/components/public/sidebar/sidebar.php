<?php

use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public bool $isOpen = false;

    public string $activeTab = 'machines';

    #[On('toggle-sidebar-menu')]
    public function toggle(): void
    {
        $this->isOpen = ! $this->isOpen;
    }

    public function open(): void
    {
        $this->isOpen = true;
    }

    public function close(): void
    {
        $this->isOpen = false;
    }

    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }
};
