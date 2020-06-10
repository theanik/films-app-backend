<?php

namespace App\Http\Controllers\Api;

use App\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;

class RatingController extends Controller
{    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(RatingRequest $request)
    {
        $rating = Rating::updateOrCreate([
            'user_id' => $request->input('user_id'),
            'film_id' => $request->input('film_id')
        ]);
        $rating->rate = $request->input('rate');
        if($rating->save())
        {
            return response()->json([
                'success' => true,
                'message' => 'Rating Done!!'
            ], 201);
        }
    }

    
    /**
     * currentUserRate
     *
     * @param  mixed $user_id
     * @param  mixed $film_id
     * @return void
     */
    public function currentUserRate(Request $request, $film_id)
    {
        $rate = Rating::where('user_id',$request->user()->id)
                    ->where('film_id', $film_id)->first();
        if($rate){
            return response()->json([
                'success' => true,
                'rating' => $rate->rate
            ], 201);
        }else{
            return response()->json([
                'success' => false,
            ], 200);
        }
                    
    }
}
