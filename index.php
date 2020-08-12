<!--Jakub Salachna-->
<?php
ob_start();
session_start(); 
?>
<!doctype html>
<html lang="pl">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Jakub Salachna</title>
  </head>
  <body>

    <div class = "container-fluid">
    	<div class = "row">
    		<div class = "col-sm-12 header">
    			Jakub Salachna
    		</div>
    	</div>
    </div>

    <div class = "container">
    	<div class = "row info">
    		<div class = "col-md-3"></div>
    		<div class = "col-md-6">
    			<?php
    			if(isset($_SESSION['info']))
    				include('inc/info.php');
    			?>
			</div>
			<div class = "col-md-3"></div>
		</div>

    	<div class = "row input">
    		<div class = "col-md-4"></div>
    		<div class = "col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
    			<p>Wrzuć plik!</p>

    			<form action = "upload.php" method = "POST" enctype ="multipart/form-data">
    				<input type = "file" name = "image" accept = "image/png, image/jpeg, image/jpg"><br /><br />
    				<div class = "row">
    					<div class = "col-sm-6">
    						<input type = "submit" class = "btn btn-success btn-md" value = "Wrzuć">
    					</div>
    					<div class = "col-sm-6">
    						<input type = "reset" class = "btn btn-primary btn-md float-right" value = "Reset">
    					</div>
    				</div>
    			</form> 
    		</div>
    		<div class = "col-md-4"></div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
<?php
ob_end_flush();
?>
<!--Jakub Salachna-->