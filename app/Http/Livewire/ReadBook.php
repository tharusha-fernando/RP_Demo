<?php

namespace App\Http\Livewire;

use App\Models\Books;
use App\Models\Chapters;
use App\Models\Favorites;
use App\Models\LastRead;
use App\Models\Reviews;
use App\Models\Views;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ReadBook extends Component
{
    use WithPagination;
    public $book_id, $Book, $Chapters_, $id1, $id2, $id3, $review, $Reviews, $IsFav_orNot, $fav_data; //$Chapters;
    public $count,$Favorites = 0;
    public $Views_;
    public $View_status=false;
    public $View_Count=0;
    public $last_read=[];
    public $currentPage;
    public $currentPagetoLoadbububabubaubububaubua;
    private $Chapters=[];

    //public $Chapters=[];

    public function mount()
    {
        //dd($this->checkView());
        //Carbon::setTimezone('Asia/Colombo');
        $this->Book = Books::find($this->book_id);
        $this->View_status=$this->checkView();
        if($this->View_status==false){
            $View_new=new Views();
            $View_new->user=Auth::id();
            $View_new->book=$this->book_id;
            $View_new->save();
        }
        $this->last_read=LastRead::where('user',Auth::id())->where('book',$this->Book->id)->get()->first();
        //dd($this->last_read);
        $this->View_Count=Views::where('book',$this->book_id)->get()->count();
        //dd($View_Count);
        $this->View_Count=$this->View_Count+$this->Book->views;
        $this->currentPagetoLoadbububabubaubububaubua=LastRead::where('user',Auth::id())->where('book',$this->Book->id)->get()->first();
        //dd($View_Count);
        //dd($this->currentPagetoLoadbububabubaubububaubua);

        
        
        //$this->Book->views=$this->Book->views+1;
        //$this->Book->save();
        //dd($this->book_id)
        if (Auth::user()->subendDate >= Carbon::now()->setTimezone('Asia/Colombo')||Auth::user()->hasRole('administrator')) {
            $this->Chapters_ = Chapters::where('book', intval($this->book_id))->orderBy('chapter_number', 'ASC')->where('pubdate', '<=', Carbon::now()->setTimezone('Asia/Colombo'))->select('id')->get();
        
        } else {
            //dd(Auth::user()->subendDate);
            //dd("asasasasasa");
            $this->Chapters_ = Chapters::where('book', intval($this->book_id))->orderBy('chapter_number', 'ASC')->where('pubdate', '<=', Carbon::now()->setTimezone('Asia/Colombo'))->select('id')->take(1)->get();
        }
        //$this->Chapters_=Chapters::where('book',intval($this->book_id))->get();sdsds 
        //dd(Carbon::now()->setTimezone('Asia/Colombo'));sdsds
        foreach ($this->Chapters_ as $Chaptr) {
            if ($this->count == 0) {
                $this->id1 = $Chaptr->id;
            } elseif ($this->count == 1) {
                $this->id2 = $Chaptr->id;
            } elseif ($this->count == 2) {
                $this->id3 = $Chaptr->id;
            }
            $this->count = $this->count + 1;
        }
        $this->Reviews = Reviews::where('book', $this->book_id)->get();
        $this->fav_data = Favorites::where('book', $this->book_id)->where('user', Auth::id())->get();
        $this->Favorites=Favorites::where('book',$this->book_id)->get()->count();
        //d($this->fav_data);

        //dd($this->Chapters);
        //dd($this->book_id);
    }

    public function checkView(){
        $View=Views::where('user',Auth::id())->where('book',$this->book_id)->get();
        $this->Views_=$View;
        if(!$View->isEmpty()){
            return true;
        }else{
            return false;
        }
    }

    public function add_last_read_data_bubububabubububa(){
        //$currentUrl = url()->current();
        //dd($currentUrl);
        $chpater=$this->Chapters;
        //dd($this->currentPage);
        if(is_null($this->currentPagetoLoadbububabubaubububaubua)){
            $Last_Read=new LastRead();
            $Last_Read->user=Auth::id();
            $Last_Read->book=$this->Book->id;
            $Last_Read->page=$this->currentPage;
            $Last_Read->save();
        }else{
            $Last_Read=$this->currentPagetoLoadbububabubaubububaubua;
            //dd($this->currentPagetoLoadbububabubaubububaubua);
            $Last_Read->user=Auth::id();
            $Last_Read->book=$this->Book->id;
            $Last_Read->page=$this->currentPage;
            $Last_Read->save();
        }
        $this->mount();
        session()->flash('message_customer', 'Bookmark Has Been Added');
        //$
    }

    public function go_bubububabubububa(){
        $this->gotoPage($this->currentPagetoLoadbububabubaubububaubua->page);
    }

    public function add_reviews()
    {

        $validatedData = $this->validate([
            'review' => 'required',
            //'name'=> ['required', 'string', 'max:255'],
            //'author'=> ['required', 'string', 'max:255'],
            //'date'=>'required',
            //'description'=>'required',
            //'catogory'=>'required',
            //'cover_photo'=>'required',
            //'cover_photo' => 'nullable|image|max:1024'
        ]);
        $Review = new Reviews();
        $Review->review = $this->review;
        $Review->user = Auth::id();
        $Review->book = $this->book_id;
        $Review->save();
        
        

        session()->flash('message_customer', 'Review Has Been Added');
    }

    public function add_fav()
    {
        $fav_new = new Favorites();//asaasassaasa
        $fav_new->user = Auth::id();
        $fav_new->book = $this->book_id;
        $fav_new->save();
        $this->mount();
    }

    public function remove_fav()
    {
        $fav_new = Favorites::where('user', Auth::id())->where('book', $this->book_id);//aasasasasaaaa
        $fav_new->delete();
        $this->mount();
    }

    public function render()
    {
        $Chapt = Chapters::where('book', $this->book_id)->orderBy('chapter_number');
        //dd($Chapt);
        if (Auth::user()->subendDate >= Carbon::now()->setTimezone('Asia/Colombo')) {
            $this->Chapters=Chapters::whereIn('id', $this->Chapters_->pluck('id'))->orderBy('chapter_number', 'ASC')->paginate(1);
            $this->currentPage=$this->Chapters->currentPage();
            return view('livewire.read-book', [
                'Chapters' => $this->Chapters,
                 //https://laracasts.com/discuss/channels/laravel/limit-and-paginate
                //https://adevait.com/laravel/laravel-overwriting-default-pagination-system
            ]);
        } else {
            $this->Chapters=Chapters::where('id', '=', $this->id1)->orderBy('chapter_number', 'ASC')->paginate(1);
            $this->currentPage=$this->Chapters->currentPage();
            return view('livewire.read-book', [
                'Chapters' => $this->Chapters, 
                //https://laracasts.com/discuss/channels/laravel/limit-and-paginate
                //https://adevait.com/laravel/laravel-overwriting-default-pagination-system
                //->orWhere('id', '=', $this->id2)->orWhere('id', '=', $this->id3)
            ]);
        }

        //return view('livewire.read-book');
    }
}
