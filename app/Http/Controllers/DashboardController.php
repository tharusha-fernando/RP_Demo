<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Auth;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            $dataFeed = new DataFeed();

            if (Auth::user()->hasRole('administrator')){
                return view('admin/admin_dash', compact('dataFeed'));
            }elseif(Auth::user()->hasRole('user')){
                $dataFeed = new DataFeed();
                return view('user/user_dash', compact('dataFeed'));   
            }
        }


        public function AddBooks(){
            $dataFeed = new DataFeed();
            return view('admin/admin_dash', compact('dataFeed'));
        }


        public function guest(){
            $dataFeed = new DataFeed();
            return view('user/user_dash', compact('dataFeed'));
        }

        public function favorites(){
            $dataFeed = new DataFeed();
            return view('user/favorites', compact('dataFeed'));
        }

        public function featured(){
            $dataFeed = new DataFeed();
            return view('user/featured', compact('dataFeed'));
        }
        public function reviews(){
            $dataFeed = new DataFeed();
            return view('user/reviews', compact('dataFeed'));
        }
        public function read($id){
            $dataFeed = new DataFeed();
            $book_id=$id;
            return view('user/ReadBook', compact('dataFeed','book_id'));
        }
        public function readrev($id){
            $dataFeed = new DataFeed();
            $book_id=$id;
            return view('user/BookReviews', compact('dataFeed','book_id'));
        }

        public function Payment_Select(){
            $dataFeed = new DataFeed();
            //$book_id=$id;,'book_id'
            return view('user/paymentmethod', compact('dataFeed'));
        }
    }
