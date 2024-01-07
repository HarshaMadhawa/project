<?php

    namespace App\Http\Controllers;

    use App\Models\Alumni;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;
    use Session;
    use Illuminate\Support\Facades\DB;

    class AlumniController extends Controller
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
                'country' => 'required',
                'city' => 'required',
                'dateOfBirth' => 'required|date',
                'degree' => 'required',
                'BCS-batch' => 'required',
                'graduationYear' => 'required',
                'gpa' => ['required', 'numeric', 'between:0,4'],
                'job-field' => 'required',
                'Current_position' => 'required',
                'company' => 'required',
                'internship' => 'required',
              
            ]);


            if (Session::has('loginId')) {
                $user = User::where('UserId', Session::get('loginId'))->first();
                $alumni = Alumni::where('user_id', $user->UserId)->first();
                $user->Initial = $request->input('initials');
                $user->FullName = $request->input('fullName');
                $user->Contact= $request->input('contactNumber');
                $user->gender = $request->input('gender');
                $user->email = $request->input('email');
                $user->NIC = $request->input('idno');
                $user->StudentLectureId = $request->input('studentIdNumber');

                $alumni->Address = $request->input('address');
                $alumni->Country = $request->input('country');
                $alumni->City = $request->input('city');
                $alumni->Date_of_birth = $request->input('dateOfBirth');
                $alumni->Degree = $request->input('degree');
                $alumni->BCS_batch = $request->input('BCS-batch');
                $alumni->Graduation_year = $request->input('graduationYear');
                $alumni->GPA = $request->input('gpa');
                $alumni->job_field = $request->input('job-field');
                $alumni->Current_position = $request->input('Current_position');
                $alumni->Company = $request->input('company');
                $alumni->Internship = $request->input('internship');
                $alumni->Job1 = $request->input('job1');
                $alumni->Job2 = $request->input('job2');
                $alumni->Achievement1 = $request->input('achievement1');
                $alumni->Achievement2 = $request->input('achievement2');

                //dd($request->hasFile('img'));
                if ($request->hasFile('img')) {
                    $image  = $request->file('img');
                    $imageName = time().'_'.$request->fullName;
                    $image->storeAs('Profile_pictures', $imageName, 'public');
                    $alumni->Profile_picture = $imageName;
                }

                $user->save();
                $alumni->save();



                return redirect('dashboards')->with('success', 'Registered Successfully');
            }

        }
        public function display(){
            $data = DB::table('users')
                    ->join('alumnis','users.UserId','=','alumnis.user_id')
                    ->where('users.role','=','Alumni')
                    ->get();
    
            return view('admin/ShowAlumni',compact('data'));        
        }
    
        public function viewAlumniedit()
        {
            $user = User::where('UserId', Session::get('loginId'))->first();
            $alumni = Alumni::where('user_id', $user->UserId)->first();
            return view('product.AlumniEditPrafilePage', ['user' => $user, 'alumni' => $alumni]);
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

        public function viewAlumni($user_id){
            $detail  = DB::table('users')
                    ->join('alumnis','users.UserId','=','alumnis.user_id')
                    ->where('alumnis.user_id',$user_id)
                    // ->where('users.Role','=','Lecture')
                    ->get();

                 
    
            // $detail = $data ->where('staff.user_id',$user_id);
            // $detail = DB::table('users')
            //             ->where('id',$id)
            //             ->get() ;            
    
            return view('admin/ViewAlumni',compact('detail'));
    
            
        }
    }
