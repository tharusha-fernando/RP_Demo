<?php

namespace App\Http\Livewire;

use App\Models\Books;
use App\Models\Chapters;
use App\Models\Reviews;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

//use Livewire\Component;

class BookReviews extends Component
{
    public $book_id,$Book,$Chapters_,$id1,$id2,$id3,$review,$Reviews;//$Chapters;
    public $count=0;
    //public $Chapters=[];
    public function mount(){
        $this->Book=Books::find($this->book_id);
        $this->Chapters_=Chapters::where('book',$this->book_id)->orderBy('chapter_number','ASC')->where('pubdate','<=',Carbon::now())->select('id')->take(3)->get();
        foreach($this->Chapters_ as $Chaptr){
            if($this->count==0){
                $this->id1=$Chaptr->id;
            }elseif($this->count==1){
                $this->id2=$Chaptr->id;
            }elseif($this->count==2){
                $this->id3=$Chaptr->id;
            }
            $this->count=$this->count+1;

        }
        $this->Reviews=Reviews::where('book',$this->book_id)->get();

        //dd($this->Chapters);
        //dd($this->book_id);
    }
    public function render()
    {
        return view('livewire.book-reviews');
    }
}
