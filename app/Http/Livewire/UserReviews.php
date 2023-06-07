<?php

namespace App\Http\Livewire;

use App\Models\Books;
use App\Models\Reviews;
use Livewire\Component;

class UserReviews extends Component
{
    public $Posts,$search_data;

    public function mount(){
        $this->Posts= Reviews::all();
        //$this->Posts=Books::all();
    }

    public function search_books(){
        if (!$this->search_data) {
            $results =Books::all();
        } else {
            $results = Books::where('name', 'LIKE', '%' . $this->search_data . '%')->get();
        }
        $this->Posts=$results;
        //dd($this->Books->first()->cover_photo);
    }
    public function render()
    {
        return view('livewire.user-reviews');
    }
}
