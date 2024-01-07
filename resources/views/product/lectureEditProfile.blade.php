<!DOCTYPE html>
<html lang="en">

<head>
    @include("partials.html-header",["title"=>"LectureEditProfileForm"])

    <link rel="stylesheet" href="{{ asset('cssFile/graduatePF.css') }}" />
</head>

<body>
    <!--header -->
    @include("partials.header",['isLogin' => false])
    <!--nav-bar -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session("success") }}
    </div>

@endif
 

    <form class="profile-form" method="POST" action="<?=url('/lectureEditProfile')?>" enctype="multipart/form-data">
         @csrf 
        {{csrf_field()}}
       
            <div class="personal-info">
        <h2>Personal Info</h2>
        <!-- profile picture upload -->
        <div>
            Upload Your Image:    <input type="file"  name="img" value="{{old('img')}}" />
        </div><br>
        <!-- profile picture upload end-->
            <div>
                Full Name:<input type="text" placeholder="acvhhj Bjvdkvjk Cjkg Ilankoon" name="FullName" value="{{$user->FullName}}" />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
             @error('FullName')
             The   Full Name is required.
            @enderror
            </span>
            {{-- end error --}}

            <div>
                Name with Initials:<input type="text" placeholder="A.B.C.Ilankoon" name="Initials" value="{{$user->Initial}}"  />
            </div>
             {{-- To display an error msg when input is empty --}}
             <span class="text-danger">
                @error('Initials')
                The   Name with Initials is required.
               @enderror
               </span>
               {{-- end error --}}

            <div>
                Email Address:<input type="email" placeholder="sanidu@example.com" name="email" value="{{$user->email}}"  />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('email')
                The   Email Address is required.
               @enderror
               </span>
               {{-- end error --}}

          

            <div>
                Possition:<input type="text" placeholder="Senior Lecturer" name="possition" value="{{$lecture->possition}}"  />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('possition')
                The   Possition is required.
               @enderror
               </span>
               {{-- end error --}}

            <div>
                Work Place Address:<input type="text" placeholder="Department of Computer Science,University pf Matara"
                    name="workAddress" value="{{$lecture->Work_Place_Address}}" />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('workAddress')
                The   Work Place Address is required.
               @enderror
               </span>
               {{-- end error --}}

            <div>
                Contact Number:<input type="int" placeholder="+947193519123" name="Contact" value="{{$user->Contact}}"  />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('Contact')
                The Contact Number is required.
               @enderror
               </span>
               {{-- end error --}}
            <div>
                NIC No:
                <input type="text" placeholder="########v" name="idno" value="{{$user->NIC}}" />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('idno')
                The NIC No is required.
               @enderror
               </span>
               {{-- end error --}}

            <div>
                Address: <input type="text" placeholder="ABC Rd, Matara" name="address"  value="{{$lecture->Address}}" />
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('address')
                The Address is required.
               @enderror
               </span>
               {{-- end error --}}

            <div>Date of Birth: <input type="date" name="dob" value="{{$lecture->Date_of_Birth}}" /></div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
            @error('dob')
            The Date of Birth is required.
            @enderror
            </span>
            {{-- end error --}}

            <div>
                Gender:<input type="radio" name="gender" value="Male" {{$user->gender=="Male"?"checked":""}} />
                Male

                <input type="radio" name="gender" value="Female" {{$user->gender=="Female"?"checked":""}}/> 
                Female
            </div>
            {{-- To display an error msg when input is empty --}}
            <span class="text-danger">
                @error('gender')
                The Gender is required.
                @enderror
                </span>
                {{-- end error --}}
        </div>

        <div>Current Living Distric: <input type="text" name="distric" value="{{$lecture->Current_Living_Distric}}" /></div>
        {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
            @error('distric')
            The Current Living Distric is required.
            @enderror
            </span>
            {{-- end error --}}
        <div>
            Staff ID:<input type="text" placeholder="1003" name="staffNumber" value="{{$user->StudentLectureId}}" />
        </div>
        {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
            @error('staffNumber')
            The Staff ID is required.
            @enderror
            </span>
            {{-- end error --}}

        <div>
            Specialised Subjects: <input type="text" placeholder="Software Engineering" name="subjects" value="{{$lecture->Specialised_Subjects}}" />
        </div>
        {{-- To display an error msg when input is empty --}}
        <span class="text-danger">
            @error('subjects')
            The Specialised Subjects is required.
            @enderror
            </span>
            {{-- end error --}}


        <h2>Work History</h2>

    <label for="internship">Internship:</label>

    <input type="text" placeholder="Software Engineering Intern at XYZ Company" id="internship"
           name="internship"  value="{{$lecture->Internship}}"/><br />

    <label for="job1">Job 1:</label>

    <input type="text" placeholder="Software Engineer at PQR Company" id="job1" name="job1" value="{{$lecture->Job1}}"/><br />

    <label for="job2">Job 2:</label>

    <input type="text" placeholder="Software Engineer at PQR Company" id="job2" name="job2"  value="{{$lecture->Job2}}"/><br />

    <!-- Add more work history fields as needed -->

    <h2>Achievements</h2>

    <label for="achievement1">Achievement 1:</label>

    <input type="text" placeholder="Awarded- Employee of the Year in 2020." id="achievement1"
           name="achievement1" value="{{$lecture->Achievement1}}"/><br />

    <label for="achievement2">Achievement 2:</label>

    <input type="text" placeholder="Published a paper on Advanced Software Development in 2018" id="achievement2"
           name="achievement2" value="{{$lecture->Achievement2}}"/><br />

           <h2>Education qualifications:</h2>

           <label for="job1">Degree 1:</label>

           <input type="text" placeholder="Your First Degree" id="degree1" name="degree1" value="{{$lecture->Degree1}}"/><br />
       
           <label for="job2">Degree 2:</label>
       
           <input type="text" placeholder="Your Second Degree" id="degree2" name="degree2"  value="{{$lecture->Degree2}}"/><br />
           <label for="job2">Degree 3:</label>
       
           <input type="text" placeholder="Your Third Degree" id="degree3" name="degree3"  value="{{$lecture->Degree3}}"/><br />
       







        </div>
        <input class="common-button" type="submit" value="Save Changes" />
        <a href="/dashboards" class="common-button">
            
               Back
           
        </a>
          
       
    </form>
 
    

</body>

</html>