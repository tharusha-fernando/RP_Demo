<?php

namespace App\Http\Livewire;

use App\Models\Aggreement;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentSelect extends Component
{
    public $checked;
    public $remember = false;
    public $formhide="";

    public function mount(){
       // $this->checked;
        $Aggree=Aggreement::where('user',Auth::id())->get()->first();
        //dd($Aggree);
        if(!is_null($Aggree)){
            $this->checked=$Aggree->user;
        }
        //dd($this->checked);
        //dd($this->formhide);

    }


    public function agreement()
    {
        if ($this->remember) {
            //dd($this->remember);
            $Aggreement=new Aggreement();
            $Aggreement->user=Auth::id();
            $Aggreement->save();
            $this->mount();
            $this->formhide="hide";
            // Checkbox is checked
        } else {
            return redirect()->back();
            // Checkbox is not checked
        }
    }


    //public function agreement(){
      //  $validatedData = $this->validate([
            //'name'=> ['required', 'string', 'max:255'],
            //'author'=> ['required', 'string', 'max:255'],
            //'date'=>'required',
            //'description'=>'required',
            //'catogory'=>'required',
            //'cover_photo'=>'required',
            //'cover_photo' => 'nullable|image|max:1024'
        //    'checked'=>'boolean',
        //]);

        //dd($this->checked);
        //if($this->checked=="true"){
          //  dd("asasasasas");
        //}
    //}


    public function render()
    {
        return view('livewire.payment-select');
    }
}
