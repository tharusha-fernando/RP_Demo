<?php

namespace App\Http\Livewire\Admin;

use App\Models\Books;
use Livewire\Component;
//use WithFileUploads;
use Livewire\WithFileUploads;

class AddBooks extends Component
{
    use WithFileUploads;
    //use Livewire\WithFileUploads;
    public $name,$author,$date,$description,$cover_photo,$catogory;


    public function add_books(){
        //dd($this->name);
         //dd($this->doc_upload);
         $validatedData = $this->validate([
            'name'=> ['required', 'string', 'max:255'],
            'author'=> ['required', 'string', 'max:255'],
            //'date'=>'required',
            'description'=>'required',
            'catogory'=>'required',
            //'cover_photo'=>'required',
            'cover_photo' => 'nullable|image|max:1024'
        ]);
        $Book=new Books();
        $Book->name=$this->name;
        $Book->author=$this->author;
        //$Book->date=$this->date;
        $Book->description=$this->description;
        $Book->catogory=$this->catogory;
        if (!is_null($this->cover_photo)){
            $filepath=$this->cover_photo->store('cover_photos','public');
            //dd($filepath);
            $Book->cover_photo=$filepath;
        }
        $Book->save();

        session()->flash('message_customer', 'Book Has Been Addedd');
    }


    public function render()
    {
        return view('livewire.admin.add-books');
    }
}
