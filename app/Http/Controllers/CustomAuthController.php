<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TempUser;
use Hash;
use Session;
use Illuminate\Support\Facades\Log;
use App\Mail\UserAproved;
use Illuminate\Support\Facades\Mail;

class CustomAuthController extends Controller
{
    //
    public function login() {
        return view('product.login1');
    }

    //user login
    public function loginUser(Request $req) {
        $req -> validate ([
            'email' => 'required|email',
            'password' => 'required|min:4|max:15'
        ]);

         //User confirmation
         $user = User::where('email', '=', $req->email)->first();
         // Log::info('Logged user old pass: ' . $userPassword);
         if($user) {

             if(Hash::check($req->password, $user->password)){
                 $req -> Session()->put('loginId', $user->UserId);
                 return redirect('dashboards');
             } else {
                 return back()->with('fail', 'Somthing worng! Please check the credentials.');
             }
         } else {
             return back()->with('fail', 'Somthing worng! Please check the credentials.');
         }
     }

     public function dashboard () {
        // if (Session::has('loginId')) {
        // }
        // return view('dashboard');

        if (Session::has('loginId')) {
            $user = User::where('UserId', Session::get('loginId'))->first();
            $data = TempUser::all();
           
            $role = $user->role;
            $userid = $user->UserId;
             
            // Check the user's role and redirect accordingly
            if ($role === 'Admin') {
                return view('dashboards.adminDashboard',['user' => $user, 'data' => $data]);
            } elseif ($role === 'Lecture') {
                Log::info('lec id ' . $userid);
                $lecture = Lecture::where('user_id', $userid)->first();
                Log::info('lec ' . $lecture);
                return view('dashboards.lecturePage',['user' => $user,'lecture'=>$lecture]);
            } elseif ($role === 'Alumni') {
                $alumni = Alumni::where('user_id', $userid)->first();
                return view('dashboards.alumniPage',['user' => $user,'alumni'=>$alumni]);
            } elseif ($role === 'Student') {
                $student = Student::where('user_id', $userid)->first();
                return view('dashboards.studentPage',['user' => $user,"student"=>$student]);
            }
        }
    }

    public function logout () {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login1');
        }
    }

    // Access User List
    public function viewUser() {
        $data = User::all();
        return view('admin.userList',compact('data'));
    }

    public function registerUser($UserId) {
        $data = TempUser::where('UserId', $UserId)->first();
        // Log::info('user id' . $data->FullName);
        //Add temp user as new user
        $user = new User();
        $user->UserId = $UserId;
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
        Mail::to($user->email)->send(new UserAproved($data->password));
        //delete temp user from temporary table
        $data = TempUser::where('UserId', $UserId);
        $data->delete();

        // $users = User::where("NIC","=",$user->NIC)->get();
        // $userId = $users[0]->id;
        $users = User::where('UserId', $UserId)->first();
         Log::info('user id ' . $users->role);
        switch ($user->role){
            case "Lecture":
                $lectur = new Lecture();
                $lectur->id = $this->generateRandomString(25);
                $lectur->user_id= $users->UserId;
                $lectur->save();
                break;
            case "Alumni":
                $alumni = new Alumni();
                $alumni->id = $this->generateRandomString(25);
                $alumni->user_id= $users->UserId;
                $alumni->save();
                break;
            case "Student":
                $student = new Student();
                $student->id = $this->generateRandomString(25);
                $student->user_id= $users->UserId;
                $student->save();
                break;
        }


        // check if the result is successfull or not
        if($result) {
            return back()->with('success', 'User Regitration Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

    function generateRandomString($length = 25): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
