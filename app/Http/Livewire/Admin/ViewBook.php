<?php

namespace App\Http\Livewire\Admin;

use App\Models\Books;
use App\Models\Chapters;
use App\Models\Favorites;
use Livewire\Component;

class ViewBook extends Component
{
    public $Book,$Chapters;
    public $Favorites=0;
    public function mount($id){

        $this->Book=Books::find($id);
        $this->Chapters=Chapters::where('book',$id)->get();
        $this->Favorites=Favorites::where('book',$id)->get()->count();
        //dd($this->Favorites);
        //dd($id);
    }
    public function deletebook(){
        $this->Book->delete();
        return redirect('/search_books');
    }

    public function set_status(){
        //dd("asasasasasas");
        if($this->Book->status=="ongoing"){
            $this->Book->status="finished";
        }elseif($this->Book->status=="finished"){
            $this->Book->status="ongoing";
        }
        $this->Book->save();
        $this->mount($this->Book->id);
    }
    public function render()
    {
        return view('livewire.admin.view-book');
    }
}
