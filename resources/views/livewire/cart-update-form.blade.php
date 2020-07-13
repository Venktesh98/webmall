<div>
    {{-- <form action="{{ route('cart.update',$item['id'] ) }}"> --}}
    {{-- <form wire:submit.prevent='updateCart'>
        <input wire:model="quantity" type="number" value="{{ $item['quantity'] }}">

        <input class = "button" type="submit" value="save" class="btn btn-primary">
    </form> --}}
    <input wire:model="quantity"  type="number" wire:change="updateCart">   <!-- fires the update event -->
</div>
