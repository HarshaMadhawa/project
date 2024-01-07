<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Page</title>
	        
	  <link rel="stylesheet" href="{{ asset('cssFile/adminStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    </head>

<body  class="container">


@include("partials.nav-bar",['isLogin' => true])
        <!--auto insert Alumni profile pic and Summery-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  </script>


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


	@if(session('success2'))
        <div class="alert alert-success" style="width:100%; text-align:center;">
            {{ session('success2') }}
        </div>
    @endif


<section class="dashbd">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 class="title">Admin Dashboard</h1>
        <!-- <a href="{{ url('/logout') }}" class="btn btn-warning">Logout</a> -->
    </div>

      <div class="card-deck" style="display: flex; justify-content: space-between; align-items: center;">   
      <div class="card" id="staff" style="border-radius: 15px 50px 30px;" onmouseover="showList('staffList')" onmouseout="hideList('staffList')">
        <div class="card-body">
          <img class="image" src="image/staff.jpg" alt="staff.jpg"/>
          <h6 class="card-title">STAFF</h6>
        </div>
	
        <ul class="list" id="staffList">
        <li><a class="btn btn-outline-secondary btn-sm"href="/lecture">Show Staff</a></li>
        <li><a class="btn btn-outline-secondary btn-sm"href="/register">Add Staff</a></li>
        </ul>
      </div>

        <div class="card" id="alumni" style="border-radius: 15px 50px 30px;" onmouseover="showList('alumniList')" onmouseout="hideList('alumniList')">
      <div class="card-body">
        <img class="image" src="image/images.png" alt="images.png"/>
        <h6 class="card-title">Alumni</h6>
      </div>
    
      <ul class="list" id="alumniList">
      <li><a class="btn btn-outline-secondary btn-sm" href="/alumni">Show Alumni</a></li>
      <li><a class="btn btn-outline-secondary btn-sm" href="/register">Add Alumni</a></li>
      </ul>
    </div>

      <div class="card" id="student" style="border-radius: 15px 50px 30px;" onmouseover="showList('studentList')" onmouseout="hideList('studentList')">
        <div class="card-body">
          <img class="image" src="image/student.png" alt="student.png"/>
          <h6 class="card-title">Student</h6>
        </div>
	
      <ul class="list" id="studentList">
      <li><a class="btn btn-outline-secondary btn-sm" href="/student">Show Student</a></li>
      <li><a class="btn btn-outline-secondary btn-sm" href="/register">Add Student</a></li>
      </ul>
    </div>

    <div class="card" id="notice" style="border-radius: 15px 50px 30px;" onmouseover="showList('noticeList')" onmouseout="hideList('noticeList')">
      <div class="card-body">
        <img class="image" src="image/notice.png" alt="notice.png"/>
        <h6 class="card-title">Notice</h6>
      </div>
	
      <ul class="list" id="noticeList">
      <li><a class="btn btn-outline-secondary btn-sm" href="adminNotice">Pending Notices</a></li>
      <li><a class="btn btn-outline-secondary btn-sm" href="allNotice">Delete Notice</a></li>
      <li><a class="btn btn-outline-secondary btn-sm" href="RandomNoticeForm">Create Notice</a></li>
      <li><a class="btn btn-outline-secondary btn-sm" href="pendingNotice">Pending Random Notices</a></li>

      </ul>
    </div>

	<div class="card" id="Job" style="border-radius: 15px 50px 30px;" onmouseover="showList('jobList')" onmouseout="hideList('jobList')">
		<div class="card-body">
			<img class="image" src="image/job.png" alt="job.png"/>
			<h6 class="card-title">Job<br>oppotunities</h6>
		</div>
	
		<ul class="list" id="jobList">
		<li><a class="btn btn-outline-secondary btn-sm" href="/adminJob">Pending jobOpportunities</a></li>
    <li><a class="btn btn-outline-secondary btn-sm" href="allJobs">Delete Jobs</a></li>
		</ul>
	</div>
   
     </div>

</section>

<section class="TempUsers">
<div style="display: flex; justify-content: space-between; align-items: center;">
<h3>Pending Users</h3>
<a style="margin:10px;" href="/showUsers" class="btn btn-dark" >User List</a>
</div>
	
<div style="margin-top: 20px;">
<table class="table table-striped table-bordered" style="width:auto;">
    <tr>
        <th style="text-align: center; width:auto;">FullName</th>
        <!-- <th>Name With Initial</th> -->
        <th style="text-align: center; width:auto;">Gender</th>
        <th style="text-align: center; width:auto;">Role</th>
        <th style="text-align: center; width:auto;">Email</th>
        <th style="text-align: center; width:auto;">Student ID or Lecture ID</th>
        <th style="text-align: center; width:auto;">NIC</th>
        <th style="text-align: center; width:auto;">Contact Number</th>
        <!-- <th style="text-align: center; width:auto;"></th> -->
        <th colspan="2" style="text-align: center; width:auto;">Operations</th>
    </tr>

    @foreach($data as $users)
        <tr>
        <td>{{$users['FullName']}}</td>
        <td>{{$users['gender']}}</td>
        <td>{{$users['role']}}</td>
        <td>{{$users['email']}}</td>
        <td>{{$users['StudentLectureId']}}</td>
        <td>{{$users['NIC']}}</td>
        <td>{{$users['Contact']}}</td>
        <td><a href="{{"approve/".$users['UserId']}}" class="btn btn-success">Approve</a></td>
        <td><a onclick="confirmDelete({{ $user['id'] }})" class="btn btn-danger" >Remove</a></td>
        <!-- <td><a href="{{"remove/".$users['id']}}"  class="btn btn-danger" >Remove</a></td> -->
        <!-- <a onclick="confirmDelete({{ $user['id'] }})" class="btn btn-danger">Remove</a> -->

        </tr>

    @endforeach
</table>  
</div>




</section>



<script>
  function showList(listId) {
    // Show the hidden list when the cursor is over the div
    document.getElementById(listId).style.display = "block";
  }

  function hideList(listId) {
    // Hide the list when the cursor leaves the div
    document.getElementById(listId).style.display = "none";
  }

  //user confirmation
  function confirmDelete(userId) {
    var confirmed = confirm("Are you sure to delete this data now?");
    if (confirmed) {
        // If the user confirms, proceed with the deletion by redirecting
        window.location.href = "{{ url('remove') }}/" + userId;
    }
  }
</script>

</body>
</html>

