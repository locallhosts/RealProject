<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 //====================================================
        //how to insert into database
    //      DB::insert('insert into users (id, name,email,password) values (?,?,?,?)',
    //   [1,'grace', 'grace@gmail.com', 'password' ]);


 //====================================================
 // how to update from database
//   DB::update('update users set name= ?  where id = 1', ['Grace local']);



 //====================================================
// how to delete from user
// DB::delete('delete  from users ');

//  //====================================================
//         /// select from database
//       $user = DB::select('select * from users');
//        return $user;


        $user = new User();
        $user ->name ="isaiah";
        $user ->email ='isaiah2@gmail.com';
        $user ->password ='password1';
          $user->save();



        return view('index');


    }



    public function lagos(){
        return view ('apartment.lagos');
    }

}
