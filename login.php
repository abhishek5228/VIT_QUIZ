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
        <nav class="navbar navbar-inverse" style="background-color:#2980B9;color:#EAF2F8"">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <span style="color: white;font-weight: bolder">WELCOME TO VIT QUIZ</span>
                    </a>
                </div>
                <p class="navbar-text navbar-right" style="padding-right: 15px"><a href="admin_login.php" class="navbar-link btn btn-info" style="text-decoration: none;font-weight: bold;color: white">Admin LogIn</a></p>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading"><h4>Login Form</h4></div>
                        <div class="panel-body">
                            <?php
                                if(isset($_GET['run']) && $_GET['run']=="failed")
                                {
                                    echo "Your Email or Password is wrong.";
                                }
                            ?>
                            <form role="form" action="signin_sub.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="e" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="p" required>
                                </div>
                                <button type="submit" class="btn btn-success">Submit  <i class="fas fa-sign-in-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
				</div>
        </div>
		<div>
		                                <button type="submit" class="btn btn-success">Submit  <i class="fas fa-sign-in-alt"></i></button>
										</div>
        <div class="footer">
            
        </div>
    </body>
</html>