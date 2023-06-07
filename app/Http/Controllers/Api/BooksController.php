<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BooksRequest;
use App\Http\Resources\BooksResource;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name=$request->input('name');
        if($name==""){
            $results = Books::withCount('favorites')->withCount('favorites','views')->paginate(10);
        }else{
            $results = Books::where('name', 'LIKE', '%' . $name . '%')->withCount('favorites','views')->paginate(10);
        }
        return BooksResource::collection($results);

        //$data=$request->validated();
        //$Books=Books::create($data);

        //return new BooksResource($$Books);
        
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequest $request)
    {
        //$data=$request->validated();
        //$Books=Books::create()

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
        $Books=Books::withCount('favorites','views')->find($id);
        return new BooksResource($Books);
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
