@include('product.cdn')

<body style=" margin-left:30%; margin-right:30%; margin-top:20px; background-color: #ead8eb;">
    {{-- Notice Delete Notification --}}
    @if(Session::has('success'))
        <div class="alert alert-success" style="text-align:center">
            {{Session::get('success')}}
        </div>
    @endif
    {{-- End Notification --}}

    <h2 class="text-center text-secondary">Pending Notice Board</h2><hr>
    <table class="table table-striped">
        <tr>
            <th>Date</th>
            <th>Topic</th>
            <th>Content</th>
            <th colspan="2">Operation</th>
        </tr>

        @foreach ($data as $notice)
            <tr>
                <td>{{$notice['Date']}}</td>
                <td>{{$notice['Topic']}}</td>
                <td style="max-width: 200px; word-wrap: break-word;">{{$notice['Content']}}</td>
                <td><a onclick="confirmDelete()" class="btn btn-danger" >Remove</a></td>
                <!-- <td><a onclick="confirmDelete()" class="btn btn-danger" >Remove</a></td> -->

                <td><a href="{{"approveNotice/".$notice['id']}}" class="btn btn-success" >Approve</a></td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/dashboards') }}" class="btn btn-primary" >Back</a>
    <a href="{{ url('/putNotice') }}" class="btn btn-warning" >Upload Notice</a>
    
    
    <!-- Java Scripts -->
    <script>
    function confirmDelete() {
        var confirmed = confirm("Are you sure to delete this data now?");
        if (confirmed) {
            // If the user confirms, proceed with the deletion by redirecting
            window.location.href = "{{"removeNotice/".$notice->id}}"; // Replace with your delete route
        }
    }
</script>

</body>