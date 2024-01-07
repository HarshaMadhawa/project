
<!DOCTYPE html>
<html>
<head>
    @include("partials.html-header",["title"=>"Home"])
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="cssFile/chpwdStyle.css">
</head>
<body >

<h1 style="color: black;"> Change Password</h1>
		@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
		@endif

		@if(Session::has('error'))
			<div class="alert alert-danger">
				{{ Session::get('error') }}
			</div>
		@endif
	 <form action="{{ route('password.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Current Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="old_password" />
            </div>
            <div class="mb-3">
                <label>New Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password" />
            </div>
            <div class="mb-3">
                <label>New Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password_confirmation" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Change</button>
               
                <a href="/dashboards" class="btn btn-success">
            
                    Back
                </a>
            </div>
        </form>
</body>
</html>
