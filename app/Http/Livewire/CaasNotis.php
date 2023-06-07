<?php

namespace App\Http\Livewire;

use App\Models\CaasNoti;
use Livewire\Component;

class CaasNotis extends Component
{
    public function render()
    {
        return view('livewire.caas-notis',[
            'Users'=>CaasNoti::orderBy('created_at','DESC')->paginate(10),
        ]);
    }
}
