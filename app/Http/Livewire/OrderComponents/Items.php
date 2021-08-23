<?php

namespace App\Http\Livewire\OrderComponents;

use Livewire\Component;
use App\Models\Order;
use App\Models\Item;

class Items extends Component
{
    public Order $order;
    public $items = [];

    public function mount($order)
    {
        $this->items = Item::where('order_id', $order->id)->get();
    }

    public function render()
    {
        return view('livewire.order-components.items');
    }
}
