<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Livewire\Component;

class BookRack extends Component
{
    public $Posts,$search_data;

    public function mount(){
        //$this->Posts=Books::all();
    }

    public function search_books(){
        if (!$this->search_data) {
            $results = Books::all();
        } else {
            $results = Books::where('name', 'LIKE', '%' . $this->search_data . '%')->get();
        }
        $this->Posts=$results;
        //dd($this->Books->first()->cover_photo);
    }


    public function render()
    {
        $this->search_books();
        return view('livewire.book-rack');
    }
}
