<?php

namespace App\Http\Livewire\Admin;

use App\Models\Chapters;
use Livewire\Component;

class UpdateChapter extends Component
{
    public $name,$chap_number,$pub_date,$data,$Chapter_id,$book_id;


    public function mount($id){
        $this->Chapter_id=$id;
        $Chapter=Chapters::find($id);

        $this->name=$Chapter->name;
        $this->chap_number=$Chapter->chapter_number;
        $this->pub_date =$Chapter->pubdate;
        $this->data=$Chapter->data;
        $this->book_id=$Chapter->book;

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
        $Chapter=Chapters::find($this->Chapter_id);
        $Chapter->name=$this->name;
        $Chapter->chapter_number=$this->chap_number;
        //$Book->date=$this->date;
        $Chapter->pubdate=$this->pub_date;
        $Chapter->data=$this->data;
        $Chapter->book=$this->book_id;
        //dd($Chapter);
        $Chapter->save();
        $this->mount($this->Chapter_id);

        session()->flash('message_customer', 'Chapter Has Been Updated');
    }

    public function deletebook(){
        $Chapter=Chapters::find($this->Chapter_id);
        //dd($Chapter);
        $Chapter->delete();
        return redirect('/view_books/'.$this->book_id);
    }




    public function render()
    {
        return view('livewire.admin.update-chapter');
    }
}
