<?php

namespace App\Http\Controllers\Api;

use App\Film;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use App\Http\Controllers\Controller;

class FilmController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::orderBy('id','DESC')->paginate(3);
        if($films){
            return response()->json([
                'success' => true,
                'films' => $films
            ], 201);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
        $film = new Film;
        $film->name = $request->name;
        $film->slug = $this->slugify($request->name);
        $film->description = $request->description;
        $film->release_date = $request->release_date;
        $film->ticket_price = $request->ticket_price;
        $film->country = $request->country;
        $film->genre = $request->genre;
        $film->photo = $this->uploadPhoto($request);

        if($film->save()){
            return response()->json([
                'success' => true,
                'message' => 'Film add',
                'film' => $film
            ], 201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something wend wrong!!'
            ],400);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        if($film){
            return response()->json([
                'success' => true,
                'film' => $film
            ], 201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Film not found!!'
            ],400);
        }
    }



        
    /**
     * uploadPhoto
     *
     * @param  mixed $request
     * @return void
     */
    public function uploadPhoto($request)
    {
        $imageName = $this->slugify($request->name).'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('film_photos'), $imageName);
        return $imageName;
    }

    
    /**
     * slugify
     *
     * @param  mixed $value
     * @return void
     */
    private function slugify($value){
        $slug = strtolower(str_replace(' ','-',$value));
        $count = Film::where('slug','LIKE','%'.$value.'%')->count();
        $count = Film::where('slug','LIKE','%'.$slug.'%')->count();
        $suffix = $count ? $count + 1 : "";
        $slug .= $suffix;
        return $slug;
    }


}
