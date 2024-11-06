<div>
    <input type="text" wire:model.debounce.live.300ms="name">
    <span>{{$name}}</span>
    <div>{{$user->name}}</div>
</div>
