<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;


class PaymentsController extends Controller
{
    public function payment_init()
    {
        $url = 'https://sampath.paycorp.lk/rest/service/proxy'; //'https://test-merchants.paycorp.com.au/paycorp-webservice/InterfaceServlet';
        $token = 
        $return_user='https://readingpanel.lk/payment_complete/'.strval(Auth::id());
        $request_date=Carbon::now()->setTimezone('Asia/Colombo');
        $hmac=
        $response = Http::withHeaders([
            'HMACSecret' =>
            'AUTHTOKEN' => $token,
            'Content-Type' => 'application/json',
            'Cache-Control' => 'no-cache',
        ])->post($url, [
            'operation' => 'PAYMENT_INIT',
            'requestDate' => $request_date,
            'validateOnly' => false,
            'requestData' => [
                'clientId' => 
                'clientIdHash' => '',
                'transactionType' => 'PURCHASE',
                'tokenize' => true,
                'tokenReference' => 'egiwuegfiuwebf',
                'transactionAmount' => [
                    'totalAmount' => 0,
                    'paymentAmount' => 30000,
                    'serviceFeeAmount' => 0,
                    'currency' => 'LKR',
                ],
                'redirect' => [
                    'returnUrl' => $return_user,
                    'returnMethod' => 'GET',
                ],
                'clientRef' => 'readingpanel',
                'comment' => 'Comment',
                'extraData' => [
                    'msisdn' => '0432384947',
                    'sessionId' => 'x2d2323r23r23',
                ],
            ],
        ]);

        // Process the response as needed
        $data = $response->json();

        //return $data;
        $paymentPageUrl = $data['responseData']['paymentPageUrl'];
        $paymenturl = $paymentPageUrl; //"abcd.com";
        return view('user/payments')->with('url', $paymenturl);
    }

    public function payment_complete(Request $request,$user)
    {
        $reqid = $request->get('reqid');
        $url =  //'https://test-merchants.paycorp.com.au/paycorp-webservice/InterfaceServlet';
        $token = ; //'d5c1b696-b86a-4613-92f8-62dd412b1a56';
        $request_date=Carbon::now()->setTimezone('Asia/Colombo');
        $response = Http::withHeaders([
            'HMACSecret' =>
            'AUTHTOKEN' => 
            'Content-Type' => 'application/json',
            'Accept' => '*'
        ])->post($url, [
            "version" => "1.5",
            "operation" => "PAYMENT_COMPLETE",
            "msgId" => 
            "requestDate" => $request_date,
            "validateOnly" => false,
            "requestData" => [
                "clientId" => 
                "reqid" =>
            ]
        ]);

        // Process the response as needed
        $data = $response->json();

        //dd($data);
        $responseData = $data['responseData'];
        //dd($responseData['responseCode']);
        if ($responseData['responseCode'] == "00"||$responseData['responseCode'] == "08 ") {
            $totalAmount = json_encode($responseData['transactionAmount']['paymentAmount']);
            $responseCode =json_encode($responseData['responseCode']);
            $txnReference = json_encode($responseData['txnReference']);
            $token__ = json_encode($responseData['token']);
            //dd($totalAmount, $responseCode, $txnReference, $token);
            $Payment = new Payments();
            $Payment->user = intval($user);
            $Payment->date_initiated = Carbon::now()->setTimezone('Asia/Colombo');
            $Payment->amount = intval($totalAmount);
            $Payment->method = "card";
            //$Payment->responseData = $responseData;
            $Payment->totalAmount = $totalAmount;
            $Payment->responseCode = $responseCode;
            $Payment->txnReference = $txnReference;
            $Payment->token = $token__;
            $Payment->save();

            $User=User::find(intval($user));
            if(is_null($User->subendDate)){
                $User->subendDate=Carbon::now()->setTimezone('Asia/Colombo')->addDays(30);
                $User->last_payment=Carbon::now()->setTimezone('Asia/Colombo');
            }else{
                $User->subendDate=Carbon::now()->setTimezone('Asia/Colombo')->addDays(30);
                $User->last_payment=Carbon::now()->setTimezone('Asia/Colombo');
            }
            $User->save();
            $data = [
                'date'=>Carbon::now()->setTimezone('Asia/Colombo'),
                'User'=>$User->name,
                'amount'=>$totalAmount,
                'massage_success'=>"Payment Successfull",
            ];
            //$pdf = Pdf::loadView('user/invoice', $data);
            //return $pdf->download('invoice.pdf');
            return view('user/invoice')->with('amount',$totalAmount/100)->with('date',Carbon::now()->setTimezone('Asia/Colombo'))->with('massage_success',"Payment Successfull")->with('User',$User->name);
        } else {
            return view('user/invoice')->with('amount',0)->with('date',Carbon::now()->setTimezone('Asia/Colombo'))->with('massage_error',"Payment Failed Please Check You Card And Try Again")->with('User',"Null");
        }



        return $data;
    }
    //
}
