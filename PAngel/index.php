<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PilotAngel|Alert</title>

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
 * # $alert=1 : OK
 * # $alert=2 : WARNING
 */
?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
			    Driver Awareness State
			</h3>
            <button type="button" class="btn btn-block btn-lg btn-success <?php if ($_GET["alert"]==1) echo "disabled"; ?>" >OK!</button>
            <button type="button" class="btn btn-block btn-lg btn-danger <?php if ($_GET["alert"]==0) echo "dis-0abled"; ?>">WARNING</button>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<form role="form" class="form-inline">
				<div class="form-group">
					 <label for="inputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="inputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">

				</div> <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<div class="col-md-6 column">
			<h3>
				Saving Lives
			</h3>
			<p>
                We save lives by waking people up when they're fatigued on the road
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