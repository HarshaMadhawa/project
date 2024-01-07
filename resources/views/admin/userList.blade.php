@include("product.cdn")

<body style="margin-left:150px; margin-top:20px;">

    {{-- Update Notification --}}
    @if(session('success3'))
        <div class="alert alert-primary" style="width:40%; text-align:center;">
            {{ session('success3') }}
        </div>
    @endif

    {{-- Delete Notification --}}
    @if(session('success2'))
        <div class="alert alert-success" style="width:40%; text-align:center;">
            {{ session('success2') }}
        </div>
    @endif

    <h1>User List</h1><br>

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
            <th colspan="3" style="text-align: center;">Operation</th>
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
                <td><a href="" class="btn btn-success">View</a></td>
                <td><a href="" class="btn btn-warning">Update</a></td>
                <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table><br>
</body>