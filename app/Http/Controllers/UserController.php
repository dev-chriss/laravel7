<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    public function show($id)
    {
        $users = User::where ('id', $id)->with(['posts.comments'])->get();
        return view('users.show', compact('users'));
    }

    public function guest()
    {
        $names = User::all()
         ->pluck('email')
         ->all();

        $comments = Comment::whereNotIn('email', $names)->get();
        return view('guests.index', compact('comments'));
    }
}