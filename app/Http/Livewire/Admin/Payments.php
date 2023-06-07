<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payments as ModelsPayments;
use Livewire\Component;

class Payments extends Component
{
    //public $Users;

    public function mount(){
        //$this->Users=ModelsPayments::paginate(5);

    }
    public function render()
    {
        return view('livewire.admin.payments',[
            'Users'=>ModelsPayments::orderBy('created_at','DESC')->paginate(5),
        ]);
    }
}
