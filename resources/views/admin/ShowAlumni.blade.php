<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Alumni Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body class="container" style="background-color: #ead8eb;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div>
    <h1 style="margin:20px;">Alumni Members</h1>
</div>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
    <th style="text-align: center; height:auto">FullName</th>
        <!-- <th>Name With Initial</th> -->
        <th style="text-align: center; height:auto">Gender</th>
        <th style="text-align: center; height:auto">Role</th>
        <th style="text-align: center; height:auto">Email</th>
        <th style="text-align: center; height:auto">Student ID</th>
        <th style="text-align: center; height:auto">NIC</th>
        <th style="text-align: center; height:auto">Contact</th>
        <th style="text-align: center; height:auto">Operations</th>
        <!-- <th>Password</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($data as $alumni)
      <tr>
        <td>{{$alumni->FullName}}</td>
        <td>{{$alumni->gender}}</td>
        <td>{{$alumni->role}}</td>
        <td>{{$alumni->email}}</td>
        <td>{{$alumni->StudentLectureId}}</td>
        <td>{{$alumni->NIC}}</td>
        <td>{{$alumni->Contact}}</td>
        <td><a  class="btn btn-warning" href="{{"viewAlumni/".$alumni->user_id}}">View</a></td>
     </tr>
    @endforeach
  </tbody>
</table>
<a style="margin:10px;" href="/dashboards" class="btn btn-success" >Back</a>
</body>
</html>