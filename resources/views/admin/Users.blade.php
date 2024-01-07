<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Announcement Web Page</title>
	        
	  <link rel="stylesheet" href="{{ asset('cssFile/adminStyle.css') }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    </head>
    <body class="container" style="background-color: #ead8eb;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

     <h1 style="margin:20px;">User Table</h1>

     <table class="table table-striped table-bordered" style="width:auto">
    <tr>
        <th style="text-align: center; height:auto">FullName</th>
        <!-- <th>Name With Initial</th> -->
        <th style="text-align: center; height:auto">Gender</th>
        <th style="text-align: center; height:auto">Role</th>
        <th style="text-align: center; height:auto">Email</th>
        <th style="text-align: center; height:auto">Student ID or Lecture ID</th>
        <th style="text-align: center; height:auto">NIC</th>
        <th style="text-align: center; height:auto">Contact Number</th>
        <th style="text-align: center; height:auto">Operation</th>

        <!-- <th>Password</th> -->
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
        <td><a onclick="confirmDelete()" class="btn btn-danger" >Delete</a></td>  
        
        <!-- <a href="{{"delete/".$users->id}}" class="btn btn-danger" >Delete</a> -->
        <!-- <a onclick="confirmDelete()" class="btn btn-danger" >Remove</a> -->
        </tr>

    @endforeach
</table>  

<a style="margin:10px;" href="/dashboards" class="btn btn-success" >Back</a>


<!-- Java Script  -->
<script>
    function confirmDelete() {
        var confirmed = confirm("Are you sure to delete this data now?");
        if (confirmed) {
            // If the user confirms, proceed with the deletion by redirecting
            window.location.href = "{{"delete/".$users->id}}"; // Replace with your delete route
        }
    }
</script>

</body>

</html>    