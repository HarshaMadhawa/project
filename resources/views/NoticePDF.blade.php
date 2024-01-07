<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notice</title>
    <style>
        /* Page border with 0.5-inch margin */
        body {
            padding: 0.5in;
            border: 1px solid black;
        }

        /* Aligning Content 0.5 inches from the right */
        .content-container {
            width: calc(100% - 0.5in); /* Adjust for the 0.5in margin */
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">Notice</h1>

    <h3 style="text-align: left">Date: {{ $data['Date'] }}</h3>

    <u><h2 style="text-align: center">{{ $data['Topic'] }}</h2></u>

    <p class="content-container">{{ $data['Content'] }}</p>
    <br>
    <p>{{ $data['Name'] }}</p>
    <p>{{ $data['Designation'] }}</p>

</body>
</html>