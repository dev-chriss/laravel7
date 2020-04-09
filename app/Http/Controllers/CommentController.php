<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
   
class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'name'=>'required',
            'email'=>'required',
            'comment'=>'required',
        ]);
   
        $input = $request->all();
    
        Comment::create($input);
   
        return back();
    }
}
