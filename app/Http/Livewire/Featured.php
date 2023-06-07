<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Livewire\Component;

class Featured extends Component
{
    public $search_data = "";
    public $Posts=[];

    public function mount(){
        //$this->Posts=Books::all();
    }

    public function search_books()
    {
        //dd($this->search_data);
        if ($this->search_data=="") {
            $results = Books::all();
           // $this->mount();
        } else {
            //dd($this->search_data);
            $results = Books::where('name', 'LIKE', '%' . $this->search_data . '%')->get();
        }
        $this->Posts = $results;
        //$this->dispatchBrowserEvent('owlCarouselRefresh');
        //$this->dispatchBrowserEvent('reloadCarousel');
        $this->dispatchBrowserEvent('contentChanged');
        //dd($this->Books->first()->cover_photo);
    }


    public function render()
    {
        $this->search_books();
        return view('livewire.featured');
    }
}
