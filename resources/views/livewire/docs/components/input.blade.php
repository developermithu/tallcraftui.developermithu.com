<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Layout, Title};

new #[Layout('components.layouts.app')] #[Title('Tallcraftui - Input')] class extends Component {
    //
}; ?>

<div>
    <x-input label="input" icon="users" />
</div>
