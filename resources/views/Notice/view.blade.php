<!DOCTYPE html>
<html lang="en">
<head>
@include("partials.html-header",["title"=>"Home"])
  <title>View Notices</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body  class=" text-dark" style="background-color: #ead8eb;">
@include("partials.header",['isLogin' => false])
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="container" style="margin-top: 3%;"> 
  <h2 class="text-center">NOTICE</h2>
           
  <table class="table table-bordered table-striped">
    
      <tr class="text-center">
        
        <th style="text-align: center; width:auto">Notice Number</th>
        <th style="text-align: center; width:auto">Date</th>
        <th style="text-align: center; width:auto">Title</th>
        <th style="text-align: center; width:auto">Preview</th>
        <th style="text-align: center; width:auto">Download</th>
        
        
      </tr>
    
    @foreach($Notices as $Notice)
    <tr>
            <td>{{$Notice['id']}}</td>
            <td>{{$Notice['Date']}}</td>
            <td>{{$Notice['Title']}}</td>
            
            <td><a href="{{url('/previewNotice',$Notice['id'])}}" class="btn btn-warning">Preview</a></td>
            <td><a href="{{url('/download',$Notice['File'])}}" class="btn btn-primary">Download</a></td>
    </tr>
    
    
    @endforeach
    </table>

    <form action="notice" method="get">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
</div>
</body>
</html>
        
       