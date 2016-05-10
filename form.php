<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Arrive At last Contact form'; 
		$to = 'elizabeth@arriveatlast.com'; 
		$subject = 'Message from Arrive at Last Contact form ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
        
		if (!$_POST['name']) {
			$errName = 'Hmmm, is that your name?';
		}
		
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		
if (!$errName && !$errEmail && !$errMessage ) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arrive At Last</title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="css/arrive.css" rel="stylesheet">
        <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <div class="navbar navbar-inverse home">
            <div class="container-full">
                <div class="navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="index.html" class="navbar-brand">Arrive At Last</a>
                    <div class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="form.php">CONTACT</a></li>
                            <li class="dropdown">
                                <a href="before.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria- expanded="false">BEFORE YOU GO <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pack.html">Airplane Pack List</a></li>
                                    <li class="divider"></li>
                                    <li><a href="travel.html">Travel Often?</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="booknow.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BOOK NOW<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.funjet.com/default.aspx?pLCode=90473922Z3" target="_blank">Funjet Vacations</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
  	<div class="container form-container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center text-muted">Contact Me</h1>
                
				<form class="form-horizontal" role="form" method="post" action="form.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label text-muted">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name"  value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label text-muted">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email"  value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label text-muted">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
       <div class="footer">
        <div class="container-full">
            <div class="row footer">
                <div class="col-md-4 pull-left">
                    <h4><a name = "contact"></a>Contact Me</h4>
                    <p class='font'>
                        <a href="http://glyphicons.com/"></a><i class="glyphicon glyphicon-plane">  Elizabeth Hertwig</i></p>
                    <p><i class="glyphicon glyphicon-globe"> St. Louis, MO</i></p>
                    <p><i class="glyphicon glyphicon-phone"> 314.401.5669</i></p>
                    <p><i class="glyphicon glyphicon-envelope"> elizabeth@arriveatlast.com</i></p>
                </div>
                <div class="col-md-4">
                    <h4>Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="pack.html">PACK LIST</a></li>
                        <li><a href="http://www.funjet.com/default.aspx?pLCode=90473922Z3" target="_blank">FUNJET VACATIONS</a></li>
                    </ul>
                </div>
                <div class="col-md-4 pull-right">
                    <ul class="list-unstyled">
                        <li>Florida Seller of Travel Ref. No. ST15578 </li>
                        <li>California Seller of Travel No. 2090937-50 </li>
                        <li>Washington UBID No. 603189022</li>
                        <li>Iowa Registered Agency # 1202</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/arrive.js" type="text/javascript"></script>
</body>
</html>