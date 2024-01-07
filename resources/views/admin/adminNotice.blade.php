<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Notices</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body style="background-color: #ead8eb;">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="container">
  <h2 class="text-center">NOTICE</h2>
           
  <table class="table table-bordered table-striped">
    
      <tr class="text-center">
        
        <th style="text-align: center; width:auto">Notice Number</th>
        <th style="text-align: center; width:auto">Date</th>
        <th style="text-align: center; width:auto">Title</th>
        <th style="text-align: center; width:auto">Preview</th>
        <th style="text-align: center; width:auto">Download</th>
        <th colspan="2"style="text-align: center; width:auto">Operation</th>

        
        
      </tr>
   
    @foreach($Notices as $Notice)
    <tr>
            <td>{{$Notice['id']}}</td>
            <td>{{$Notice['Date']}}</td>
            <td>{{$Notice['Title']}}</td>
            
            <td><a href="{{url('/preview',$Notice['id'])}}" class="btn btn-warning">Preview</a></td>
            <td><a href="{{url('/download',$Notice['File'])}}" class="btn btn-primary">Download</a></td>
            <td><a href="{{url('/approveN',$Notice['id'])}}" class="btn btn-success">Approve</a></td>
            <td><a onclick="confirmDelete({{ $Notice['id'] }})" class="btn btn-danger">Delete</a></td>
            <!-- <td><a href="{{url('/deleteN',$Notice['id'])}}" class="btn btn-danger">Delete</a></td> -->
            <!-- <a onclick="confirmDelete({{ $Notice['id'] }})" class="btn btn-danger">Remove</a> -->
    </tr>
    
    
    @endforeach
    </table>

    <a style="margin:10px;" href="/dashboards" class="btn btn-success" >Back</a>
</div>

<!-- JavaScript -->
<script>
    function confirmDelete(userId) {
        var confirmed = confirm("Are you sure to delete this data now?");
        if (confirmed) {
            // If the user confirms, proceed with the deletion by redirecting
            window.location.href = "{{ url('deleteN') }}/" + userId;
        }
    }
</script>
</body>
</html>
        
       