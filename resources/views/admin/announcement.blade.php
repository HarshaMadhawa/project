<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Announcement Web Page</title>
        

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body class="bg-light text-dark">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
	
    
    	<div class="container mt-5">
        	<h1 class="text-center">New Announcement</h1>
        <hr>

        
        	<div class="row">
            		<div class="col-md-6 offset-md-3">

               			<div class="card">
                    			<div class="card-body">
						<h3 class="card-title">Create an Announcement</h3>

						<form id="announcementForm">
						
								
						<div class="mb-3">
							<label class="form-label">Date</label>
							<input type="date" class="form-control" id="anndate" required>
			    			</div>
				
                            			<div class="mb-3">
                                			<label class="form-label">Title</label>
                                			<input type="text" class="form-control" id="announcementTitle" placeholder="Enter the title of announcement" required>
                            			</div>

                            			<div class="mb-3">
                                			<label class="form-label">Content</label>
                               				 <textarea class="form-control" id="announcementContent" rows="4" required></textarea>
                            			</div>


                            			<button type="submit" class="btn btn-primary">Submit</button>
                        			</form>

                    			</div>
                		</div>
            		</div>
        	</div>
        
   
    </body>
</html>
