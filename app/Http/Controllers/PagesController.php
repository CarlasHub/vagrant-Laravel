<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\Post;
class PagesController extends Controller
{
    public function index(){

       
        return view('landing');

    }
     public function about(){
        return view('about');
    }
    

     public function home(){
    	return view('home');
    }
    

     public function myposts(){
    	
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('myposts')->with('posts',$user->posts);
        //create a 404 page 
    }
    
    public function contacts(){
    	return view('contacts');
    }


}
