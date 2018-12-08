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
 <!-- script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script> -->
  <meta charset='UTF-8'><meta name="robots" content="noindex">
  <title>HR - The Chennai Silks</title>
  <!-- <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/mavrK/pen/mPPWGN?limit=all&page=20&q=social" /> -->
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
          top: 50px; left: -112px; display: block; width: 400px; margin-left: -70px;padding:0px;z-index: 999999;
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

<!--  <ul class="">
    <span class="rela-block side-buttona accounts" style="text-decoration: none; cursor: none; background-color: #ffde20; color:black;  height: 30px;"></span>
    <li>
      <a class="rela-block side-button purchase" href="#subpurchase" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none !important;"></a>
      <ul class="collapse list-unstyled " id="subpurchase" >
        <li class="side-hover-eff" >  
          <a class="sub-men  " href="#subinvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="invoice" style="font-size: 12px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-file-text"></i>Invoice Receiving</a><span class="side-button-mini" style="margin-left: 5px;"></span>
        </li>
        <ul class="list-unstyled collapse" id="subinvoice">
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 1</a>
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 2</a>
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 3</a>
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242"><i style="color: #FF9800;padding-right: 5px" class="fa fa-gift"></i>Link 4</a>
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
        </ul>
      
        <li class="side-hover-eff" > <a class="sub-men "  href="#subentry" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="returnentry" style="font-size: 12px;text-decoration: none !important;color: #424242"><i style="color: #2979FF;padding-right: 5px" class="fa fa-exchange"></i>Return Entry</a><span class="side-button-mini" style="margin-left: 5px;"></span></li>
        <ul class="list-unstyled collapse " id="subentry"  >
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 1</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 2</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 3</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 4</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 5</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>

          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 6</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 7</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 8</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
          <li class="side-hover-eff2" >
            <a class="sub-men2  "  style="font-size: 10px;text-decoration: none !important;color: #424242;"><i style="color: #9C27B0;padding-right: 5px" class="fa fa-gift"></i>Link 9</a> 
            <span class="side-button-mini2" style="margin-left: 10px;"></span>
          </li>
        </ul> 
      </ul>
    </li>
    <a class="rela-block side-button payment" href="#subpu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none"></a>
    <a class="rela-block side-button sales" style="text-decoration: none"></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none" ></a>
        <a class="rela-block side-button auditing" style="text-decoration: none" ></a>
        <a class="rela-block side-button approval" style="text-decoration: none" ></a>        
        <a class="rela-block side-button reports" style="text-decoration: none" ></a>
        <a class="rela-block side-button utility" style="text-decoration: none"></a>
        <a class="rela-block side-button purchase" style="text-decoration: none"></a>
        <a class="rela-block side-button payment" style="text-decoration: none" ></a>
        <a class="rela-block side-button sales" style="text-decoration: none" ></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none" ></a>
        <a class="rela-block side-button auditing" style="text-decoration: none" ></a>
        <a class="rela-block side-button utility" style="text-decoration: none" ></a>
        <a class="rela-block side-button purchase" style="text-decoration: none" ></a>
        <a class="rela-block side-button payment" style="text-decoration: none" ></a>
        <a class="rela-block side-button sales" style="text-decoration: none" ></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none"></a>
        <a class="rela-block side-button auditing" style="text-decoration: none"></a> 
        <a class="rela-block side-button assetexpense" style="text-decoration: none" ></a>
        <a class="rela-block side-button auditing" style="text-decoration: none" ></a>
        <a class="rela-block side-button utility" style="text-decoration: none" ></a>
        <a class="rela-block side-button purchase" style="text-decoration: none" ></a>
        <a class="rela-block side-button payment" style="text-decoration: none" ></a>
        <a class="rela-block side-button sales" style="text-decoration: none" ></a>
        <a class="rela-block side-button assetexpense" style="text-decoration: none"></a>
        <a class="rela-block side-button auditing" style="text-decoration: none"></a> 
  </ul> -->

<!--         <div class="rela-block side-button purchase"  onclick="openSubmenu()">       

        </div>
        <div id="inv" style="display: none;">
          <div class="sub-menu side-button-mini invoice" id="invoice"  >
            test
          </div>
          <div class="sub-menu side-button-mini returnentry"  id="returnentry" >
            test2
          </div>
      </div> -->  
        
<!--         <div class="rela-block side-button payment"></div>
        <div class="rela-block side-button sales"></div>
        <div class="rela-block side-button assetexpense"></div>
        <div class="rela-block side-button auditing"></div>
        <div class="rela-block side-button approval"></div>        
        <div class="rela-block side-button reports"></div>
        <div class="rela-block side-button utility"></div>
        <div class="rela-block side-button purchase"></div>
        <div class="rela-block side-button payment"></div>
        <div class="rela-block side-button sales"></div>
        <div class="rela-block side-button assetexpense"></div>
        <div class="rela-block side-button auditing"></div>
        <div class="rela-block side-button utility"></div>
        <div class="rela-block side-button purchase"></div>
        <div class="rela-block side-button payment"></div>
        <div class="rela-block side-button sales"></div>
        <div class="rela-block side-button assetexpense"></div>
        <div class="rela-block side-button auditing"></div> -->
       
        <div class="force-overflow"></div>
    </div>
</div>
    <!-- Fixed navbar background-color: #BDBDBD--> 
    <!-- <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #403f93">
      <div class="container">
        <div class="navbar-header">
          
        </div>
      
        
      </div>
      <style type="text/css">
      
      </style>
        <ul class="nav  navbar-right pull-right ">
            <li><a href=""><i class="fa fa-sign-out fa-2x" style="color:white;padding-right: 10px"></i></a></li>
                      
          </ul>
    </nav> -->
     <nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #1c1853;border:none;">
      <div class="container" style="margin: 0px;padding: 0px;width: 100%">
        <div class="navbar-header">
         
        </div>
         <ul class="nav navbar-nav pull-left">
              <img src="logo.png" class="img-responsive">
         
                      
          </ul>
        
        <ul class="nav navbar-nav pull-right">
              <li><a href="" id="open-popover-link1"  data-toggle="popover" class="tool" data-original-title=""><i class="fa fa-user fa-2x" style="color:white;padding: 1px"></i></a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-2x" style="color:white;"></i></a></li>
                      
          </ul>
         </div>

    </nav>
<div class="sticky-container">
    <ul class="sticky">
      
      

      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-user-circle fa-stack-1x" style="color:black"></i></span> &nbsp HR 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-check fa-stack-1x" style="color:black"></i></span>&nbsp Approval  
      </li>
      <li>
      <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-inr fa-stack-1x" style="color:black"></i></span>&nbsp Accounts  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-money fa-stack-1x" style="color:black"></i></span>&nbsp Payroll
        <!-- <img width="32" height="32" title="" alt="" src="img/tw1.png" /> -->
      
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-shopping-cart fa-stack-1x" style="color:black"></i></span>&nbsp  Purchase 
      </li>
      
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-shopping-bag fa-stack-1x" style=" color:black"></i></span>&nbsp Sales 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-tachometer fa-stack-1x" style="color:black"></i></span>&nbsp Operation  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-university fa-stack-1x" style="color:black"></i></span>&nbsp Branch 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-phone-square fa-stack-1x" style="color:black"></i></span>&nbsp Crm  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-graduation-cap fa-stack-1x" style="color:black"></i></span>&nbsp SCM  
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa">  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-black-tie fa-stack-1x" style="color:black"></i></span>&nbsp Admin 
      </li>
      <li>
        <span class="fa-stack fa-lg fontfa" >  <i class="fa fa-square fa-stack-2x icon-background1" ></i>  <i class="fa fa-wrench fa-stack-1x" style="color:black"></i></span>&nbsp Utility 
      </li>
      
      
    </ul>
  </div>

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
    window.location.href='../../../approval-desk-test/employee_convert.php','_blank';
  }
  $(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });
//# sourceURL=pen.js
</script>
</body></html>