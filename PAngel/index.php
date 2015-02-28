<!DOCTYPE html>
<html lang="en">
 <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alert</title>

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
/*
 * A simple app for setting alerts if a flag is raised
 * # $alert=0 : OK
 * # $alert=1,2,... : WARNING
 */
 
?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
			    Awareness State
			</h3>
            <?php
            if (isset($_GET["alert"])){$alert = $_GET["alert"];}
               else {$alert = 99;}
                     
            if ($alert==99) echo 'Device Not Connected';
            if ($alert==0) echo '<button type="button" class="btn btn-block btn-lg btn-success">OK!</button>';
            if ($alert==1) echo '<button type="button" class="btn btn-block btn-lg btn-danger">WARNING</button>';
            
            ?>
		</div>
	</div>
    <hr>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<form role="form" class="form-inline">
				<div class="form-group">
					 <label for="inputEmail1">Login</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="inputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">

				</div> <button type="submit" class="btn btn-default">Sign In</button>
			</form>
		</div>
		<div class="col-md-6 column">
			<h3>
			Good morning
			</h3>
			<p>
                	we blah blah blah
			</p>
		</div>
	</div>
</div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
