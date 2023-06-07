<?php

namespace App\Http\Livewire;

use App\Mail\EzCashPaymentAdmin;
use App\Models\EzCash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class EzCashUserView extends Component
{
    use WithFileUploads;
    public $guidlines = "mcash";
    public $screenshot, $number, $description, $Duplicate, $Screenshot_Image_;





    public function mount()
    {
        $this->Duplicate = EzCash::where('user', Auth::id())->where('statusApprovedorNot', 'not')
            ->whereMonth('created_at', now()->month)
            ->get()->first();

        if (!is_null($this->Duplicate)) {
            $this->Screenshot_Image_ = $this->Duplicate->screenshot; //,
            //$this->screenshot=$this->Duplicate->screenshot;
            $this->number = $this->Duplicate->numbernumber;
            $this->description = $this->Duplicate->descripption;
        }
        //dd(asset('images/dialogze/Screenshot_20230429-141704_Phone.jpg'));
        //dd($this->Duplicate);
    }


    public function add_fav($data)
    {
        //dd($data);
        $this->guidlines=$data;
        //if ($this->guidlines == "yes") {
          //  $this->guidlines = "no";
        //} elseif ($this->guidlines == "no") {
          //  $this->guidlines = "yes";
        //}
    }





    public function upload()
    {
        //sleep(4);
        //sleep(2);
        $validatedData = $this->validate([
            //'name'=> ['required', 'string', 'max:255'],
            //'author'=> ['required', 'string', 'max:255'],
            //'date'=>'required',
            //'description'=>'required',
            //'catogory'=>'required',
            //'cover_photo'=>'required',
            //'cover_photo' => 'nullable|image|max:1024'
            'screenshot' => 'image|max:1024',
            'number' => 'required',
            'description' => 'required'
        ]);
        //dd($validatedData);
        if (is_null($this->Duplicate)) {
            $EzCash = new EzCash();
            if (!is_null($this->screenshot)) {
                $filepath = $this->screenshot->store('screenshots', 'public');
                //dd($filepath);
                $EzCash->screenshot = $filepath;
            }
            $EzCash->descripption = $this->description;
            $EzCash->numbernumber = $this->number;
            $EzCash->user = Auth::id();
            //dd($EzCash);
            $EzCash->save();
            $this->sendmail($EzCash);
            $this->mount();
            session()->flash('message_customer', "Screenshot Has Been Uploaded Check Your Subscription Status In Hour"); //'Book Has Been Addedd'
    
        } else {
            $EzCash = EzCash::find($this->Duplicate->id);
            if (!is_null($this->screenshot)) {
                $filepath = $this->screenshot->store('screenshots', 'public');
                //dd($filepath);asas
                $EzCash->screenshot = $filepath;
            }
            //asasasasasasasa 
            $EzCash->descripption = $this->description;
            $EzCash->numbernumber = $this->number;
            $EzCash->user = Auth::id();
            //dd($EzCash);asas
            $EzCash->save();
            //$this->sendmail($EzCash); aas
            $this->mount();
            session()->flash('message_customer', "Screenshot Has Been Updated Check Your Subscription Status In Hour"); //'Book Has Been Addedd'

        }
       // session()->flash('message_customer', "Screenshot Has Been Uploaded"); //'Book Has Been Addedd'
    }
    public function sendmail(EzCash $EzCash){
        //dd($EzCash);
        $address="tharushafdo2000@gmail.com";
        //$admins=User::all();
        $admins = User::select('email')->whereHas('roles', function ($query) {
            $query->where('name', 'administrator');
        })->get();
        //dd($admins);
        $array_admin=[];
        foreach($admins as $admin){
            //if($admin->hasRole(''));
            array_push($array_admin,$admin->email);
        }
        //dd($array_admin);
        $addresses=$array_admin;
        Mail::bcc($addresses)->send(new EzCashPaymentAdmin($EzCash));

        //dd(Mail::to($address)->send(new EzCashPaymentAdmin($EzCash)));
        //Mail::to($address)->send(new EzCashPaymentAdmin($EzCash));
    }
    public function render()
    {
        return view('livewire.ez-cash-user-view');
    }
}
