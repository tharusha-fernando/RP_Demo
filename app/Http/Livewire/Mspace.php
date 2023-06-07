<?php

namespace App\Http\Livewire;

use App\Models\JsonMasages;
use App\Models\Payments;
use App\Models\TransactionsIdeamart;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Mspace extends Component
{
    public $first_name, $last_name, $suid, $otp;
    public $otp_status = "no";



    public $statusCode, $statusDetail, $referenceNo, $version;
    public $statusCodeVe, $statusDetailVe, $referenceNoVe, $versionVe, $subscriptionStatus, $subscriberId;
    

    public function checkSub($suid){
        $response = Http::post('https://api.mspace.lk/subscription/getStatus', [
            'applicationId' => 'APP_064423',
            'password' => 'ae5e2d64b59b6e6ae5f09ffb17d342ff',
            'subscriberId' => $suid,
        ]);
        $data=$response->json();//"subscriptionStatus": "REGISTERED",
        $Json = new JsonMasages();
            $Json->position = "check sub";
            $Json->massage = json_encode($data);
            $Json->save();
        if($data['subscriptionStatus']=="REGISTERED"){
            return true;
        }else{
            return false;
        }

    }

    public function submit_number()
    {
        if (!is_null(Auth::user()->mssisdn) && $this->checkSub(Auth::user()->mssisdn)) {
            $this->sendRequest(Auth::user()->mssisdn);
        } else {
            // dd($this->suid);

            $response = Http::post('https://api.mspace.lk/otp/request', [
                'applicationId' => 'APP_064423',
                'password' => 'ae5e2d64b59b6e6ae5f09ffb17d342ff',
                'subscriberId' => 'tel:94769953100',
                'applicationMetaData' => [
                    'client' => 'MOBILEAPP',
                    'device' => 'Samsung S10',
                    'os' => 'android8',
                    'appCode' => 'https://play.google.com/store/apps/details?id=lk.dialog.megarunlor',
                ],
            ]);

            //$data = $response->json();
            //dd($data);
            $data = $response->json();
            //echo $data;
            $Json = new JsonMasages();
            $Json->position = "req otp";
            $Json->massage = json_encode($data);
            $Json->save();
            //dd($data);
            //statusCode":"S1000"


            if ($data['statusCode'] == "S1000") {
                $this->statusCode = $data['statusCode'];
                $this->statusDetail = $data['statusDetail'];
                $this->referenceNo = $data['referenceNo'];
                $this->version = $data['version'];
                $User=User::find(Auth::id());
                $User->lastRefN=$data['referenceNo'];
                $User->save();

                $this->otp_status = "yes";
                // do something with the response data
            } else {
                $this->otp_status = "no";
                dd($data);
                // handle error response
            }
        }
    }
//#678#6#1#
    public function submit_otp()
    {
        //use Illuminate\Support\Facades\Http;

        $response = Http::post('https://api.mspace.lk/otp/verify', [
            'applicationId' => 'APP_064423',
            'password' => 'ae5e2d64b59b6e6ae5f09ffb17d342ff',
            'referenceNo' =>"9476995310016817136855955329872" ,
            'otp' => $this->otp,
        ]);//Auth::user()->lastRefN

        $data = $response->json();
        //dd($data);
        //dd("jbjjjju");
        //echo $data;
        $Json = new JsonMasages();
        $Json->position = "veofy otp";
        $Json->massage = json_encode($data);
        $Json->save();
        //dd($data);
        if ($data['statusCode'] == "S1000") {
            $data = $response->json();
            $this->statusCodeVe = $data['statusCode'];
            $this->statusDetailVe = $data['statusDetail'];
            $this->subscriptionStatus = $data['subscriptionStatus'];
            $this->versionVe = $data['version'];
            $this->subscriberId = $data['subscriberId'];
            $User=User::find(Auth::id());
            $User->mssisdn=$data['subscriberId'];
            $User->save();
            $this->sendRequest($User->mssisdn);
            // do something with the response data
        } else {
            // handle error response
            dd($data);
        }
    }




    public function changescreen(){
        if($this->otp_status=="no"){
         $this->otp_status="yes";
        }else{
         $this->otp_status="no";
        }
        //$this->mount();
     }






    public function directDebit(){
        //$randomNumber 
        dd("paynow mspace");
        $externalTrxId= '';
        for ($i = 0; $i < 32; $i++) {
            $externalTrxId .= mt_rand(0, 9);
        }
       // $externalTrxId = Str::random(32);->
        $Transaction = new TransactionsIdeamart();
        $Transaction->externalTrxId = $externalTrxId;
        $Transaction->user = Auth::id();
        $Transaction->save();

        $response = Http::post('https://api.ideamart.io/caas/direct/debit', [
            'applicationId' => 'APP_064423',
            'password' => 'ae5e2d64b59b6e6ae5f09ffb17d342ff',
            'externalTrxId' =>  $externalTrxId,
            'subscriberId' => Auth::user()->mssisdn,
            "paymentInstrumentName" => "Mobile Account",
            'currency' => 'LKR',
            'amount' => '5',
        ]);

        // Access response data
        $response2 = $response->json();
        //dd($response2);
        if ($response2['statusCode'] == "P1003") {
            $Transaction->timeStamp = $response2['timeStamp'];
            $Transaction->longDescription = $response2['longDescription'];
            $Transaction->externalTrxId = $response2['externalTrxId'];
            $Transaction->statusDetail = $response2['statusDetail'];
            $Transaction->shortDescription = $response2['shortDescription'];
            $Transaction->internalTrxId = $response2['internalTrxId'];
            $Transaction->statusCode = $response2['statusCode'];
            $Transaction->save();
        } else {
            dd($response2);
        }
       
   }




   public function unregister(){
    return redirect('unregisterMspace/');
}













    public function sendRequest($suid)
    {
        //dd($suid=$request['suid']);

        //$suid = $this->subscriberId;
        // Assuming $suid is the phone number in the format +94771234567
        //$suid = '.$suid;

        //dd("tel:".$suid);
        //dd($suid);


        $response = Http::post('https://api.mspace.lk/caas/direct/debit', [
            'applicationId' => 'APP_064423',
            'password' => 'ae5e2d64b59b6e6ae5f09ffb17d342ff',
            'externalTrxId' => '12345678901234567890123456789012',
            'subscriberId' => $suid,
            'currency' => 'LKR',
            'amount' => '10',
        ]);

        // Access response data
        $response2 = $response->json();
        $Json = new JsonMasages();
        $Json->position = "direct_debit";
        $Json->massage = json_encode($response2);
        $Json->save();
        //dd($response2);
        //echo $response2;
        $status = $response2['statusCode'];
        $statusDetail = $response2['statusDetail'];
        

        if ($statusDetail == "Success") {
            $timeStamp = $response2['timeStamp'];
            $shortDescription = $response2['shortDescription'];
            $externalTrxId = $response2['externalTrxId'];
            $longDescription = $response2['longDescription'];
            $internalTrxId = $response2['internalTrxId'];


            $Payment = new Payments();
            $Payment->user = Auth::id();
            $Payment->date_initiated = Carbon::now()->setTimezone('Asia/Colombo');
            $Payment->amount = intval("10");
            $Payment->method = "mobile";
            //$Payment->responseData = $responseData;
            $Payment->totalAmount = 1;
            $Payment->responseCode = $status;
            $Payment->txnReference = $externalTrxId;
            $Payment->token = $internalTrxId;
            //$Payment->save();
            return view('user/invoice')->with('amount', 1)->with('date', Carbon::now()->setTimezone('Asia/Colombo'))->with('massage_success', "Payment Successfull")->with('User', Auth::user()->name);
        } else {
            return view('user/invoice')->with('amount', 0)->with('date', Carbon::now()->setTimezone('Asia/Colombo'))->with('massage_error', "Payment Failed Please Check You Card And Try Again")->with('User', "Null");
        }
    }



    public function render()
    {
        return view('livewire.mspace');
    }
}
