<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ViewsRequest;
use App\Models\Views;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ViewsRequest $request)
    {
        $data = $request->validated();

        if ($this->checkView($request->user()->id, $data['book']) == false) {
            $View = Views::create($data);
            return response(['View' => $View], 200);

            // $View_new=new Views();fgffg
            // $View_new->user=Auth::id(); fgfgf
            // $View_new->book=$this->book_id;gfgg 
            // $View_new->save(); fgfgf
        } else {
            return response()->json([
                'message' => 'This record already exists.',
            ], 409);
        }

        //
    }

    protected function checkView($user, $book)
    {
        $View = Views::where('user', $user)->where('book', $book)->get();
        //$this->Views_=$View;
        if (!$View->isEmpty()) {
            return true;
        } else {
            return false;
        }
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
