<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  	<div class = "container">
	<div class="wrapper">
		<form method="post" name="login" action="simpan-user.php"class="form-signin">       
		    <h3 class="form-signin-heading">DAFTAR</h3>
			  <hr class="colorgraph"><br>
			  <input type="text" class="form-control" name="nama" placeholder="Nama" required="" />
			  <input type="text" class="form-control" name="username" placeholder="Username" required="" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" type="submit">Simpan</button>
			  <h5 class="login"><a href="login.php">Kembali</a></h5>		
		</form>			
	</div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>