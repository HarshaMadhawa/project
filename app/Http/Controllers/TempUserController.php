<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TempUser;
use Hash;


class TempUserController extends Controller
{
    //
    public function registration() {
        return view('product.register');
    }
    public function registerTempUser(Request $req) {
        $req -> validate ([
           
            'FullName' => 'required',
            'Initial' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'StudentLectureId' => 'required',
            'NIC' => 'required',
            'Contact' => 'required',
            'password' => 'required|min:4|max:15'
        ]);
        $randomNumber = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
        
        $user = new TempUser();
        $user->UserId = 'USER-' . $randomNumber;
        $user->FullName = $req ->FullName;
        $user->Initial = $req ->Initial;
        $user->gender = $req ->gender;
        $user->role = $req ->role;
        $user->email = $req ->email;
        $user->StudentLectureId = $req ->StudentLectureId;
        $user->NIC = $req ->NIC;
        $user->Contact = $req ->Contact;
        $user->password = Hash::make($req ->password);
        $result = $user->save();

       
        if($result) {
           
            return redirect()->route('login1')->with('success', 'User registration successful!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

    public function show() {
        $data = TempUser::all();
        return view('dashboards.adminDashboard',compact('data'));
    }

    public function delete($id, Request $req){
        $data = TempUser::find($id);
        $data->delete();

        return Redirect::back();
    }

}
