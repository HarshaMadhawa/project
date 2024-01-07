<!-- Add style for table (Naduni) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<br>

<div class="container" style="margin-top: 50px;">
    <div class="row">
    <div class="col-lg-3">
</div>

<div class="col-lg-100%">
<h3 class="text-center text-success">Results</h3><hr>
<div class="form-group">
<div class="container">
<div class="row">
<div class="col-12">
<div class="table-responsive">

<!-- end style -->
<body style="background-color: #ead8eb;">

                                <table class="table table-striped">
                                    
                                    <tr class="table-primary">
                                       
                                        <th>Name</th>
                                        <th>possition</th>
                                        <th>gender</th>
                                        <th>Country</th>
                                        <th>Company</th>
                                        <th>Degree</th>
                                        <th>Email</th>
                                    </tr>
            
                                    @foreach ($results['lectureResults'] as $result)
                                        <tr>
                                            <td>{{ $result['FullName'] }}</td>
                                            <td>{{ $result['possition'] }}</td>
                                            <td>{{ $result['gender'] }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $result['email'] }}</td>
                                        </tr>
                                    @endforeach

                                    @foreach ($results['alumniResults'] as $result)
                                        <tr>
                                            <td>{{ $result['FullName'] }}</td>
                                            <td></td>
                                            <td>{{ $result['gender'] }}</td>
                                            <td>{{ $result['Country'] }}</td>
                                            <td>{{ $result['Company'] }}</td>
                                            <td>{{ $result['Degree'] }}</td>
                                            <td>{{ $result['email'] }}</td>
                                        </tr>
                                    @endforeach

                                    @foreach ($results['studentResults'] as $result)
                                        <tr>
                                            <td>{{ $result['FullName'] }}</td>
                                            <td></td>
                                            <td>{{ $result['gender'] }}</td>
                                            <td>{{ $result['Country'] }}</td>
                                            <td>{{ $result['Company'] }}</td>
                                            <td>{{ $result['Degree'] }}</td>
                                            <td>{{ $result['email'] }}</td>
                                        </tr>
                                    @endforeach

                                </table>
</body>
                              
                                {{-- @unless(request()->is('view'))
                                    <div>
                                        <a href="{{route('view', ['search'=>request('search')])}}" class="btn btn-success" > Download PDF </a>
                                    </div>
                                    <br>
                                @endunless --}}
            
                              
                    <br>
               
                  <!-- Add "Download Result & Back" button(Naduni) -->
                <div id="search_list">

                </div>
                {{-- <button type="submit" class="btn btn-primary" style="padding:5px 10px;" >Download Results</button> --}}
                <a href="{{ url('dashboards') }}" class="btn btn-success">Back</a>
                <a href="{{route('view', ['search'=>request('search')])}}" class="btn btn-primary">Download Result</a>
                
            
        <div class="col-lg-3">

        </div>
</div>
</div>
</div>
</div>
                                
</div>
</div> 
</div>        
</div>