<?php

namespace App\Http\Livewire\Admin;

use App\Models\EzCash;
use App\Models\Payments;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewEzcash extends Component
{
    public $Book, $Duplicate;


    public function mount($id)
    {
        //dd(now()->month);
        //dd($id);
        $this->Book = EzCash::find($id);
        //$this->Duplicate=EzCash::where('user',$this->Book->user)->get();
        $this->Duplicate = EzCash::where('user', $this->Book->user)->where('statusApprovedorNot','not')
            ->whereMonth('created_at', now()->month)
            ->get();
        //dd($this->Duplicate);

        //dd($this->Book);
    }
    public function approve()
    {
        //dd("asasasasasa");
        $PaymenEzcashNow = EzCash::find($this->Book->id);
        $PaymenEzcashNow->statusApprovedorNot = "approved";
        $PaymenEzcashNow->save();
        $Payment = new Payments();
        $Payment->user = $this->Book->user;
        $Payment->date_initiated = Carbon::now()->setTimezone('Asia/Colombo');
        $Payment->amount = intval("300");
        $Payment->method = "EzCash";
        //$Payment->responseData = $responseData;
        $Payment->totalAmount = "";
        $Payment->responseCode = "";
        $Payment->txnReference = "";
        $Payment->token = "";
        $Payment->save();

        $User=User::find($this->Book->user);
        if(is_null($User->subendDate)){
            //dd("is null");
            $User->subendDate=Carbon::now()->setTimezone('Asia/Colombo')->addDays(30);
            $User->last_payment=Carbon::now()->setTimezone('Asia/Colombo');
        }else{
            //dd("not null");
            $User->subendDate=Carbon::now()->setTimezone('Asia/Colombo')->addDays(30);
            $User->last_payment=Carbon::now()->setTimezone('Asia/Colombo');
        }
        //dd($User);
        $User->save();
        //dd($User);
        $this->mount($this->Book->id);
        session()->flash('message_customer', 'Payment Has Been Approved');

    }
    public function render()
    {
        return view('livewire.admin.view-ezcash');
    }
}
