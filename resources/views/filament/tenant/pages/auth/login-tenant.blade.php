<h1>Test Login</h1>
<form wire:submit.prevent="authenticate" class="space-y-8">
    {{ parent::getState() }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>
</form>