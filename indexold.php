
<? 
session_start();
error_reporting(0);
include_once('lib/config.php');
extract($_REQUEST);

$_SESSION['alert_message'] = 1;
unset($_SESSION['tcs_userid']);

if($_SESSION['tcs_userid'] != ""){ ?>
    <script>window.location="home.php";</script>
<?php exit();
}
//change from prem to check git working
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login :: Approval Desk :: <?php echo $site_title; ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-defaultold.css"/>          
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="css/home2.css">
        <link rel="stylesheet" href="css/jquery-confirm.min.css">
        <!-- EOF CSS INCLUDE -->

        <script src="js/jquery.js" type="text/javascript"></script>
    
    </head>
    <body>
        <div id="load_page" style='display:block;padding:12% 40%;'></div>
        <div class="login-container">
        <form name="frm_login" id='frm_login' method="post" action="" >
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your Approval Desk account</div>
                    <div id="result"></div>
                    <div class="tags_clear"></div>

                    <form action="index.html" class="form-horizontal" method="post">
                        <input type="hidden" class="form-control" name='function' id='function' tabindex="1" value='signin' />
                        <input type="hidden" class="form-control" name='selected_section_group' id='selected_section_group' tabindex="1" value='APPROVAL DESK' />
                    <div class="form-group">
                        <div class="col-md-12 has-feedback">
                            <input type="text" autofocus title='Enter your existing CENTRA Login Username' tabindex="1" name="uname" id="uname" value='<?=$_COOKIE['uname']?>' onkeyup="movetoNext(this, 'password')" class="form-control" required maxlength="7" autocomplete="on"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <span class="floating-label">Usercode *</span>
                        </div>
                    </div>
                    <div class="tags_clear height10px"></div>
                    <div class="form-group has-feedback">
                        <div class="col-md-12">
                            <input type="password" title='Enter your existing CENTRA Login Password' tabindex="2" name="password" id="password" value='<?=$_COOKIE['password']?>' required maxlength="10" autocomplete="off" class="form-control"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <span class="floating-label">Password *</span>
                        </div>
                    </div>
                    <div class="tags_clear height10px"></div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="checkbox" tabindex="4" title='REMEMBER ME' name="rememberme" <? if ($_COOKIE['loggedIn'] == "yes") { ?> checked="checked" <? } ?> id="rememberme"> REMEMBER ME
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="hid_action" id="hid_action" value="<?=$_GET['action']?>">
                            <button type="submit" name="submit" id='submit' title='Login' tabindex="5" onClick="return Validate()" class="btn btn-info btn-block" style='float:left; margin-right:1%;' value="Login">LOGIN</button>
                        </div>
                    </div>
                    <div class="tags_clear height10px"></div>
                    <!-- <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div> -->
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <? echo date("Y")." ".$site_title; ?>
                    </div>
                    <!-- <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div> -->
                </div>
            </div>
        </form>
        </div>
        
    </body>
</html>

<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    
</script>