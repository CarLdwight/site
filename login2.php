<?php 
	include 'dbcon.php';
	session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/styless.css">
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<style type="text/css">
		img.background {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
      width: 100%;
      height: 100%;
      -webkit-filter: blur(5px); /* Safari 6.0 - 9.0 */
      filter: blur(8px);
      }

      body {
      	overflow: hidden;
      }
	</style>
	<?php 
			if(isset($_POST['login'])){
				$user1 = $_POST['user1'];
				$pass1 = $_POST['pass1'];

				$qry = mysqli_query($dbconn,"SELECT * FROM account")or die(mysqli_error());
				while($row = mysqli_fetch_array($qry)){
					$user2 = $row['username'];
					$pass2 = $row['password'];

					if($user1 ==  $user2 && $pass1 == $pass2){
						$_SESSION['active'] = "Active";
						header('Location: tryindex2.php');

					}else if($user1 != $user2 && $pass1 != $pass2){
						 echo '
                <script type="text/javascript">

               swal({
                              title: "Incorrect Email & Password!",
                              icon: "warning",
                              button: "Okay",
                            });

                </script>
                ';

					}else{
						if($user1 != $user2){
						 echo '
                <script type="text/javascript">

               swal({
                              title: "Incorrect Username!",
                              icon: "warning",
                              button: "Okay",
                            });

                </script>
                ';
              }else if($pass1 != $pass2){
              	echo '
                <script type="text/javascript">

               swal({
                              title: "Incorrect Password!",
                              icon: "warning",
                              button: "Okay",
                            });

                </script>
                ';
              }
						}

					}
				}
			
	?>
	<body>
		<img class="background" src="assets/img/bg2.jpg" alt="Aleq">
		<a href="index.php" class="btn" style=" background-color: #fa3e05; border-color: #fa3e05; color: white; border-radius: 5px; margin-top: 10px; margin-left: 10px;"> Back </a>
	<section class="ftco-section" style="margin-top:-50px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/img/bg2.jpg);">
							<div style="text-align: center; margin: auto;">
								<img src="assets/img/MPA.png" height="400px">
							</div>
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<section style="text-align: right; margin-top: -15%; margin-right: -15%;">
										<img src="assets/img/Nasugbu.png" height="40px">
							      <img src="assets/img/BSU.png" height="40px">					        
							    </section>
								</div>
			      	</div>
							<form action="" class="signin-form" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="user1" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name= "pass1" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="login" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

