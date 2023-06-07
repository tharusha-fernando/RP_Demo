<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Favorites;
use App\Http\Requests\Api\FavoritesRequest;
use App\Http\Resources\FavoritesResource;
use App\Models\Favorites as ModelsFavorites;
use Illuminate\Http\Request;

class FavortesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->input('books');
        $Favorites = count(ModelsFavorites::where('book', intval($name))->get());
        $MyFav = ModelsFavorites::where('book', intval($name))
                ->where('user', $request->user()->id)
                ->exists();
        return response()->json([
            //'favorites_count' => $Favorites,
            'is_favorite' => $MyFav,
        ]);
        //return response()->json([  'favorites_count' => $Favorites,'is_favorite' => !$MyFav,]);ModelsFavorites::where('book',intval($name))->get()
        //return $MyFav;//$Favorites;
        //assasa
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FavoritesRequest $request)
    {

        $data = $request->validated();
        $fav = ModelsFavorites::where('book', $data['book'])
            ->where('user', $request->user()->id)
            ->first();
        if (is_null($fav)) {
            $Favorite = ModelsFavorites::create($data);
            return response(['Favorite' => $Favorite], 200);
        } else {
            return response()->json([
                'message' => 'This record already exists.',
            ], 409);
            //return 
        }

        //return response()

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
    public function destroy($id, Request $request)
    {
        $fav = ModelsFavorites::where('book', $id)
            ->where('user', $request->user()->id)
            ->first();

        if (!$fav) {
            return response()->json(['message' => 'Favorite not found'], 404);
        }

        $fav->delete();

        return response()->json(null, 204);
        //$Fav
        //
    }
}
