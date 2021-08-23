<?php

namespace App\Http\Livewire\OrderComponents;

use Livewire\Component;
use App\Models\Business as BusinessModel;
use App\Models\Order;
class Business extends Component
{
    public Order $order;
    public $business;

    public function mount($order)
    {
        $this->business = BusinessModel::find($order->business_id);
    }

    public function render()
    {
        return view('livewire.order-components.business');
    }
}
