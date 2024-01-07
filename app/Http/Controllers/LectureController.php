<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;


class LectureController extends Controller
{
    public function update(Request $request)
    {
        $request -> validate ([
                
            'Initials' => 'required',
            'FullName' => 'required',
            'Contact' => 'required',
            'gender' => 'required',
            'email' => 'required|email|',
            'idno' => 'required',
            'staffNumber' => 'required',
            'address' => 'required',
            'possition' => 'required',
            'workAddress' => 'required',
            'dob' => 'required|date',
            'distric' => 'required',
            'subjects' => 'required', 
           
           
          
        ]);
        if(Session::has('loginId')){
            $user = User::where('UserId',Session::get('loginId'))->first();
            $lecture = Lecture::where('user_id', $user->UserId)->first();
            $user->initial = $request->input('Initials');
            $user->FullName = $request->input('FullName');
            $user->Contact= $request->input('Contact');
            $user->gender = $request->input('gender');
            $user->email = $request->input('email');
            $user->NIC = $request->input('idno');
            $user->StudentLectureId = $request->input('staffNumber');
            
            $lecture->Address = $request->input('address');
            $lecture->possition = $request->input('possition');
            $lecture->Work_Place_Address = $request->input('workAddress');
            $lecture->Date_of_Birth = $request->input('dob');
            $lecture->Current_Living_Distric = $request->input('distric');
            $lecture->Staff_ID = $request->input('staffNumber');
            $lecture->Specialised_Subjects = $request->input('subjects');
            $lecture->Internship = $request->input('internship');
            $lecture->Job1 = $request->input('job1');
            $lecture->Job2 = $request->input('job2');
            $lecture->Achievement1 = $request->input('achievement1'); 
            $lecture->Achievement2 = $request->input('achievement2');
            $lecture->Degree1 = $request->input('degree1');
            $lecture->Degree2 = $request->input('degree2');
            $lecture->Degree3 = $request->input('degree3');
            // $lecture->Profile_picture = $request->input('address');

             //dd($request->hasFile('img'));
             if ($request->hasFile('img')) {
                $image  = $request->file('img');
                $imageName = time().'_'.$request->fullName;
                $image->storeAs('Profile_pictures', $imageName, 'public');
                $lecture->Profile_picture = $imageName;
            }
            
            $user->save();
            $lecture->save();

            return redirect('dashboards')->with('success', 'Registered Successfully');
        }


    }
    public function viewLectureedit()
    {
        $user = User::where('UserId', Session::get('loginId'))->first();
        $lecture = Lecture::where('user_id', $user->UserId)->first();
        return view('product.LectureEditProfile', ['user' => $user, 'lecture' => $lecture]);
    }
    public function viewlecture($user_id){
        $detail  = DB::table('users')
                ->join('lectures','users.UserId','=','lectures.user_id')
                ->where('lectures.user_id',$user_id)
                // ->where('users.Role','=','Lecture')
                ->get();

        // $detail = $data ->where('lecture.user_id',$user_id);
        // $detail = DB::table('users')
        //             ->where('id',$id)
        //             ->get() ;            

        return view('admin/ViewLecture',compact('detail'));

        
    }
    public function Join(){
        $data = DB::table('users')
                ->join('lectures','users.UserId','=','lectures.user_id')
                ->where('users.role','=','Lecture')
                ->get();
                
         return view('admin/ShowLecture',compact('data'));  
              
    }
    // public function viewlecture($user_id){
    //     $detail  = DB::table('users')
    //             ->join('lectures','users.id','=','lectures.user_id')
    //             ->where('lectures.user_id',$user_id)
    //             // ->where('users.Role','=','Lecture')
    //             ->get();

    //     // $detail = $data ->where('lecture.user_id',$user_id);
    //     // $detail = DB::table('users')
    //     //             ->where('id',$id)
    //     //             ->get() ;            

    //     return view('ViewLecture',compact('detail'));

        
    // }

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
