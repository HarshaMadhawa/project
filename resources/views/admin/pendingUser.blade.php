@include("product.cdn")

<body style="margin-left:300px; margin-top:20px;">
    {{-- Registration Confirmation Notification --}}
    @if(Session::has('success'))
      <div class="alert alert-success" style="width:70%; text-align:center">
        {{Session::get('success')}}
      </div>
    @endif
    @if(Session::has('fail'))
      <div class="alert alert-danger" style="width:100%; text-align:center">
        {{Session::get('fail')}}
      </div>
    @endif
    {{-- end notification --}}

    {{-- User Remove Notification --}}
    @if(session('success2'))
        <div class="alert alert-success" style="width:100%; text-align:center;">
            {{ session('success2') }}
        </div>
    @endif

    <h1>Pending User List</h1><br>

    {{-- Redirection to Dashboard --}}
    <a href="{{ url('/dashboards') }}" class="btn btn-warning">Back</a>
    <br><br>

    {{-- Display table --}}
    <table class="table table-striped" style="width:50%">
        <tr>
            <th>FullName</th>
            <th>Name With Initial</th>
            <th>Gender</th>
            <th>Role</th>
            <th>email</th>
            <th>Student ID or Lecture ID</th>
            <th>NIC</th>
            <th>Contact Number</th>
            <th style="text-align: center;">Operation</th>
        </tr>
        @foreach ($data as $users)
            <tr>
                <td>{{$users['FullName']}}</td>
                <td>{{$users['Initial']}}</td>
                <td>{{$users['gender']}}</td>
                <td>{{$users['role']}}</td>
                <td>{{$users['email']}}</td>
                <td>{{$users['StudentLectureId']}}</td>
                <td>{{$users['NIC']}}</td>
                <td>{{$users['Contact']}}</td>
                <td style="text-align: center;">
                    <a href="{{"approve/".$users['id']}}" class="btn btn-success">Approve</a>
                    <a onclick="confirmDelete()" class="btn btn-danger" >Remove</a>
                    <!-- <a href="{{"remove/".$users['id']}}" class="btn btn-danger" >Remove</a> -->
                </td>
            </tr>
        @endforeach
    </table><br>
    


    <td><a onclick="confirmDelete()" class="btn btn-danger" >Remove</a></td>

<script>
    function confirmDelete() {
        var confirmed = confirm("Are you sure to delete this data now?");
        if (confirmed) {
            // If the user confirms, proceed with the deletion by redirecting
            window.location.href = "{{"remove/".$users['id']}}"; // Replace with your delete route
        }
    }
</script>
</body>