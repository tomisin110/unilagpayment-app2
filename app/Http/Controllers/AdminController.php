<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\News;

class AdminController extends Controller
{
    //
    public function users(){
        $user = user::all();
        return view('users',compact('user'));
    }
    public function deleteuser($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect()->back();
    }
    public  function updateuser($id)
    {
        $user = user::find($id);
        return view('updateuser', compact('user'));
    }
    public function edituser(Request $request,$id){
        $user =user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->save();
        return redirect()->back();

    }
    
    public function createnews(){
        return view('create_news');
    }
    public function uploadnews(Request $request){
        $news = new news;
        $news->title = $request->title;
        $news->message = $request->message;
        $news->save();
        return redirect()->back();

    }
    public function allnews()
    {
        $news = news::all();
        return view('allnews', compact('news'));

    }
    public function fullnews($id){
        $news = news::find($id);
        return view('fullnews',compact('news'));
    }
    public function deletenews($id)
    {
        $news = news::find($id);
        $news->delete();
        return redirect()->back();
    }
    public  function updatenews($id)
    {
        $news = news::find($id);
        return view('updatenews', compact('news'));
    }
    public function editnews(Request $request, $id)
    {
        $news = news::find($id);
        $news->title = $request->title;
        $news->message =$request->message;
        $news->save();
        return redirect()->back();
    }
}
