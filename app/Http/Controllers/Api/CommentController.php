<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class CommentController extends Controller
{    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
            'user_id' => 'required|exists:App\User,id',
            'film_id' => 'required|exists:App\Film,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->film_id = $request->input('film_id');
        $comment->user_id = $request->input('user_id');
        if($comment->save())
        {
            return response()->json([
                'success' => true,
                'message' => 'Comment Done!!'
            ], 201);
        }
    }

}
