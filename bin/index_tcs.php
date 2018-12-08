<script>window.location="logout.php";</script>
<? exit;
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
  <meta charset='UTF-8'>
  <!-- <link href="css/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
  <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <style type="text/css">
  @media (min-width: 768px) and (max-width: 1000px) {

 .login_box{
    transform: scale(1.4);
    
    margin-top: 30%;
    padding: 0px;
    /*border:2px solid green;*/
  }

  .textanimation {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  /*border: 1px solid rgba(255, 255, 255, 0.4);*/
  border: 1px solid #1c1853;
  background-color: rgba(255, 255, 255, 0.6);
  width: 60%;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: #1c1853;
  transition-duration: 0.25s;
  font-weight: 300;
}

.textanimation :focus {
  background-color: white;
  width: 70%;
  color: #1c1853;
}
.textanimation   {
  
  /*display:block;*/
  
  font-size: 18px;
  background-color: red;
  width:10px !important;

  
}
.checkanimation{
    

}


}

      @media (max-width: 400px)  {
  .login_box{
    transform: scale(1.5);
    
    margin-top: 30%;
    padding: 0px;
    /*border:2px solid red;*/
  }
  
}
  </style>
</head>
<body>
    
    <div class="wrapper">
        <div class="container">
            <div class="login_box">
                
           
            <h1><img src="img/the-chennai-silks-logo.png" style="width: 150px;"></h1>
            <h1>Welcome to TCS Portal</h1>
            <h1><span id='home_loader' style="display: none;"><img src="img/home_loader2.gif"></span></h1>
            <br>
            
            <form name="frm_login" id='frm_login' method="post" action="">
                <input type="hidden" class="" name='function' id='function' tabindex="1" value='signin' />
                 <input type="hidden" class="" name='selected_section_group' id='selected_section_group' tabindex="1" value='APPROVAL DESK' />
                <input type="text"  autofocus="true" title='Enter your existing CENTRA Login Username' tabindex="1" name="uname" id="uname" value='<?=$_COOKIE['uname']?>' onkeyup="movetoNext(this, 'password')" class="textanimation" required maxlength="7" placeholder="Username" />
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
               <input type="password" title='Enter your existing CENTRA Login Password' tabindex="2" name="password" id="password" value='<?=$_COOKIE['password']?>' required maxlength="10" autocomplete="off" class="textanimation" placeholder="Password" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                           
                           
                <button type="submit" name="submit" id='submit' title='Login' tabindex="3" onClick="return Validate()">Login</button>
                <br>
                <br>
                <br>
                <input type="checkbox" style="width: 20px !important; height: 20px !important;vertical-align: bottom;" name="rememberme" <? if ($_COOKIE['loggedIn'] == "yes") { ?> checked="checked" <? } else{?> rel= "dummy" <?} ?> id="rememberme"/>
                <span style="color: black;font-weight: bold;text-transform:uppercase">REMEMBER ME!</span>
            </form>
             </div>
           
        </div>
<ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li><li></li><li></li>
            
        </ul>
       
    </div> 


    <script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
<script>
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