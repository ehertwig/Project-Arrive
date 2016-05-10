<?php
 $errors = [];
 $missing = [];
 if (isset($_POST['send'])) {
     $expected = ['name','email','message'];
     $required = ['name','message'];
     require './process_mail.php';
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
                    <a href="home.html" class="navbar-brand">Arrive At Last</a>
                    <div class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="home.html">HOME</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="home.html#contact">CONTACT</a></li>
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
        <?php if ($errors || $missing) : ?>
            <p class="alert alert-danger">Please fix item(s) indicated.</p>
            <?php endif; ?>
                <form method="post" action="contact.php">

                    <p>
                        <label for="name">Name:
                            <?php if ($missing && in_arrray('name',$missing)): ?>
                                <span class="alert alert-danger">Please enter your name.</span>
                                <?php endif; ?>
                        </label>
                        <input class="form-name" type="text" name="name">
                    </p>
                    <p>
                        <label for="email">Email:
                            <?php if ($missing && in_arrray('email',$missing)): ?>
                            <span class="alert alert-danger">Please enter valid email.</span>
                                <?php endif; ?>
                        </label>
                        <input class="form-email" type="text" name="email">
                    </p>
                    <p>
                        <label for="message">Message:
                            <?php if($missing && in_arrray('message',$missing)): ?>
                                <span class="alert alert-danger">Please enter a message.</span>
                                <?php endif; ?>
                        </label>
                        <textarea class="form-message" type="text" name="message"></textarea>
                    </p>
                    <p>
                        <input class="form-button" name="send" type="submit" value="Send">
                    </p>


                </form>




                <div class="footer">
                    <div class="container-full">
                        <div class="row footer">
                            <div class="col-md-4 pull-left">
                                <h4><a name = "contact"></a>Contact Me</h4>
                                <p class='font'>
                                    <a href="http://glyphicons.com/"></a><i class="glyphicon glyphicon-plane"> Elizabeth Hertwig</i></p>
                                <p><i class="glyphicon glyphicon-globe"> St. Louis, MO</i></p>
                                <p><i class="glyphicon glyphicon-phone"> 314.401.5669</i></p>
                                <p><i class="glyphicon glyphicon-envelope"> elizabeth@arriveatlast.com</i></p>
                            </div>
                            <div class="col-md-4">
                                <h4>Links</h4>
                                <ul class="list-unstyled">
                                    <li><a href="home.html">HOME</a></li>
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
                <script src="js/bootstrap.js"></script>
                <script src="js/arrive.js"></script>
    </body>

    </html>