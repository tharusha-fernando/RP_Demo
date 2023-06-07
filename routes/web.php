<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EzCashController;
use App\Http\Controllers\IdeamartController;
use App\Http\Controllers\MspaceController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Admin\AddBooks;
use App\Http\Livewire\Admin\AddChapter;
use App\Http\Livewire\Admin\EzCashAdmiView;
use App\Http\Livewire\Admin\JsonMassages;
use App\Http\Livewire\Admin\Payments;
use App\Http\Livewire\Admin\Reviews;
use App\Http\Livewire\Admin\SearchBooks;
use App\Http\Livewire\Admin\UpdateBook;
use App\Http\Livewire\Admin\UpdateChapter;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Admin\ViewBook;
use App\Http\Livewire\Admin\ViewEzcash;
use App\Http\Livewire\CaasNotis;
use App\Http\Livewire\EzcashPaymentsAdminView;
use App\Http\Livewire\EzCashUserView;
use App\Http\Livewire\TramnscationsIdeamart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'guest']);
Route::get('payment_complete/{user}',[PaymentsController::class,'payment_complete']);


Route::get('ussdConnect/',[IdeamartController::class,'cassNoti'])->name('ussdConnect');

//https://readingpanel.lk/ussdConnect
Route::get('subsNoti/',[IdeamartController::class,'cassNoti'])->name('subsNoti');
Route::get('messageRec/',[IdeamartController::class,'cassNoti'])->name('messageRec');
Route::get('messageDelivery/',[IdeamartController::class,'cassNoti'])->name('messageDelivery');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });
    //users
    Route::get('/featured',[DashboardController::class,'featured']);
    Route::get('/favorites',[DashboardController::class,'favorites']);
    Route::get('/reviews',[DashboardController::class,'reviews']);
    Route::get('/contacts',[DashboardController::class,'contacts']);
    Route::get('BookReader/{id}',[DashboardController::class,'read']);//readrev
    Route::get('Reviews/{id}',[DashboardController::class,'readrev']);
    //payemnts
    Route::get('submit_payment/',[PaymentsController::class,'payment_init']);
    Route::get('PaymentMethod/',[DashboardController::class,'Payment_Select']);
    //caas
    
    Route::get('caas/',[IdeamartController::class,'sendRequest']);
    Route::get('mobilePayments/',[IdeamartController::class,'payment_data']);
    Route::get('unregisterIdeamart/',[IdeamartController::class,'Unregister']);



    Route::get('mobilePaymentsMobitel/',[IdeamartController::class,'mspace']);


    //mspace
    Route::get('mobitelOnly/',[IdeamartController::class,'mspace']);

    Route::get('unregisterMspace/',[MspaceController::class,'Unregister']);


    //Ez_cash
    Route::get('ezCash/',[EzCashController::class,'index']);


    
    //https://readingpanel.lk/messageRec  sdwsdsds
    //https://readingpanel.lk/messageDelivery   sdsds

    //https://readingpanel.lk/messagesender
    //https://readingpanel.lk/ussdConnect

    //https://readingpanel.lk/caasNoti
    //https://readingpanel.lk/subsNoti


    
   

    Route::group(['middleware' => ['auth', 'role:administrator']], function() {
        Route::get('/new_employee', [DashboardController::class,'new_employee']);//asasasasaUnregister
        Route::get('/add_books',AddBooks::class);
        Route::get('/search_books',SearchBooks::class);
        Route::get('/view_books/{id}',ViewBook::class);
        Route::get('/addchapter/{id}',AddChapter::class);//updateChapter/3
        Route::get('updateChapter/{id}',UpdateChapter::class);
        Route::get('/updateBook/{id}',UpdateBook::class);
        Route::get('/adminReviews',Reviews::class);
        Route::get('/Users',Users::class);
        Route::get('/Payments',Payments::class);
        Route::get('/jsonmassages',JsonMassages::class);
        Route::get('/unregister', [IdeamartController::class,'Unregister']);//'new_employee'Unregister
        Route::get('/directDebit', [IdeamartController::class,'directDebit']);//'new_employee'Unregister
        Route::get('/cassmassages',CaasNotis::class);
        Route::get('/transactions',TramnscationsIdeamart::class);

        //Route::get('/ezCtsA',EzcashPaymentsAdminView::class);
        Route::get('/ezCashPaymentsA',EzCashAdmiView::class);
        Route::get('/ezCashPaymentsASeperately/{id}',ViewEzcash::class);

        Route::get('/get_email',[UserController::class,'GetEmail']);
        Route::get('/getget_msisdnmsdisdn/{msisdn}',[UserController::class,'getmsisdn']);
        
    });
    
    Route::group(['middleware' => ['auth', 'role:user']], function() {
        
    });
});
