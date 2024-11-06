<!-- Version Livewire (utilise le backend) -->
<div>
    <button wire:click="decrement">-</button>
    <span>{{$counter1}}</span>
    <button wire:click="increment">+</button>

    <!-- Version Alpine (n'utilise pas le backend) -->
    <!-- Ici, Alpine est le meilleur choix car on n'utilise pas le backend -->
    <div x-data="{
    counter2 : 0,
    decrement(){
        this.counter2--
    },
    increment(){
        this.counter2++
    }
}">
        <button @click="decrement">-</button>
        <span x-html="counter2"></span>
        <button @click="increment">+</button>
    </div>
</div>



