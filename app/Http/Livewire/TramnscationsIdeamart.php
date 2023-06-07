<?php

namespace App\Http\Livewire;

use App\Models\TransactionsIdeamart;
use Livewire\Component;

class TramnscationsIdeamart extends Component
{
    public function render()
    {
        return view('livewire.tramnscations-ideamart',[
            'Users'=>TransactionsIdeamart::orderBy('created_at','DESC')->paginate(20),
        ]);
    }
}
