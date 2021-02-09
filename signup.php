<!DOCTYPE html>
<html lang="en">
    <head>
        <title>VIT QUIZ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="icon" type="image/png" href="https://c7.uihere.com/files/895/949/319/quiz-logo-game-art-quiz-time-thumb.jpg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#2980B9;color:#EAF2F8">
  				<div class="container">
						<img src="https://vtop.vit.ac.in/vtop/assets/img/vitlogo.png" class="img-responsive pull-left" alt="User Image" width="200" height="75">
						<h3 class="pull-right" style="color: #fff;font-family:Times; font-size: 24px;">VIT QUIZ</h3>
  				</div>
			</nav>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading"><h4>SignUp Form</h4></div>
                        <div class="panel-body">
                            <?php
                                if(isset($_GET['run']) && $_GET['run']=="success")
                                {
                                    echo "<mark>You have successfully registered.</mark>";
                                }
                            ?>
                            <form  role="form" method="post" enctype="multipart/form-data" action="signup_sub.php">
                                <div class="form-group">
                                    <label for="name">Registration Number:</label>
                                    <input type="text" class="form-control" name="n" id="name" placeholder="Enter Registration Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="e" id="email" placeholder="Enter Registration E-mail" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter Password" required>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Submit  <i class="fas fa-sign-in-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
				</div>
        </div>
		<div class="container signin">
		<p>             Already have an account? <a href="index1.php">Login</a>.</p>
		</div>
        <div class="footer">
            
        </div>
    </body>
</html>