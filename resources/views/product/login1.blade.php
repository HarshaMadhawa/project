<!DOCTYPE html>
<html>

<head>
    @include("partials.html-header",["title"=>"Login"])
    <link rel="stylesheet" href="{{ asset('cssFile/graduatePF.css') }}">
    <link rel="stylesheet" href="cssFile/loginForm.css">

</head>

<body>
    {{-- Login fail Notification --}}
    @if(Session::has('success'))
    <div class="alert alert-success" style="width:100%; text-align:center;">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger" style="width:100%; text-align:center;">
        {{Session::get('fail')}}
    </div>
    @endif
    {{-- end notification --}}

    <div class="fullform">
        <h2>Login Form</h2>
        <div>


            <form class="form" action="/login_user" method="POST">
                @csrf
                <div class="imgcontainer">
                    <img src="image/profile.png" alt="Avatar" class="avatar">

                </div>

                <div class="container">

                    <div class="col-12">
                        <label for="inputName" class="form-label">Email Adress</label>
                        <input type="email" class="form-control" id="inputAddress" placeholder="Enter Email Address"
                            name="email">

                        {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                        {{-- end error --}}
                    </div>

                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Enter Password"
                            name="password">

                        {{-- To display an error msg when input is empty --}}
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                            @enderror
                        </span>
                        {{-- end error --}}
                    </div>

                    <div class="col-12">
                        <p><button type="submit" class="btn btn-primary">Log In</button><a href="/"><b>HOME</b></a></p>
                    </div>

                    <div class="col-12">
                        <p>If you not registered,please <a href="register">register</a> hear</p>
                    </div>

                    <label>
                        <div class="form-check">
                            <!-- <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck"><br> -->
                                 <a href="{{route('forget.password')}}">Forgot Password?</a>
                            </label>
                        </div>

                    </label>

                </div>
        </div>
        </form>







        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
            </script>
</body>

</html>