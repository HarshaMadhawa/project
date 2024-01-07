<!DOCTYPE html>
<html lang="en">
<head>
@include("partials.html-header",["title"=>"Home"])
  <title>View Job Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body class=" text-dark" style="background-color: #ead8eb;">
@include("partials.header",['isLogin' => false])

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="container">
  <h2 class="text-center">JOBS</h2>
           
  <table class="table table-bordered table-striped">
    
      <tr class="text-center">
        
        <th style="text-align: center; width:auto">Job Number</th>
        <th style="text-align: center; width:auto">Date</th>
        <th style="text-align: center; width:auto">Company Name</th>
        <th style="text-align: center; width:auto">Location</th>
        <th style="text-align: center; width:auto">Number of Vacancies</th>
        <th style="text-align: center; width:auto">Deadline</th>
        <th style="text-align: center; width:auto">Content</th>
        <th style="text-align: center; width:auto">Preview</th>
        <th style="text-align: center; width:auto">Download</th>
       
        
      </tr>
   
   
    @foreach($data as $data)
    <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['Date']}}</td>
            <td>{{$data['C_Name']}}</td>
            <td>{{$data['Location']}}</td>
            <td>{{$data['No_of_vacancies']}}</td>
            <td>{{$data['Deadline']}}</td>
            <td>{{$data['Content']}}</td>
            
            <td><a href="{{url('/previewJob',$data['id'])}}" class="btn btn-warning">Preview</a></td>
            <td><a href="{{url('/jobdownload',$data['Attachment'])}}" class="btn btn-primary">Download</a></td>
    </tr>
    
    
    @endforeach
    </table>
    <form action="backpg" method="get">
    <button type="submit" class="btn btn-primary">Back</button>
        </form>
</div>
</body>
</html>
        
        