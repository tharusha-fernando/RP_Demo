<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LastReadRequest;
use App\Models\LastRead;
use Illuminate\Http\Request;

class LastReadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$data=$request->validated();
        $books = $request->input('books');
        $last_read = LastRead::where('user', $request->user()->id)->where('book', $books)->get()->first();
        return response()->json([
            //'favorites_count' => $Favorites,
            'last_read' => $last_read,
        ]);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LastReadRequest $request)
    {
        $data = $request->validated();

        $lstrd = LastRead::where('book', $data['book'])
            ->where('user', $request->user()->id)
            ->first();
        if (is_null($lstrd)) {
            $last_read = LastRead::create($data);
            return response(['last_read' => $last_read], 200);
        } else {
            $last_read = LastRead::find($lstrd->id);
            $last_read->update($data);
            return response(['last_read' => $last_read], 200);
            //return 
        }


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
    public function update(LastReadRequest $request, $id)
    {
        $data = $request->validated();
        $last_read = LastRead::find($id);
        $last_read->update($data);
        return response(['last_read' => $last_read], 200);
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
