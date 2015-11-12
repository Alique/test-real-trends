<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST["check"])){
	if(@$_POST["email"] == "" || @$_POST["password"] == ""){
		echo "<script>alert('Debes ingresar todos los campos');</script>";	
	}else if(@$_POST["email"] == "testdrivereal@gmail.com" && @$_POST["password"] == "123456"){
		echo "<script>alert('Log in correcto');</script>";
		header('Location: app.php');	
	}
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>Real Trends test</title>

        
        <link href="styles/css.css" rel="stylesheet">
        <link href="styles/bootstrap.css" rel="stylesheet">
        <link href="styles/bootstrap-reset.css" rel="stylesheet">
        <link href="styles/animate.css" rel="stylesheet">
        <link href="styles/style.css" rel="stylesheet">
        <link href="styles/helper.css" rel="stylesheet">
        <link href="styles/style-responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

</head>
<body class="pace-done">
<section class="content">
<div class="row">        
<div class="col-sm-3"></div>        
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Log in</h3></div>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="POST" action="#" novalidate="novalidate">
									<input type="hidden" name="check" value="yes">
                                        <div class="form-group ">
                                            <label for="firstname" class="control-label col-lg-2">Email</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="email" name="email" type="email">
                                            </div>
                                        </div>                                        
                                        <div class="form-group ">
                                            <label for="password" class="control-label col-lg-2">Password</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="password" name="password" type="password">
                                            </div>
                                        </div>                                   
									<div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success" type="submit">Log in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->
					<div class="col-sm-3"></div> 

                </div> <!-- End row -->
				<footer class="footer">
                2015 © 
            </footer>
        </section>

        
        <script src="js/jquery_007.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/pace.js"></script>
        <script src="js/wow.js"></script>        
        <script src="js/jquery_010.js" type="text/javascript"></script>        
        <script src="js/jquery_003.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script src="js/form-validation-init.js"></script>
		<script src="js/jquery.app.js"></script>
		<script src="js/jquery.js"></script>
		<div style="width: 7px; z-index: 3; cursor: default; position: absolute; top: 0px; left: 273px; height: 327px; display: none;" class="nicescroll-rails" id="ascrail2000"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 7px; z-index: 3; top: 320px; left: 0px; position: absolute; cursor: default; display: none;" class="nicescroll-rails" id="ascrail2000-hr"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="width: 7px; z-index: 3; cursor: default; position: absolute; top: 0px; left: 273px; height: 267px; display: none;" class="nicescroll-rails" id="ascrail2001"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 7px; z-index: 3; top: 260px; left: 0px; position: absolute; cursor: default; display: none;" class="nicescroll-rails" id="ascrail2001-hr"><div style="position: relative; top: 0px; height: 5px; width: 0px; background-color: rgb(157, 158, 165); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="width: 5px; z-index: auto; cursor: default; position: fixed; top: 0px; left: 225px; height: 315px; opacity: 0;" class="nicescroll-rails" id="ascrail2002"><div style="position: relative; top: 0px; float: right; width: 5px; height: 111px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div><div style="height: 5px; z-index: auto; top: 310px; left: 0px; position: fixed; cursor: default; display: none; width: 225px; opacity: 0;" class="nicescroll-rails" id="ascrail2002-hr"><div style="position: relative; top: 0px; height: 5px; width: 230px; background-color: rgb(142, 144, 154); border: 0px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 0px;"></div></div>
		
				</body></html>