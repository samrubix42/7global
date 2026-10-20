<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('7A GLOBAL MACHINERY PVT. LTD. | Industrial Flatwork Ironers & Laundry Systems')] class extends Component
{
    // Interactive Ironer Finder state
    public string $facility = 'hotel'; // hotel, hospital, commercial, institutional

    public string $capacity = 'medium'; // compact (30-60 kg/h), medium (70-150 kg/h), heavy (160-320+ kg/h)

    public string $heating = 'steam'; // electric, steam, gas

    // Active Hero Slide index
    public int $activeSlide = 0;

    // Contact / Quote Form State
    public string $quoteName = '';

    public string $quoteEmail = '';

    public string $quotePhone = '';

    public string $quoteCompany = '';

    public string $quoteModel = 'e² Line 200.30 Chest Ironer';

    public string $quoteMessage = '';

    public bool $quoteSubmitted = false;

    public function setFilter(string $type, string $value): void
    {
        if (in_array($type, ['facility', 'capacity', 'heating'])) {
            $this->{$type} = $value;
        }
    }

    public function selectModelForQuote(string $modelName): void
    {
        $this->quoteModel = $modelName;
    }

    public function nextSlide(): void
    {
        $this->activeSlide = ($this->activeSlide + 1) % 3;
    }

    public function prevSlide(): void
    {
        $this->activeSlide = ($this->activeSlide + 2) % 3;
    }

    public function setSlide(int $index): void
    {
        $this->activeSlide = $index;
    }

    public function submitQuote(): void
    {
        $this->validate([
            'quoteName' => 'required|min:2',
            'quoteEmail' => 'required|email',
            'quotePhone' => 'required',
            'quoteCompany' => 'nullable',
            'quoteModel' => 'required',
            'quoteMessage' => 'nullable',
        ]);

        $this->quoteSubmitted = true;
    }

    public function resetQuoteForm(): void
    {
        $this->reset(['quoteName', 'quoteEmail', 'quotePhone', 'quoteCompany', 'quoteMessage']);
        $this->quoteSubmitted = false;
    }
};
