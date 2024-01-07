@include('product.cdn')

<body style="margin-left:35%; margin-top:20px; background-color: #ead8eb;">
    {{-- Notice Generation Confirmation Notification --}}
    @if(Session::has('success'))
      <div class="alert alert-success" style="width:30%; text-align:center">
        {{Session::get('success')}}
      </div>
    @endif
    @if(Session::has('fail'))
      <div class="alert alert-danger" style="width:30%; text-align:center">
        {{Session::get('fail')}}
      </div>
    @endif
    {{-- end notification --}}


    <h1>Notice Generation</h1><br>
    
    <form action="{{ url('/generateNotice') }}" method="POST" style="width:70%">
        @csrf
        <hr style="width: 65%">
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">Date:</label>
            <div class="col-sm-10" style="width: 50%">
              <input type="text" name="date" class="form-control" id="inputEmail3" value="{{ now()->timezone('Asia/Colombo')->format('Y-m-d') }} " readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="topic" class="col-sm-2 col-form-label">Topic:</label>
            <div class="col-sm-10" style="width: 50%">
              <input type="text" name="topic" class="form-control" id="inputEmail3">
              
            </div>
        </div>

        <div class="row mb-3">
            <label for="content" class="col-sm-2 col-form-label">Content:</label>
            <div class="col-sm-10" style="width: 50%">
              {{-- <input type="text" name="name" class="form-control" id="inputEmail3"> --}}
              <textarea name="content" id="inputEmail3" class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10" style="width: 50%">
              <input type="text" name="name" class="form-control" id="inputEmail3">
            </div>
        </div>

        <div class="row mb-3">
            <label for="designation" class="col-sm-2 col-form-label">Designation:</label>
            <div class="col-sm-10" style="width: 50%">
              <input type="text" name="designation" class="form-control" id="inputEmail3">
            </div>
        </div>

        <hr style="width: 65%">

        <button type="submit" class="btn btn-success" >Submit</button>
        <button type="reset" class="btn btn-danger" >Reset</button>
        {{-- These routes you have to change --}}
        <a href="{{ url('/pendingNotice') }}" class="btn btn-primary">Pending Notice List</a>
        <a href="{{ url('/dashboards') }}" class="btn btn-warning">Back</a>
    </form>
</body>