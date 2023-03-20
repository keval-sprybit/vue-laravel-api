<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimeRequest;
use App\Http\Resources\AnimeResource;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Anime::all();
        return AnimeResource::collection(Anime::all());
        // return AnimeResource::collection(Anime::paginate(2));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimeRequest $request)
    {
        //
        $anime =new Anime();
        $anime->title=$request->title;
        $anime->poster_image=$request->poster_image;
        $anime->rating=$request->rating;
        $anime->adults=$request->adults;

        $anime->save();

        return $anime;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        //
        // $anime=Anime::find($anime);

        // return $anime;
        return new AnimeResource($anime);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(AnimeRequest $request,Anime $anime)
    {
        //
        // $anime =Anime::find($id);
        // $anime->title=$request->title;
        // $anime->poster_image=$request->poster_image;
        // $anime->rating=$request->rating;
        // $anime->adults=$request->adults;
        // $anime->save();

        $anime->update([
            'title' => $request->title,
            'poster_image' => $request->poster_image,
            'rating' => $request->rating,
            'adults' => $request->adults
        ]);

        return $anime;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        //
        $anime->delete();

        return response("deleted");
    }
}
