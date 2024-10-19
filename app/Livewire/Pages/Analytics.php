<?php

namespace App\Livewire\Pages;

use App\Models\PanAnalytics;
use Developermithu\Tallcraftui\Traits\WithTcTable;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.analytics')]
#[Title('TallCraftUI - Analytics')]
class Analytics extends Component
{
    use WithTcTable;

    public function render()
    {
        $analytics = PanAnalytics::query()
            ->tap(fn($query) => $this->tcApplySorting($query))
            ->orderBy('clicks', 'desc')
            ->get();

        return view('livewire.pages.analytics', compact('analytics'));
    }
}
