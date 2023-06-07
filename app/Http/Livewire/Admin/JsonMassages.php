<?php

namespace App\Http\Livewire\Admin;

use App\Models\JsonMasages;
use Livewire\Component;

class JsonMassages extends Component
{
    public function render()
    {
        return view('livewire.admin.json-massages',[
            'Users'=>JsonMasages::orderBy('created_at','DESC')->paginate(20),
        ]);
    }
}
