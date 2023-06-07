<?php

namespace App\Http\Livewire;

use App\Models\Books;
use App\Models\Favorites as ModelsFavorites;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favorites extends Component
{
    public $Posts,$search_data;

    public function mount(){
        $this->Posts=ModelsFavorites::where('user',Auth::id())->get();
        //dd($this->Posts);
        //$this->Posts=Books::all();
    }

    public function search_books(){
        if (!$this->search_data) {
            $results = Books::all();
        } else {
            $results = Books::where('name', 'LIKE', '%' . $this->search_data . '%')->get();
        }
        //$this->Posts=$results;
        //dd($this->Books->first()->cover_photo);
    }
    public function render()
    {
        //$this->search_books();
        return view('livewire.favorites');
    }
}
