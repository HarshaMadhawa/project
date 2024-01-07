<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>

    <style>
        .pdf-header 
        {
            margin-top: 0.0in;
            text-align: left;
        }
        .header-container 
        {
            text-align: left;
        }
        .header-container img 
        {
            float: left;
            margin-right: 0px;
            max-width: 100px;
            max-height: 120px;
        }
        .header-container div 
        {
            display: inline-block;
            vertical-align: middle;
        }
        .header-container div h1 
        {
            text-align: left;
            margin-bottom: 5px; /* Adjust this value to decrease or increase the spacing */
        }
        .header-container div h2 
        {
            text-align: left;
            margin-top: 5px; /* Adjust this value to decrease or increase the spacing */
            margin-bottom: 0; /* Resetting margin to remove extra space */
        }

        .footer 
        {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: grey;
            color: white;
            text-align: center;
        }

        /* Styles for the table */
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .date-time {
            position: fixed;
            bottom: 50px; /* Adjust the bottom position as needed */
            right: 10px; /* Adjust the right position as needed */
            font-size: 12px;
            z-index: 9999;
        }
    </style>
</head>

<body>


    <div class="header-container">
        <img src="{{ public_path('image/RUH.jpg') }}" alt="RUH Logo"> <!-- Add RUH Logo -->

        <div>
            <h1 class="pdf-header">Department of Computer Science</h1> 
            <h2 class="pdf-header">Faculty of Science</h2>
            <h2 class="pdf-header">University of Ruhuna</h2>
            
        </div>
    </div>
    <br>
    <hr>
    <h3 style="text-align: center"><strong><u>Results</u></strong></h3><br>
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

        {{--Add "Download PDF" button(N)--}}
        {{-- @unless(request()->is('view'))
            <div>
                <a href="{{route('view', ['search'=>request('search')])}}" class="btn btn-success" > Download PDF </a>
            </div>
            <br>
        @endunless --}}
        
        <div class="date-time">
            Printed: {{ now()->timezone('Asia/Colombo')->format('Y-m-d h:i:s a') }} 
        </div>
        <div class="footer">
            <p>Alumni Network @DCS</p>
        </div>
</body>
</html>