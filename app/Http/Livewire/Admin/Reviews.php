<?php

namespace App\Http\Livewire\Admin;

use App\Models\Reviews as ModelsReviews;
use Livewire\Component;

class Reviews extends Component
{
    public $Reviews;

    public function mount(){
        $this->Reviews=ModelsReviews::all();
    }

    public function deletebook($id_re){
        $Review=ModelsReviews::find($id_re);
        $Review->delete();
        $this->mount();
    }
    public function render()
    {
        return view('livewire.admin.reviews');
    }
}
