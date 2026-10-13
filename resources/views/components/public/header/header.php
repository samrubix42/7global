<?php

use Livewire\Component;

new class extends Component
{
    public bool $drawerOpen = false;

    public function toggleDrawer(): void
    {
        $this->drawerOpen = ! $this->drawerOpen;
    }

    public function closeDrawer(): void
    {
        $this->drawerOpen = false;
    }
};
