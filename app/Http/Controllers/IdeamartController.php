<?php

namespace App\Http\Controllers;

use App\Http\Livewire\TramnscationsIdeamart;
use App\Models\CaasNoti;
use App\Models\DataFeed;
use App\Models\JsonMasages;
use App\Models\Payments;
use App\Models\TransactionsIdeamart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;

class IdeamartController extends Controller
{

    public function payment_data()
    {
        $dataFeed = new DataFeed();
        //$book_id=$id;,'book_id'
        return view('user/ideamart', compact('dataFeed'));
    }

    public function mspace()
    {
        $dataFeed = new DataFeed();
        //$book_id=$id;,'book_id'
        return view('user/mspace', compact('dataFeed'));
    }

    public function sendRequest(Request $request)
    {
        //dd($suid=$request['suid']);

        $suid = $request['suid'];
        // Assuming $suid is the phone number in the format +94771234567
        //$suid = '.$suid;

        //dd("tel:".$suid);
        //dd($suid);


        $response = Http::post(', [
            'applicationId' => ',
            'password' => '',
            'externalTrxId' => '12345678901234567890123456789012',
            'subscriberId' => '+94771331857',
            'currency' => 'LKR',
            'amount' => '10',
        ]);

        // Access response data
        $response2 = $response->json();
        dd($response2);
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
            $Payment->amount = intval("1");
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

    public function Unregister()
    {
        dd("ideamart unreg");//->
        $response = Http::post(', [
            'applicationId' => 
            'password' => '',
            'version' => '1.0',
            'action' => '1',
            'subscriberId' => Auth::user()->mssisdn,

        ]);
        $data = $response->json();
        //dd($data);
        $Json = new JsonMasages();
            $Json->position = "ideamart unreg check sub";
            $Json->massage = json_encode($data);
            $Json->save();
        //dd($data);
        if($data['subscriptionStatus']=="UNREGISTERED"){
            return redirect('mobilePayments/');
        }else{
            return redirect('mobilePayments/')->with('Message',"Something Went Wrong Please Try Again Later. If This Issue Perisists Call Admnin And Show Bellow Code")
            ->with('Code',$data['statusCode']);
        }

    }

    public function directDebit()
    {
        //$randomNumber 
        $externalTrxId = Carbon::now()->timestamp;
        //dd($externalTrxId);
       // $externalTrxId = Str::random(32);
        $Transaction = new TransactionsIdeamart();
        $Transaction->externalTrxId = $externalTrxId;
        $Transaction->user = Auth::id();
        $Transaction->save();

        $response = Http::post(, [
            'applicationId' => ',
            'password' => '',
            'externalTrxId' =>  $externalTrxId,
            'subscriberId' => "tel:B%3C4OiL7R7Kuhpakr/4IwtJgi49IXhUgrYVOa5LKPKcP6sURDIZEJ+DzP5CFgw0C/bhW",
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
        //$Transaction->shortDescription
    }

    public function cassNoti(Request $request)
    {
        $body = $request->getContent();
        $caas = new CaasNoti();
        $caas->position = "caasnoti";
        $caas->massage = $body;
        //$caas->massage = json_encode($requestData);
        $caas->save();

        // Get the query parameters
        //$queryParams = $request->query();
        //$requestData = json_encode($request->all());
        // Save the query parameters to the caas table
        //$caas = new CaasNoti();
        //$caas->position = "caasnoti";
        //$caas->massage = json_encode($queryParams);
        //$caas->massage = json_encode($requestData);
        //$caas->save();

        // Return a success response to CaaS API
        //return response('OK', 200);
    }


    public function cassComp(Request $request)
    {
        // Get the query parameters
        $queryParams = $request->query();

        // Save the query parameters to the caas table
        $caas = new CaasNoti();
        $caas->position = "caasnoti";
        $caas->massage = json_encode($queryParams);
        $caas->save();

        // Return a success response to CaaS API
        return response('OK', 200);
    }

    //
}
