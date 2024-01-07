<!DOCTYPE html>
<html>

<head>
    @include("partials.html-header",["title"=>"Registration"])
    <link rel="stylesheet" href="{{ asset('cssFile/graduatePF.css') }}">
    <link rel="stylesheet" href="cssFile/loginForm.css">

</head>

<body>
    {{-- Registration Confirmation Notification --}}
    @if(Session::has('success'))
    <div class="alert alert-success" style="width:100%; text-align:center">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger" style="width:100%; text-align:center">
        {{Session::get('fail')}}
    </div>
    @endif
    {{-- end notification --}}


    <div class="fullform">
        <h2>Registration Form</h2>
        <div>


            <form class="form" action="/register_user" method="POST">
                @csrf


                <div class="container">

                    <div class="col-12">
                        <label for="inputFullName" class="form-label"><b>Full Name :</label>
                        <input type="text" name="FullName" class="form-control" id="inputFullName"
                            placeholder="Enter Full Name" value="{{old('FullName')}}">

                        {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('FullName')
                            The Full Name field is required.
                            @enderror
                        </span>
                        {{-- end error --}}

                    </div>

                    <div class="col-12">
                        <label for="inputNameWithInitial" class="form-label">Name With Initial :</label>
                        <input type="text" name="Initial" class="form-control" id="inputInitialName"
                            placeholder="Enter Name with Initial" value="{{old('Initial')}}">

                            {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('Initial')
                            The Name with initial field is required.
                            @enderror
                        </span>
                        {{-- end error --}}
                    </div>

                    <div class="col-12">

                        <label for="inputGender" class="form-label"> Gender :</label>
                        <input type="radio" name="gender" value="Male" {{ old('gender') == 'Male' ? 'checked' : ''}} />Male
                        <input type="radio" name="gender" value="Female" {{ old('gender') == 'Female' ? 'checked' : ''}} /> Female

                        {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('gender')
                            The gender field is required.
                            @enderror
                        </span>
                        {{-- end error --}}

                    </div>

                    <div class="col-12">
                        <label for="role" class="form-label">Role:</label>
                        <div class="col-sm-10" style="width: 30%">
                            <select name="role" class="form-control" id="inputEmail3">
                                <option value="Lecture" {{ old('role') == 'Lecture' ? 'selected' : ''}} selected>Lecturer</option>
                                <option value="Alumni" {{ old('role') == 'Alumni' ? 'selected' : ''}} >Alumni</option>
                                <option value="Student" {{ old('role') == 'Student' ? 'selected' : ''}} >Student</option>
                            </select>

                            {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('role')
                            The role field is required.
                            @enderror
                        </span>
                        {{-- end error --}}
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="InputEmail" class="form-label">Email Address :</label>
                        <input type="email" name="email" class="form-control" id="inputEmail"
                            placeholder="sanidu@example.com" value="{{old('email')}}">

                        {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                        {{-- end error --}}

                    </div>

                    <div class="col-12">
                        <label for="inputStudentLectureId" class="form-label">Student Number or Lecturer ID :</label>
                        <input type="text" name="StudentLectureId" class="form-control" onblur="mycapitalized()" id="cap1"
                            placeholder="SC/20xx/xxxxx or Lecture Id" value="{{old('StudentLectureId')}}">

                            {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('StudentLecturerId')
                            The Student Number or Lecturer ID field is required.
                            @enderror
                        </span>
                        {{-- end error --}}
                    </div>

                    <div class="col-12">
                        <label for="InputNIC" class="form-label">NIC :</label>
                        <input type="text" name="NIC" class="form-control" id="inputNIC" placeholder="Enter NIC Number" value="{{old('NIC')}}">
                    </div>

                    <div class="col-12">
                        <label for="InputContact" class="form-label">Contact Number :</label>
                        <input type="text" name="Contact" class="form-control" id="inputContact"
                            placeholder="07xxxxxxxx" value="{{old('Contact')}}">

                            {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('Contact')
                            The Contact Number field is required.
                            @enderror
                        </span>
                        {{-- end error --}}  
                    </div>

                    <!-- <div class="col-12">
                        <label for="InputAddress" class="form-label">Address :</label>
                        <textarea row="4" col="15" name="Address" class="form-control" id="inputAddress"
                            placeholder="Enter the Address">
                    </div> -->

                    <div class="col-12">
                        <label for="InputPassword" class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control" id="inputpassword"
                            placeholder="Enter Strong Password" value="{{old('password')}}">

                        {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                        {{-- end error --}}
                    </div>

                    <div class="col-12">
                      <p>  <button type="submit" class="btn btn-primary">Register</button>
                        <a href="/">HOME</a></p>
                    </div>

                   


                </div>
        </div>
        </form>

        <script>
                function mycapitalized()
                {
                    var x = document.getElementById("cap1")
                    x.value=x.value.toUpperCase();
                }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
            </script>
</body>

</html>