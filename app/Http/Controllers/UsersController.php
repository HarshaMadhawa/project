<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\TempUser;
use App\Models\User;
use Illuminate\Http\datauest;
// use Hash;

class UsersController extends Controller
{
    //

    public function Approve($id) {
        $data = TempUser::find($id);

        //Add temp user as new user 
        $user = new User();
        $user->FullName = $data->FullName;
        $user->Initial = $data->Initial;
        $user->gender = $data->gender;
        $user->role = $data->role;
        $user->email = $data ->email;
        $user->StudentLectureId = $data->StudentLectureId;
        $user->NIC = $data->NIC;
        $user->Contact = $data->Contact;
        $user->password = $data->password;

        $result = $user->save();
        


        $data = TempUser::find($id);
        $data->delete();
          
        // return Redirect::back();
        

        if($result) {
            return back()->with('success', 'User Regitration Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }

    }

    public function showUser(){
        $data = User::all();
        return view('admin/Users',compact('data'));

        $data->session()->flash('success2', 'User deleted successfully!');
        return redirect('adminPage');
    }

    public function delete($id, Request $req){
        $data = User::find($id);
        $data->delete();

        return Redirect::back();
    }

    
   
}
