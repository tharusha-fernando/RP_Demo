<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Books;

class SearchBookUser extends Component
{
    public $search_data="";
    //public $Books;

    public function search_books(){
        if (!$this->search_data) {
            $results = Books::paginate(10);
        } else {
            $results = Books::where('name', 'LIKE', '%' . $this->search_data . '%')->paginate(10);
        }
        //$this->Books=$results;
        return $results;
        //dd($this->Books->first()->cover_photo);
    }


    public function render()
    {
        return view('livewire.search-book-user',[
            'Books'=>$this->search_books(),
        ]);
    }
}
