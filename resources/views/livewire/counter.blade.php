<div>
    <h1>{{$counter}}</h1>
    <input type="text" wire:model='inNumber'>
    <button class="btn btn-warning" wire:click='inNumber()'>incrementa</button>
    <button class="btn btn-primary" wire:click='increment'>cliccami</button>
    <button class="btn btn-danger" wire:click='decrement'>cliccami</button>
    <button class="btn btn-primary" wire:click='incrementNumber(5)'>cliccami +5</button>
    <button class="btn btn-danger" wire:click='decrementNumber(5)'>cliccami -5</button>
</div>
