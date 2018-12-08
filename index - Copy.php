
<?php 
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
<html lang="en">
<head>
  <title>The Chennai Silks - TCS Portal</title>
 <!--  <script src='//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js'></script>
  <script src='//static.codepen.io/assets/editor/live/css_reload-2a5c7ad0fe826f66e054c6020c99c1e1c63210256b6ba07eb41d7a4cb0d0adab.js'></script> -->
 
  <!-- <link href="css/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
  <!-- <link rel="stylesheet" type="text/css" href="css/home.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css"> 
</head>
<style type="text/css">
@import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");
@import url("http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600|Roboto Mono");

@font-face {
  font-family: 'Dosis';
  font-style: normal;
  font-weight: 300;
  src: local('Dosis Light'), local('Dosis-Light'), url(http://fonts.gstatic.com/l/font?kit=RoNoOKoxvxVq4Mi9I4xIReCW9eLPAnScftSvRB4WBxg&skey=a88ea9d907460694) format('woff2');
}
@font-face {
  font-family: 'Dosis';
  font-style: normal;
  font-weight: 500;
  src: local('Dosis Medium'), local('Dosis-Medium'), url(http://fonts.gstatic.com/l/font?kit=Z1ETVwepOmEGkbaFPefd_-CW9eLPAnScftSvRB4WBxg&skey=21884fc543bb1165) format('woff2');
}
body {
  background: #d2d6de;
    font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif,  Open Sans;
    font-size: 14px;
    line-height: 1.42857;
    height: 350px;
    padding: 0;
    margin: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-weight: 400;
    overflow-x: hidden;
    overflow-y: auto;
    
}
.form-control {
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #999999;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #333333;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}

.login-box, .register-box {
    width: 360px;
    margin: 7% auto;
}.login-page, .register-page {
    background: #d2d6de;
}

.login-logo, .register-logo {
    font-size: 35px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 300;
}.login-box-msg, .register-box-msg {
    margin: 0;
    text-align: center;
    padding: 0 20px 20px 20px;
}.login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
}.has-feedback {
    position: relative;
}
.form-group {
    margin-bottom: 15px;
}.has-feedback .form-control {
    padding-right: 42.5px;
}.login-box-body .form-control-feedback, .register-box-body .form-control-feedback {
    color: #777;
}
.form-control-feedback {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    pointer-events: none;
}.checkbox, .radio {
    position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
}.icheck>label {
    padding-left: 0;
}
.checkbox label, .radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
}

</style>
<body>
    

<div class="login-box">
    <div class="login-logo">
        <a href="http://ichef-1.bbci.co.uk/news/660/cpsprodpb/17A21/production/_85310869_85310700.jpg"><img src="https://www.google.com/images/icons/material/product/1x/analytics_64dp.png" alt="My Ad Cubes"></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="http://myadcubes.com/index.php/user/auth/login" method="post" accept-charset="utf-8">        <div class="form-group has-feedback">
            <input type="text" name="login" value="" placeholder="Username" class="form-control" id="login" maxlength="80" size="30">            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <span><font color="red"></font></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" value="" placeholder="Password" class="form-control" id="password" size="30">            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span><font color="red"></font></span>
        </div>
                <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" name="remember" value="" id="remember" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"
                        ><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                        </div> <label for="remember" class="">Remember me</label>                   
                        </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <input type="submit" name="submit" value="Sign In" id="submit" class="btn btn-primary btn-block btn-flat">            </div><!-- /.col -->
        </div>
        </form>        <a href="http://myadcubes.com/user/auth/forgot_password">I forgot my password</a><br>
                    <a href="http://myadcubes.com/user/auth/register/" class="text-center">Register a new membership</a>
            </div><!-- /.login-box-body -->
</div>


    <script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $("#submit").click(function() { 
        //get input field values
        
        var uname       = $('#uname').val(); 
        var password    = $('#password').val();
        var flag = true;
        /********validate all our form fields***********/
        /* Name field validation  */
        if(uname == "") {
            $('#uname').css('border-color','red'); 
            flag = false;

        }
        /* password field validation  */
        if(password == "") {
            $('#password').css('border-color','red'); 
            flag = false;
        }
        /********Validation end here ****/
        /* If all are ok then we send ajax request to process_connect.php *******/
        if(flag) 
        {
            $('form').fadeOut(500);
            $('.wrapper').addClass('form-success');
            $('#home_loader').css('display', 'block');
            var data_serialize = $("#frm_login").serialize();
            // alert($("#rememberme").val());

            $.ajax({
                type: 'post',
                url: "lib/process_connect.php", 
                dataType: 'html',
                // data: 'function=signin&uname='+uname+'&password='+password,
                data : data_serialize,
                beforeSend: function() {
                    $('#submit').attr('disabled', true);
                    // $('#loader').html('<span class="wait">&nbsp;<img src="images/loading.gif" alt="" /></span>');
                   
                },
                complete: function() {
                    $('#submit').attr('disabled', false);
                    // $('.wait').remove();
                    
                },  
                success: function(response)
                {
                    // alert("++++++"+response+"+++++++");
                    console.log(response);
                    try{


                   var result = JSON.parse(response,true);
                   console.log(result);
                  if(result.type == 'success'){
                    window.location.href=result.info;
                  }
                  if(result.type == 'error'){
                     $.alert({
                            icon: 'fa fa-frown-o',
                            theme: 'material',
                            closeIcon: true,
                            animation: 'scale',
                            type: 'orange',
                            title:'Invalid',
                            // useBootstrap: false,
                            content:"Check your username and password!",
                            buttons: {
                            OK: {
                                text:"OK",
                                btnClass:'btn-red',
                                    
                            }
                            },
                        });
                     $('form').fadeIn(500);
            $('.wrapper').removeClass('form-success');
            $('#home_loader').css('display', 'none');
            document.getElementById("frm_login").reset();
                  } }
                  catch(e){
                    var c =1;
                  }
                  
                  if(c == 1){
                    window.location.href='logout.php';
                  }
                  // 
                           
                },
                error: function(response, status, error) 
                {
                    }
            });
        }
    });

function Validate(){
    console.log("TEST2");
        var username=document.frm_login.uname;
        var password=document.frm_login.password;

        if ((username.value==null)||(username.value=="")){
             
                        $.alert({
                            icon: 'fa fa-frown-o',
                            theme: 'material',
                            closeIcon: true,
                            animation: 'scale',
                            type: 'orange',
                            title:'Invalid',
                            // useBootstrap: false,
                            content:"Check your username and password!",
                            buttons: {
                            OK: {
                                text:"OK",
                                btnClass:'btn-red',
                                    
                            }
                            },
                        });
            
            username.focus()
            return false;
        }

        if ((password.value==null)||(password.value=="")){
            $.alert({
                            icon: 'fa fa-frown-o',
                            theme: 'material',
                            closeIcon: true,
                            animation: 'scale',
                            type: 'orange',
                            title:'Invalid',
                            // useBootstrap: false,
                            content:"Check your username and password!",
                            buttons: {
                            OK: {
                                text:"OK",
                                btnClass:'btn-red',
                                    
                            }
                            },
                        });
            
            password.focus()
            return false;
        }
        return true;
    }


// $("#login-button").click(function (event) {
//     event.preventDefault();

    // $('form').fadeOut(500);
    // $('.wrapper').addClass('form-success');
    // $('#home_loader').css('display', 'block');

//     setTimeout(function(){ window.location.href='home.php';}, 2000);
// });
 function movetoNext(current, nextFieldID) {
            if (current.value.length >= current.maxLength) {
                document.getElementById(nextFieldID).focus();
            }
        }
//# sourceURL=pen.js
</script>
</body>
</html>