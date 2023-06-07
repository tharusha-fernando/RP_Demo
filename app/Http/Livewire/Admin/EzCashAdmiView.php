<?php

namespace App\Http\Livewire\Admin;

use App\Models\EzCash;
use Livewire\Component;

class EzCashAdmiView extends Component
{
    public $search_data="";

    public function search_books(){
        if (!$this->search_data) {
            $results = EzCash::where('statusApprovedorNot','not')->orderBy('created_at','DESC')->paginate(50);
        } else {
            $results = EzCash::whereHas('user', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search_data . '%');
            })->where('statusApprovedorNot','not')->orderBy('created_at','DESC')->paginate(50);
        }
        //$this->Books=$results;
        return $results;
        //dd($this->Books->first()->cover_photo);
    }
    public function render()
    {
        return view('livewire.admin.ez-cash-admi-view',[
            //'Users'=>User::paginate(),
            'Users'=>$this->search_books(),
        ]);
    }
}
