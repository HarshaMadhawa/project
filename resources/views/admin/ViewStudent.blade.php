<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body style="background-color: #ead8eb;">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


  <div class="row">
    <div class="col-md-8 offset-md-3">
      <div class="card" style="hieght: auto; margin:50px; padding:30px;">


        <div class="card-body">

          <table class="table table-bordered" style="width:100%; hieght: auto;">
            @foreach($detail as $student)
            <thead>

              <tr>
                <th colspan="2" scope="col" style="text-align: center;">{{$student->FullName}}</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="font-weight: bold; width:50% ">Name With Initial</td>
                <td style="text-align: center;">{{$student->Initial}}</td>
              </tr>
              <tr>
               <td style="font-weight: bold">Student ID</td>
               <td style="text-align: center;">{{$student->StudentLectureId}}</td>
            </tr>
           
            <tr>
               <td style="font-weight: bold; width:50% ">Contact Num</td>
               <td style="text-align: center;">{{$student->Contact}}</td>
            </tr>
            <tr>
               <td style="font-weight: bold; width:50% ">Address</td>
               <td style="text-align: center; hieght: auto;">{{$student->Address}}</td>
            </tr>
              <tr>
                <td style="font-weight: bold">Gender</td>
                <td style="text-align: center;">{{$student->gender}}</td>
              </tr>
              <tr>
                <td style="font-weight: bold">Role</td>
                <td style="text-align: center;">{{$student->role}}</td>
              </tr>
              <tr>
               <td style="font-weight: bold">NIC</td>
               <td style="text-align: center;">{{$student->NIC}}</td>
            </tr>
              <tr>
                <td style="font-weight: bold">Email</td>
                <td style="text-align: center;">{{$student->email}}</td>
              </tr>

            </tbody>
            @endforeach
          </table>

        </div>

        <a href="/student" class="btn btn-success" >Back</a>
      </div>

    </div>
  </div>

</body>

</html>