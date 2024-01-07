<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Job Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body style="background-color: #ead8eb;">

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
        <th colspan="2"style="text-align: center; width:auto">Operation</th>

       
        
      </tr>
    
   
    @foreach($data as $Job)
    <tr>
            <td>{{$Job['id']}}</td>
            <td>{{$Job['Date']}}</td>
            <td>{{$Job['C_Name']}}</td>
            <td>{{$Job['Location']}}</td>
            <td>{{$Job['No_of_vacancies']}}</td>
            <td>{{$Job['Deadline']}}</td>
            <td>{{$Job['Content']}}</td>
            
            <td><a href="{{url('/previewJ',$Job['id'])}}" class="btn btn-warning">Preview</a></td>
            <td><a href="{{url('/jobdownload',$Job['Attachment'])}}" class="btn btn-primary">Download</a></td>
            
            <td><a onclick="confirmDelete({{ $Job['id'] }})" class="btn btn-danger">Delete</a></td>
            <!-- <td><a href="{{url('/deleteJ',$Job['id'])}}" class="btn btn-danger">Delete</a></td> -->
    </tr>
    
    
    @endforeach
    </table>
    <a style="margin:10px;" href="/dashboards" class="btn btn-success" >Back</a>
    </form>
</div>

<!-- JavaScript -->
<script>
    function confirmDelete(userId) {
        var confirmed = confirm("Are you sure to delete this data now?");
        if (confirmed) {
            // If the user confirms, proceed with the deletion by redirecting
            window.location.href = "{{ url('deleteJ') }}/" + userId;
        }
    }
</script>
</body>
</html>
        
        