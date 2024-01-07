<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live-Search</title>

         <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     
     </head>
     @include("partials.html-header",["title"=>"Home"])
    <body style="background-color: #ead8eb;">
    @include("partials.header",['isLogin' => false])
  
   
    <form action="{{ route('search') }}" method="get">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-3">

                </div>
                    <div class="col-lg-6">
                        <h3 class="text-center text-danger">Search Box!</h3><hr>
                        <div class="form-group">
                            <h4>This is Live Search Function Testing</h4><br>
                            {{-- <input type="text" name="search" id="search" placeholder="Type to search in here" class="form-control" onfocus="this.value=''">
                            <button type="submit" class="btn btn-primary" style="padding:5px 10px;" >Search</button> --}}

                            {{-- This is added by Naduni --}}
                            <div class="row">
                                 <div class="col-md-8">
                                    <input type="text" name="search" id="search" placeholder="Type to search in here" class="form-control" onfocus="this.value=''">
                                </div>  

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" style="padding: 6px 12px;">Search</button>
                                </div> 
                                    
                            </div> 
                            {{-- end of the addition --}}

                            <br>
                        </div>
                        
                        <div id="search_list">

                        </div>
                    </div>
                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function(){
            $('#search').on('keyup',function(){
                var query= $(this).val();
                $.ajax({
                    url:"search",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
                });
            //end of ajax call
            });
        });
    </script>

    </body>
</html>