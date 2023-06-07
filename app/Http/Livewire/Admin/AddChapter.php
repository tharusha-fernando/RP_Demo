<?php

namespace App\Http\Livewire\Admin;

use App\Models\Chapters;
use Livewire\Component;

class AddChapter extends Component
{
    public $name,$chap_number,$pub_date,$data,$book_id;


    public function mount($id){
        $this->book_id=$id;

    }


    public function add_books(){
        //dd($this->name);
         //dd($this->doc_upload);
         $validatedData = $this->validate([
            'name'=> ['required', 'string', 'max:255'],
            'chap_number'=> ['required', 'integer'],
            //'date'=>'required',
            'pub_date'=>'required',
            //'catogory'=>'required',
            //'cover_photo'=>'required',
            'data' => 'required'
        ]);
        $Chapter=new Chapters();
        $Chapter->name=$this->name;
        $Chapter->chapter_number=$this->chap_number;
        //$Book->date=$this->date;
        $Chapter->pubdate=$this->pub_date;
        $Chapter->data=$this->data;
        $Chapter->book=$this->book_id;
        
        $Chapter->save();

        session()->flash('message_customer', 'Chapter Has Been Addedd');
    }

    public function render()
    {
        return view('livewire.admin.add-chapter');
    }
}
