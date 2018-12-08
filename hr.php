<?
session_start();
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
include_once('lib/config.php');
include_once('lib/function_connect.php');
include_once('lib/general_functions.php');
extract($_REQUEST);


if($_SESSION['tcs_userid'] == ""){ ?>
    <script>window.location="index.php";</script>
<?php exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset='UTF-8'><meta name="robots" content="noindex">
  <title>HR - The Chennai Silks</title>
  
        <link rel="stylesheet" href="css/styles.php?load=bootstrap/css/bootstrap.min,index,theme_default">
        <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400, 700'>
  
  <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel='stylesheet' href='css/reset.min.css'>
  <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="css/dashboardnew.css">

 <style type="text/css">
 .side-buttona.hr::before {
  content: "HR";
}
.side-buttona.hr:after {
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    /*color:#000 !important; */
    margin-right: -7px;
}
.side-button.employee::before {
  content: "Employee";
}
.side-button.employee:after {
  /*background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_SoundCloud-128.png") no-repeat center;*/
  content: "\f234";  /* this is your text. You can also use UTF-8 character codes as I do here */
    font-family: FontAwesome;
    font-size:2em;
    text-align: center;    
    position:absolute;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top:10px;
    color:#FFFFFF; 
        margin-right: -7px;
}
    b{
      font-weight: bold !important;
    }
        .popover{
          top: 50px; left: -112px; display: block; width: 400px; margin-left: -70px;padding:0px;z-index: 999999 !important;
        }
        .arrow{
          left:80% !important;
        }
       .img-responsive {
            width: 100%;
            display: block;
            height: auto;
            max-width: 70px;
            
           
        }
       .popover-content{
          padding: 5px !important;
        }
        @media (min-width: 1200px)
                .container {
                    width: 100%;
                }

        </style>
</head>
<body style="font-family: calibri;">


<div class="side-bar side-bara ">
    <div class="side-container top">
        <img src="img/logo.png" class="img-responsive">
    </div>
    <div class="side-container middle "  id="nav_side_bar" style="padding: 0px;" >
      <span class="rela-block side-buttona hr" style="text-decoration: none; cursor: none; background-color: #ffde20; color:black;  height: 30px;"></span>
      <ul class="">
        <li>
      <a class="rela-block side-button employee" href="#subhr" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none !important;"></a>
      <ul class="collapse list-unstyled " id="subhr" >
        <li class="side-hover-eff" >  
          <a class="sub-men  " href="javascript.void(0)" onclick="redirect();" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="invoice" style="font-size: 12px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-file-text"></i>Employee Convert</a><span class="side-button-mini" style="margin-left: 5px;"></span>
        </li>
      </ul>
    </li>
      </ul>       
        <div class="force-overflow"></div>
    </div>
</div>
    
     <?php include 'includes/header1.php';?>
   
 <?php include 'includes/side-panel.php';?>
  <!-- <div class="content" style="width: 97%; padding-right: 80px ;position: relative;left:70px;padding-left: 20px;" id="main_div" > -->
    <div class="content" style="width: 100%;padding-right: 80px;position: relative;padding-left: 90px;padding-top: 70px; background-color: #FFF;" id="main_div" > 
      <div style="height: 100%; background-color: white;padding-bottom: 10px;text-transform: uppercase;">
        <span style="color:black;font-weight: bold;font-size: 14px;font-family: calibri"> <a href="home.php"><i class="fa fa-home" style="color:black"></i></a> >> HR</span>
      </div>
      <div class="my_popover_content" style="display: none" id="my_popover_content">
        <div class="my-popover">
                 <table style="width:100%"><tr><td style="margin:0;padding:0;width:70px !important">
                  <a href="#"><img src="profile_img.php?profile_img=<?=$_SESSION['tcs_user']?>" class="media-object img-rounded" alt="Sample Image" width="70" height="70" style="text-align:center"></a>
                 </td>
                 <td style="width:auto !important;vertical-align:middle !important">
                  <div style="padding-left:5px;text-transform:uppercase;font-size:12px;text-align:left !important"><span><b><?=$_SESSION['tcs_username']?></b></span><br><span>Info Tech</span><br>
                    <span>TECH LEAD</span>
                  </div>
                 </td>
                 </table>
      </div>
      </div>
      <h3>
          <div class="welcomemsg" align="center">
              <p><br/><a href="home.php"><img src="../../../images/the-chennai-silks-logo-big.png" alt="Logo" border="0" style="margin-bottom: 10px;" /></a><br/>Welcome to <b>TCS Portal Dashboard</b></br>
              Please select a Menu from the left Panel.<br />
              <span align="center">Thanks!</span></p>
          </div>  
      </h3>
</div>

<!-- <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script> -->
<script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
<script type='text/javascript' src="js/jquery-ui.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type="text/javascript">

  // function openSubmenu()
  // {
  //  $("#inv").toggle();   

  // }
   $('#open-popover-link').popover({
        placement : 'bottom',
    trigger : 'hover',
        html : true,
        //content : '<div class="my-popover">'+
         //         '<a href="#" class="pull-left"><img src="avatar.jpg" class="media-object img-rounded" alt="Sample Image" width="150" height="100" style="text-align:center"></a>'+
         //         '<div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div>'+
          //        '</div>'
          content: '<div class="my-popover">'+
                    '<table style="width:100%"><tr><td style="margin:0;padding:0;width:70px !important"><a href="#"><img src="img/avatar.jpg" class="media-object img-rounded" alt="Sample Image" width="70" height="70" style="text-align:center"></a>'+'</td>'+'<td style="width:auto !important;vertical-align:middle !important"><div style="padding-left:5px;text-transform:uppercase;font-size:12px;text-align:left !important"><span><b>14442 - ARUN RAMA BALAN G</b></span><br><span>Info Tech</span><br><span>TECH LEAD</span></div></td></table>'

    });
    $('#open-popover-link1').popover({
        placement : 'bottom',
    trigger : 'hover',
        html : true,
        //content : '<div class="my-popover">'+
         //         '<a href="#" class="pull-left"><img src="avatar.jpg" class="media-object img-rounded" alt="Sample Image" width="150" height="100" style="text-align:center"></a>'+
         //         '<div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div>'+
          //        '</div>'
          content: function getprofile_info(){
            return $("#my_popover_content").html();
          }

    });
  $("#subhr").mouseleave(function(){
    $(this).removeClass("in");
    $(this).addClass("out");

  });
  $("#main_div").mouseenter(function(){
    $("#subpurchase").removeClass("in");
    $("#subpurchase").addClass("out");

  });
  $(document).ready(function(){
    
    // Social plus button function
    $('.plus-button').click(function(){
        $(this).toggleClass('open');
        $('.social-button').toggleClass('active');
    });
    
});

  function redirect(){
    window.location.href='employee_convert.php';
  }
  $(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });
//# sourceURL=pen.js
</script>
</body></html>