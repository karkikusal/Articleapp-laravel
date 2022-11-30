<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function Register(){
        return view('register');
    }

    public function Dashboard()
    {
        // $posts = Post::where('user_id', '=',auth()->user()->id)->get();
        $posts = Post::all();
        //dd($posts);
        return view('dashboard', compact('posts'));
    }
    public function delete($id){
        $user=Post::find($id);
        $user->delete();
        return redirect()->route('dashboard');
    }

}
