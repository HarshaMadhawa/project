<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include("partials.html-header",["title"=>"Home"])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Web Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class=" text-dark" style="background-color: #ead8eb;">
@include("partials.header",['isLogin' => false])
	<!-- <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> -->


    <div class="container"style="margin-top: 5%;">
        <h1 class="text-center">JOB OPPORTUNITY</h1>
        <hr>

        <div class="row">
            <div class="col-md-5 offset-md-5">

                <table border="0">

                    <tr>
                        <td>
                            <form action="jobop" method="get">
                                <button type="submit" class="btn btn-primary">Post Job</button>
                            </form>
                        </td>


                        <td>
                            <form action="listview" method="get">
                                <button type="submit" class="btn btn-primary">View Job</button>
                            </form>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <!-- <form action="list" method="post"></form> -->
                            <a style="margin:10px;" href="/dashboards" class="btn btn-success">Back</a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

</body>

</html>