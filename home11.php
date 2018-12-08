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
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Home - The Chennai Silks</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Sharepoint Metro style dynamic Tiles example." />

        <link rel="stylesheet" href="css/styles.php?load=bootstrap/css/bootstrap.min,index,theme_default,metro">
        <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">






        <!-- CSS code from Bootply.com editor -->
     
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
   <!--      <body style="background-image: linear-gradient(-90deg, #f194d4, #bed9ec);"> -->
    <body>
           
          <div class="wrapper" style="z-index:1000"><div class="bub">
            
                <ul class="bg-bubbles">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>

                </ul> 
              </div>
              </div>
          <!-- sticky -->
          <!-- Fixed navbar background-color: #BDBDBD  -->
   <?php include 'includes/header.php';?>
          <!-- sticky end -->

<div class="container dynamicTile">
   <div class="tiles_draggle">
   <? $sel=select_query_json("select menuid,mainmenu from srm_main_menu where menuid>9 order by mnusrno","Centra","TEST");
   $i=0;
   foreach($sel as $select){
    $i++;
   $id=$select['MENUID'];

   switch($id){
 
      case '10':
      $icon="fa fa-user fa-2x";
      $bg_clr="#9033b7";
      
      $direction="horizontal";
      $delay="2000";
      $mode="carousel";
      
      break;
      case '11':
      $icon="fa fa-check fa-2x";
      $bg_clr="red";
      $direction="horizontal";
      $delay="2000";
      $mode="";
      break;
      case '12':
      $icon="fa fa-money fa-2x";
      $bg_clr="#23527c";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '13':
      $icon="fa fa-shopping-bag fa-2x";
      $bg_clr="#b90a72";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '14':
      $icon="fa fa-shopping-cart fa-2x";
      $bg_clr="#173cb2";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '15':
      $icon="fa fa-tachometer fa-2x";
      $bg_clr="#110a52";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '16':
      $icon="fa fa-bullseye fa-2x";
      $bg_clr="#00acee";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '17':
      $icon="fa fa-phone-square fa-2x";
      $bg_clr="#0d47a1";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '18':
      $icon="fa fa-graduation-cap fa-2x";
      $bg_clr="#008e00";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      case '19':
      $icon="fa fa-users fa-2x";
      $bg_clr="#b8003cc4";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
       case '20':
      $icon="fa fa-wrench fa-2x";
      $bg_clr="#114306";
      $direction="horizontal";
      $delay="2000";
      $mode="";

      break;
      default :
      $icon="fa fa-tasks fa-2x";
      $bg_clr="#114306";
      $direction="horizontal";
      $delay="2000";
      $mode="";
      break;










   }
 ?>
      <div class="col-sm-2 col-xs-4">
     <!-- <div id = "tile_<?=$i?>" class="slide live-tile" data-direction="<?=$direction?>" data-mode="<?=$mode?>" data-init-delay="<?=$delay?>">    -->
    <div id="tile_<?=$i?>" class="tile slide" style="background-color:<?=$bg_clr?>">
       <input type="hidden" class="dashboard_order" name="dashboard_order_<?=$id?>" id="dashboard_order_<?=$id?>" value="<?=$id?>"/>
        <div class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner caro_inn_<?=$id?>">
            <div class="item active" id="item_<?=$id?>">             
               <a <? if($id == 11) { ?>href="../../../approval-desk/home.php"<? } else { ?> href="hr.php" <? } ?> target="_blank" "Audit">
              <label class="badge badge-info" ><?=$select['MENUID'].' - '.$select['MAINMENU']?></label> 
               <h3 class="tilecaption"><i class="<?=$icon?>"></i></h3><br>
              <span class="tile_span"><?=$select['MAINMENU']?></span>
            </a>
            </div>
            
          </div>
        </div>
         </div>

    <!-- </div> -->
  </div>
  <? } ?>
  </div>
</div>
<!-- <div class="col-sm-2 col-xs-4">
    <div id="tile11" class="tile">
       
          <div class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
            <div class="item active">
            <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >2 - OPEARTION</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-tachometer fa-2x"></i></h3><br>
              <span style="padding-top: 10%; display:table;margin:0px auto;font-weight: bold;color: white">OPEARTION</span>
            </a>
            </div>
            <div class="item">
              <a href="accounts.php" target="_blank" "Audit" style="display: block;height: 100%">
              <label class="badge badge-info" >19 - OPEARTION</label> 
               <h3 class="tilecaption" style="position: sticky !important;margin-top: 1px !important"><i class="fa fa-tachometer fa-2x"></i></h3><br>
              <span style="padding-top: 10%; display:table;margin:0px auto;font-weight: bold;color: white">OPEARTION</span>
            </a>
            </div>
          </div>
        </div>
         
    </div>
  </div> -->

<!-- 1st Row -->


<!-- 2nd Row -->










<div id="push"></div>
<?php include 'includes/side-panel.php';?>
        
      
      
    <script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/metro.js"></script>
        
    <!-- JavaScript jQuery code from Bootply.com editor  -->

    <script type='text/javascript'>
       $(document).ready(function(){
        // $('a[data-toggle=tooltip]').tooltip();
        // $('a[data-toggle=tooltip]').tooltip({ boundary: 'window' });
         // $('a[data-toggle=tooltip]').tooltip({title: "ltest yte astytye aytyatyge yatystyaetaytsy", html: true, placement: "left"}); 
         //flip mode simple
//using data attributes
$(".live-tile").not(".exclude").liveTile();
// jQuery UI
$( ".tiles_draggle" ).sortable();
$( ".tiles_draggle" ).disableSelection();
//without data-attributes
//$("#tile1").liveTile({ mode:'flip', initDelay: 500 });
//$("#tile2").last().liveTile({ mode:'flip' });
    });

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
      

   
    $( document ).ready(function() {
    $(".tile").height($("#tile1").width());
    $(".carousel").height($("#tile1").width());
    $(".item").height($("#tile1").width());

    $(window).resize(function() {
    if(this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function() {
    $(this).trigger('resizeEnd');
    }, 10);
    });

    $(window).bind('resizeEnd', function() {
    $(".tile").height($("#tile1").width());
    $(".carousel").height($("#tile1").width());
    $(".item").height($("#tile1").width());
    });

    
    $('.caro_inn_10').append($('#item_11'));
    $('.caro_inn_10').append($('#item_12'));
    $('.caro_inn_10').append($('#item_13'));

    $('.caro_inn_10 #item_11').removeClass('active');
    $('.caro_inn_10 #item_12').removeClass('active');
    $('.caro_inn_10 #item_13').removeClass('active');
    });

    

    </script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-40413119-1', 'bootply.com');
    ga('send', 'pageview');
    </script>
        
        
    </body>
</html>