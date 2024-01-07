<div class="navbar navbar-expand-md navbar-dark bg-dark " role="navigation">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li> -->
            @if ($isLogin)
                
          
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">{{Route::currentRouteName()}} Profile</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link disablednotice" href="notice">Notice</a>
            </li>

            <li class="nav-item">
                <a class="nav-link jobopp" href="first">Job Oppertunities</a>
            </li>

            <li class="nav-item">
                <a class="nav-link Chatbox" href="#">Chatbox</a>
            </li>

            <li class="nav-item">
                <a class="nav-link Chatbox" href="chpwd">Change Password</a>
            </li>

            <li class="nav-item">
                <a class="nav-link Chatbox" href="{{ url('/logout') }}">Log Out</a>
            </li>
            @endif
        </ul>
        @if ($isLogin)
        <form class="form-inline d-flex ms-auto mt-2 mt-md-0">
        <a class="nav-link Chatbox" style="color:white; margin-right:10px;" href="/searchView">Search</a>
            <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
        @else
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        
            <li class="nav-item dropdown">
            <a class="nav-link" href="register">Sign Up</a>
                <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sign Up
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="lecturesRegisterForm">Lectures</a></li>
                    <li><a class="dropdown-item" href="AlumniRegisterForm">Alumni</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="StudentsRegisterForm">Student</a></li>
                </ul> -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login1">Log In</a>
            </li>


        </ul>
        @endif
    </div>
</div>

