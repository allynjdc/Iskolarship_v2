<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Scholar;
use App\User;

class EditProfileController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    // public function homeGuests()
    // {
    //     return view('/');
    // }
    // public function homeSponsor(){
        
    // }

    public function editProfileStudent(){
        $user_id = Auth::user()->user_id;
        $user = User::findOrFail($user_id)->first();
        
        $stud_id = Scholar::where('user_id','=', $user_id)->pluck('student_id');

        $student = Scholar::findOrFail($stud_id)->first();

        return view('profiles/settings/edit_profile', compact('student', 'user'));
    }
}
