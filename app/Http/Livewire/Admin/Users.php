<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;

class Users extends Component
{
    //public $Users;
    public $Count;

    public function mount(){
        $Users=User::all();//where('subendDate','>=',Carbon::now()->setTimezone('Asia/Colombo'))->get();
        $this->Count=$Users->count();
        
    }



    public $search_data="";
    //public $Books;

    public function search_books(){
        if (!$this->search_data) {
            $results = User::paginate(50);
        } else {
            $results = User::where('name', 'LIKE', '%' . $this->search_data . '%')->paginate(50);
        }
        //$this->Books=$results;
        return $results;
        //dd($this->Books->first()->cover_photo);
    }

    
    public function deletebook($user_id){
        $user=User::find($user_id);
        if($user->hasRole('administrator')){
            $this->mount();
        }else{
            $user->delete();

            $this->mount();
        }
       
    }

    public function activate_package($id){
        //dd($id);
        $User=User::find($id);
        if(is_null($User->subendDate)){
            $User->subendDate=Carbon::now()->setTimezone('Asia/Colombo')->addDays(30);
            $User->last_payment=Carbon::now()->setTimezone('Asia/Colombo');
        }else{
            $User->subendDate = Carbon::parse($User->subendDate)->addDays(30);
            $User->last_payment=Carbon::now()->setTimezone('Asia/Colombo');
        }
        //dd($User);
        //$User->
        $User->save();
        $this->mount();
    }
    public function render()
    {
        return view('livewire.admin.users',[
            //'Users'=>User::paginate(),
            'Users'=>$this->search_books(),
        ]);
    }
}
