<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require"twitteroauth-master/autoload.php"; 
require"autentificacion.php";

use Abraham\TwitterOAuth\TwitterOAuth;

session_start();

//Autorizar Account
$conexion = new TwitterOAuth($consumer_key, $consumer_secret, $token, $token_secret);
$datosUsuario = $conexion->get("account/verify_credentials");
$nombreUsuario = $datosUsuario->name;
$imagenPerfil = $datosUsuario->profile_image_url;
$screenName = $datosUsuario->screen_name;
$NumFriends = $datosUsuario->friends_count;
$NumFollowers = $datosUsuario->followers_count;

//Borrar Tweet
if(isset($_GET["post"])){	
	$connection = getConnectionWithAccessToken($token, $token_secret);	
	$connection->post('statuses/destroy/'.$_GET["post"], array()); 	
	header('Location: app.php');
}
//Gets Timeline
function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
	require"autentificacion.php";
	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $token, $token_secret);
	return $connection;
}
$connection = getConnectionWithAccessToken($token, $token_secret);
$content = $connection->get("statuses/user_timeline");
//Post tweet
$tweet = @$_POST['tweet'];
if($tweet!=""){
	$statues = $conexion->post("statuses/update", array("status" => $tweet));
	header('Location: app.php');
}


if(isset($_GET['logout'])){
	session_unset();
	$redirect = 'http://' .  $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
	header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
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
	<div class="pace  pace-inactive">
	<div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div>
</div>
        <section class="content">
            <header class="top-head container-fluid">  
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <li class="dropdown text-center">
                        <a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src='<?php echo $imagenPerfil ?>' class="img-circle profile-img thumb-sm">
                            <span class="username"><?php echo "@".$screenName; ?></span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">                            
                            <li><a href="?logout=true"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>     
                </ul>
            </header>
            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Welcome!</h3> 
                </div>
				<div class="row">
                    <div class="col-lg-12">
                        <div class="portlet">
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Streamline
                                </h3>                                
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet-3" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="chat-conversation">									
                                        <ul tabindex="5000" style="overflow: hidden;" class="conversation-list nicescroll">
                                            <?php 
											foreach ($content as $tweet => $key){
											?>
											<li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="<?php echo $imagenPerfil ?>" alt="male">                                                    
													<i><a href='app.php?post=<?php echo $key->id; ?>'>Delete</a></i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i><?php echo $nombreUsuario; ?></i>
                                                        <p>
                                                        <?php echo $key->text; ?>
                                                        </p>	
														<p>
														<?php echo preg_replace("([0-0]{4})", " ", $key->created_at); ?>
														</p>
                                                    </div>												
                                                </div>
                                            </li>
											<?php                                            
											}
											?>
                                        </ul>
                                        <div class="row">
										<form action="#" method="POST">   
                                            <div class="col-xs-9 chat-inputbar">
                                                <input class="form-control chat-input" placeholder="Enter your tweet" type="text" name="tweet">
                                            </div>
                                            <div class="col-xs-3 chat-send">
                                                <button type="submit" class="btn btn-info">Post</button>
                                            </div>
										</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>                    
                </div> 
            </div>          
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
</body>
</html>