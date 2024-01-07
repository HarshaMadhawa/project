<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Alumni Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body style="background-color: #ead8eb;">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="row">
   <div class="col-md-8 offset-md-3">
      
   <div class="card" style="height: auto; margin:50px; padding:30px;">

    
<div class="card-body">

   <table class="table table-bordered" style="width:100%; height: auto;">
      @foreach($detail as $alumni)
         <thead>

            <tr>
               <th colspan="2" scope="col" style="text-align: center;">{{$alumni->FullName}}</th>
   
            </tr>
         </thead>
         <tbody>
            <tr>
               <td style="font-weight: bold; width:50% ">Name With Initial</td>
               <td style="text-align: center;">{{$alumni->Initial}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Date Of Birth</td>
               <td style="text-align: center;">{{$alumni->Date_of_birth}}</td>
            </tr>
            
            <tr>
               <td style="font-weight: bold">Gender</td>
               <td style="text-align: center;">{{$alumni->gender}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Role</td>
               <td style="text-align: center;">{{$alumni->role}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Contact Num</td>
               <td style="text-align: center;">{{$alumni->Contact}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Email</td>
               <td style="text-align: center;">{{$alumni->email}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">NIC</td>
               <td style="text-align: center;">{{$alumni->NIC}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Degree</td>
               <td style="text-align: center;">{{$alumni->Degree}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Job Field</td>
               <td style="text-align: center;">{{$alumni->job_field}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Country</td>
               <td style="text-align: center;">{{$alumni->Country}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">City</td>
               <td style="text-align: center;">{{$alumni->City}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Address</td>
               <td style="text-align: center; height: auto;">{{$alumni->Address}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Internships</td>
               <td style="text-align: center;">{{$alumni->Internship}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">First Job</td>
               <td style="text-align: center;">{{$alumni->Job1}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Second Job</td>
               <td style="text-align: center;">{{$alumni->Job2}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Achievements</td>
               <td style="text-align: center;">{{$alumni->Achievement1}}</td>
            </tr>
            <!-- <tr>
               <td style="font-weight: bold; width:50% ">Internships</td>
               <td style="text-align: center;">{{$alumni->Achievement2}}</td>
            </tr> -->
            <tr>
               <td style="font-weight: bold; width:50% ">Working place</td>
               <td style="text-align: center;">{{$alumni->Company}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Occupation</td>
                <td style="text-align: center;">{{$alumni->Current_position}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold">Student ID</td>
               <td style="text-align: center;">{{$alumni->StudentLectureId}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Graduated Year</td>
               <td style="text-align: center;">{{$alumni->Graduation_year}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Batch Num</td>
               <td style="text-align: center;">{{$alumni->BCS_batch}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">GPA</td>
               <td style="text-align: center;">{{$alumni->GPA}}</td>
            </tr>
            
         </tbody>
      @endforeach
   </table>

</div>

<a href="/alumni" class="btn btn-success" >Back</a>

</div>

   </div>
</div>


</body>
</html>
