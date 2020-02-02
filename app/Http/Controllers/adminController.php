<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\posts;
use Auth;
use App\User;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin');
    }

    public function act()
    {
        $posts = posts::select('*')
                    ->orderBy('id','desc')
                    ->get();
        
        //              $count = DB::table('posts')
        //              ->count();
        //  echo $count;
 
        return view('pages.useract', compact('posts'));
    }

    public function use()
    {
        $users = User::select('*')
                    ->orderBy('id','asc')
                    ->get();
        
        //              $count = DB::table('posts')
        //              ->count();
        //  echo $count;
 
        return view('pages.users', compact('users'));
    }

    public function delete($value)
    {
        
        // DB::delete('DELETE FROM `posts` WHERE `posts`.`id` = ?',[$id]);
        posts::where('post', $value)->delete();
        return redirect('/useract');
    }

    public function show($id) 
    {
        $users = User::select('*')
                        ->where('id',$id)
                        ->get();
        return view('pages.updateuse',['users'=>$users]);
    }

    public function edit(Request $request,$id) 
    {
        $name = $request->input('upname');
        $role = $request->input('uprole');
        $email = $request->input('upemail');
        $phno = $request->input('upphno');
        User::where('id',$id)
            ->update(['name' => $name, 'role' => $role, 'email' => $email, 'phno' => $phno]);
        return redirect('/user');
    }

    // public function update($id) 
    // {
    //     // User::when(request('role', 'admin') , function ($q) {
    //     //         return $q-> User::where('id',$id)
    //     //                         ->update(['role' => 'user']);
    //     // });
    //     // User::when(request('role', 'user') , function ($q) {
    //     //         return $q-> User::where('id',$id)
    //     //                         ->update(['role' => 'admin']);
    //     // });

    //     // User::get();
    //     // return redirect('/user');

    //     // if(user()->role = 'user')
    //     // {
    //     //         User::where('id',$id)
    //     //             ->update(['role' => 'admin']);
    //     // }
    //     // else
    //     // {
    //     //     User::where('id',$id)
    //     //             ->update(['role' => 'user']);

    //     // }

    //     User::where('id',$id)
    //         ->update(['role' => 'admin']);
    //     return redirect('/user');
    // }
}
