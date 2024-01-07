<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function update(Request $request)
    {

        $request -> validate ([
                
            'initials' => 'required',
            'fullName' => 'required',
            'contactNumber' => 'required',
            'gender' => 'required',
            'email' => 'required|email|',
            'idno' => 'required',
            'studentIdNumber' => 'required',
            'address' => 'required',
            'city' => 'required',
            'dateOfBirth' => 'required|date',
            'degree' => 'required',
            'batch' => 'required',
            'gpa' => ['required', 'numeric', 'between:0,4'],
          
        ]);


        if (Session::has('loginId')) {
            $user = User::where('UserId', Session::get('loginId'))->first();
            $student = Student::where('user_id', $user->UserId)->first();
            $user->Initial = $request->input('initials');
            $user->FullName = $request->input('fullName');
            $user->Contact= $request->input('contactNumber');
            $user->gender = $request->input('gender');
            $user->email = $request->input('email');
            $user->NIC = $request->input('idno');
            $user->StudentLectureId = $request->input('studentIdNumber');

            $student->Address = $request->input('address');
            $student->City = $request->input('city');
            $student->Date_of_birth = $request->input('dateOfBirth');
            $student->Degree = $request->input('degree');
            $student->Batch = $request->input('batch');
            $student->GPA = $request->input('gpa');
            $student->Achievement1 = $request->input('achievement1');
            $student->Achievement2 = $request->input('achievement2');

              //dd($request->hasFile('img'));
              if ($request->hasFile('img')) {
                $image  = $request->file('img');
                $imageName = time().'_'.$request->fullName;
                $image->storeAs('Profile_pictures', $imageName, 'public');
                $student->Profile_picture = $imageName;
            }

            $user->save();
            $student->save();

            return redirect('dashboards')->with('success', 'Registered Successfully');
        }else{
            return redirect()->back()->with('success', 'Error');
        }

    }

    public function Show(){
        $data = DB::table('users')
            //  ->join('students','users.UserId','=','students.user_id')
             ->where('users.role','=','Student')
             ->get();

        return view('admin/ShowStudent',compact('data'));     
    }

    public function viewStudentedit()
    {
        $user = User::where('UserId', Session::get('loginId'))->first();
        $student = Student::where('user_id', $user->UserId)->first();
        return view('product.studentEditProfile', ['user' => $user, 'student' => $student]);
    }



  

    public function viewStudent($user_id){

        $detail  = DB::table('users')
                ->join('students','users.UserId','=','students.user_id')
                ->where('students.user_id',$user_id)
                // ->where('users.Role','=','Lecture')
                ->get();

        // $detail = $data ->where('staff.user_id',$user_id);
        // $detail = DB::table('users')
        //             ->where('id',$id)
        //             ->get() ;            

        return view('admin/ViewStudent',compact('detail'));
        
    }



    
    public function updateAlumni()
    {

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
