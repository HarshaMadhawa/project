<!DOCTYPE html>
<html lang="en">
    <head>
        @include("partials.html-header",["title"=>"StudentEditProfileForm"])

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

        <form class="profile-form" method="POST" action="<?=url('/StudentEditProfile')?>"enctype="multipart/form-data" >
            @csrf 
            {{ csrf_field() }}


            <div class="personal-info">
                <h2>Personal Info</h2>
                <!-- profile picture upload -->
        <div>
            Upload Your Image:    <input type="file"  name="img" value="{{old('img')}}" />
        </div><br>
        <!-- profile picture upload end-->
                <input name="Id_no"value="{{ $student }}"style="display: none"/>
               
                <div>
                    Full Name:
                    <input type="text"placeholder="Enter Your Full Name"name="fullName"value="{{$user->FullName}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                 <span class="text-danger">
                    @error('fullName')
                    The  Full Name  is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Name with Initials:
                    <input type="text"placeholder="A.B.C.Ilankoon"name="initials"value="{{$user->Initial}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('initials')
                    The Name with Initials  is required.
                     @enderror
                 </span>
                {{-- end error --}}


                <div>
                    Contact Number:
                    <input type="int"placeholder="+947193519123"name="contactNumber"value="{{$user->Contact}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('contactNumber')
                    The Contact Number is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Address:
                    <input type="text"placeholder="ABC Rd, Matara"name="address" value="{{$student->Address}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('address')
                    The Address is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    NIC No:
                    <input type="text"placeholder="########v"name="idno"value="{{$user->NIC}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('idno')
                    The NIC No is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Email:
                    <input type="text"placeholder="########@gmail.com"name="email" value="{{$user->email}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('email')
                    The Email Address is required.
                     @enderror
                 </span>
                {{-- end error --}}

               

                <div>
                    City:
                    <input type="text" placeholder="Matara"name="city"value="{{$student->City}}" />
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('city')
                    The City is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Date of Birth:
                    <input type="date"name="dateOfBirth"value="{{$student->Date_of_birth}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('dateOfBirth')
                    The Date of Birth is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Gender:
                    <input type="radio" name="gender" value="Male"  {{$user->gender=="Male"?"checked":""}}/> Male

                    <input type="radio" name="gender" value="Female" {{$user->gender=="Female"?"checked":""}}/> Female
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('gender')
                    The Gender is required.
                     @enderror
                 </span>
                {{-- end error --}}

            </div>

            <div class="university-Background">
                <h2>University Background</h2>

                <p>Degree:</p>

                <select class="degree" id="degree" name="degree">
                    <option> </option>

                    <option value="BCS(Special)" {{$student->
                        Degree==="BCS(Special)"?"selected":''}}>BCS(Special)
                    </option>

                    <option value="BCS(General)" {{$student->
                        Degree==="BCS(General)"?"selected":''}}>BCS(General)
                    </option>

                    <option value="BSc(Special)" {{$student->
                        Degree==="BSc(Special)"?"selected":''}}>BSc(Special)
                    </option>

                    <option value="BSc(General)" {{$student->
                        Degree==="BSc(General)"?"selected":''}}>BSc(General)
                    </option>
                </select>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('degree')
                    The Degree is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Batch:
                    <input type="text" placeholder="SC/2019" name="batch" value="{{$student->Batch}}" />
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('batch')
                    The Batch is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                    Student ID Number:
                    <input type="text" placeholder="SC/2017/10772"name="studentIdNumber"value="{{$user->StudentLectureId}}" />
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('studentIdNumber')
                    The Student ID Number is required.
                     @enderror
                 </span>
                {{-- end error --}}

                <div>
                   current GPA:
                    <input type="text"placeholder="3.8"name="gpa"value="{{$student->GPA}}"/>
                </div>
                {{-- To display an error msg when input is empty --}}
                <span class="text-danger">
                    @error('gpa')
                    The  GPA is required and Maximum GPA value is 4.0.
                     @enderror
                 </span>
                {{-- end error --}}

            </div>

            <!-- Add more work history fields as needed -->

            <h2>Achievements</h2>

            <label for="achievement1">Achievement 1:</label>

            <input type="text" placeholder="Awarded- Employee of the Year in 2020."id="achievement1" name="achievement1"value="{{$student->Achievement1}}"/>
            <br/>

            <label for="achievement2">Achievement 2:</label>

            <input type="text" placeholder="Published a paper on Advanced Software Development in 2018" id="achievement2" name="achievement2" value="{{$student->Achievement2}}"/>
            <br />

            <!-- Add more achievement fields as needed -->

            <input class="common-button" type="submit" value="Save Changes" />
            <a href="/dashboards" class="common-button"> Back </a>
        </form>

    </body>
</html>
