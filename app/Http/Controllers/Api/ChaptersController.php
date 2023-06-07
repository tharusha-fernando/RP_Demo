<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChaptersResource;
use App\Models\Chapters;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Books=$request->input('books');
        if($request->user()->hasRole('administrator')){
            $Chapters=Chapters::where('book',intval($Books))->get();
        }else{
        
            if ($request->user()->subendDate >= Carbon::now()->setTimezone('Asia/Colombo')||$request->user()->hasRole('administrator')) {
                $Chapters = Chapters::where('book', intval($Books))->orderBy('chapter_number', 'ASC')->where('pubdate', '<=', Carbon::now()->setTimezone('Asia/Colombo'))->paginate(1);
            
            } else {
                //dd(Auth::user()->subendDate);
                //dd("asasasasasa");
                $Chapters = Chapters::where('book', intval($Books))->orderBy('chapter_number', 'ASC')->where('pubdate', '<=', Carbon::now()->setTimezone('Asia/Colombo'))->take(1)->paginate(1);
            }
        }
        return ChaptersResource::collection($Chapters);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
