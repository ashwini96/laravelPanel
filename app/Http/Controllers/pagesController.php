<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use Auth;
use DB;

class pagesController extends Controller
{
    public function index()
    {
        $title = 'The Talent Pool';
        return view('pages/index', compact('title'));
    }

    public function create()
    {
        return view('pages.posts');
    }

    public function store()
    {
        $posts = new posts();
       
        $posts['email'] = Auth::user()->email;
        $posts->post = request('post');
       
        $posts->save();
        return redirect('/activity');
    }
    
    public function act()
    {
        $posts = posts::where('email', '=', Auth::user()->email)
                    ->orderBy('id','desc')
                    ->get();
        
        //              $count = DB::table('posts')
        //              ->count();
        //  echo $count;
 
        return view('pages.activity', compact('posts'));
    }

    public function delete($value)
    {
        
        // DB::delete('DELETE FROM `posts` WHERE `posts`.`id` = ?',[$id]);
        posts::where('post', $value)->delete();
        return redirect('/activity');
    }

    public function show($id) 
    {
        $posts = posts::select('*')
                        ->where('id',$id)
                        ->get();
        return view('pages.updatePosts',['posts'=>$posts]);
    }

    public function edit(Request $request,$id) 
    {
        $post = $request->input('uppost');
        posts::where('id',$id)
            ->update(['post' => $post]);
        return redirect('/activity');
    }

}
