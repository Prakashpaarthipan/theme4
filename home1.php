<?
session_start();
error_reporting(0);
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
include_once('lib/config.php');
include_once('lib/function_connect.php');
include_once('lib/general_functions.php');
extract($_REQUEST);


if($_SESSION['tcs_userid'] == ""){ ?>
    <script>window.location="index.php";</script>
<?php exit();
}

if($_SESSION['tcs_empsrno'] != '') {
    $inner_menuaccess = select_query_json("select distinct sm.mainmenu,smm.menuid from srm_menu_access sma ,srm_menu sm ,srm_main_menu smm where sma.mnucode = sm.mnucode and  sma.VEWVALU  = 'Y'  and smm.mainmenu = sm.mainmenu and sm.menuid = smm.menuid and sma.ENTSRNO = '".$_SESSION['tcs_empsrno']."'", "Centra", 'TEST');

} else {
    $inner_menuaccess = select_query_json("select * from srm_menu_access
                                                    where MNUCODE = ".$inner_submenu[0]['MNUCODE']." and SUPCODE = '".$_SESSION['tcs_userid']."' order by MNUCODE Asc", "Centra", 'TCS');
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

        <!-- <link rel="stylesheet" href="css/styles.php?load=bootstrap/css/bootstrap.min,index,theme_default,metro"> -->
        <link rel="stylesheet" href="css/styles.php?load=bootstrap/css/bootstrap.min,index,theme_default">
        <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400, 700'>
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

        <style type="text/css">
         .placeholder { 
          border:1px dashed black;
        }
         
        </style>




        <!-- CSS code from Bootply.com editor -->
     
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
   <!--      <body style="background-image: linear-gradient(-90deg, #f194d4, #bed9ec);"> -->
    <body     style="background-color: #ffde20;">
           
          <div class="wrapper"><div class="bub">
            
                <ul class="bg-bubbles">
                  <li></li> <li></li> <li></li>  <li></li>  <li></li><li></li> <li></li> <li></li><li></li> <li></li> <li></li>
                  <li></li> <li></li> <li></li> <li></li>  </ul> </div>
              </div>
          <!-- sticky -->
          <!-- Fixed navbar background-color: #BDBDBD  -->
   <?php include 'includes/header.php';?>

          <!-- sticky end -->
<div class="dyheight" ></div>
<div class="container">
  <div class="row">
    <div class="col-xs-12" id="test">

  
    <ul class="clearfix" id="sortable">
 

  
   <?/*
    $sel1=select_query_json("select emp.menuid,srm.mainmenu from srm_main_menu srm,employee_dashboard emp where emp.menuid=srm.menuid and emp.empsrno='".$_SESSION['tcs_empsrno']."' and srm.deleted='N' order by emp.dsbsrno","Centra","TEST");
if(count($sel1)>0){
  
  $count_srm=select_query_json("select distinct (select count(menuid) from srm_main_menu where deleted='N') srmcnt,
(select count(menuid) from employee_dashboard where empsrno='".$_SESSION['tcs_empsrno']."') empcnt from srm_main_menu,employee_dashboard","Centra","TEST");
//print_r($count_srm);
  if($count_srm[0]['SRMCNT']==$count_srm[0]['EMPCNT']){
     //echo "entered";
      $sel=$sel1;
     
  }
else{
  // $sel=select_query_json("select menuid,mainmenu from srm_main_menu where menuid>9  and menuid not in ( select emp.menuid,srm.mainmenu from srm_main_menu srm,employee_dashboard emp where emp.menuid=srm.menuid and emp.empsrno='".$_SESSION['tcs_empsrno']."' order by emp.dsbsrno ) order by mnusrno","Centra","TEST");
  $sel=select_query_json("select srm.menuid,srm.mainmenu,(select max(DSBSRNO) from employee_dashboard) dsbsrno from srm_main_menu srm,employee_dashboard emp where srm.menuid=emp.menuid(+)  and srm.menuid not in 
(select emp.menuid from srm_main_menu srm,employee_dashboard emp where emp.menuid=srm.menuid and emp.empsrno='".$_SESSION['tcs_empsrno']."' and srm.deleted='N')
union
select emp.menuid,mainmenu,emp.dsbsrno from employee_dashboard emp,srm_main_menu srm 
where srm.menuid=emp.menuid  and emp.empsrno='".$_SESSION['tcs_empsrno']."' and srm.deleted='N' order by DSBSRNO","Centra","TEST");
  
}
 ?>
        <input type="hidden" name="emp_exist_stat" id="emp_exist_stat" value="1"/>
      <?

}else{
    $sel=select_query_json("select menuid,mainmenu from srm_main_menu where deleted='N' order by mnusrno","Centra","TEST");
     ?>
  <input type="hidden" name="emp_exist_stat" id="emp_exist_stat" value="0"/>

   <?
}
  


*/?>
<?
  $menucount_ch=select_query_json("select count(menuid)cnt from employee_dashboard emp where emp.empsrno='".$_SESSION['tcs_empsrno']."' order by emp.dsbsrno","Centra","TEST");
  if($menucount_ch[0]['CNT'] != 0){?>
    <input type="hidden" name="emp_exist_stat" id="emp_exist_stat" value="1"/>
   <? if($menucount_ch[0]['CNT'] == count($inner_menuaccess)){

      $emp_dash = select_query_json("select ed.menuid,smm.mainmenu from employee_dashboard ed,srm_main_menu smm where smm.menuid = ed.menuid and ed.empsrno = '".$_SESSION['tcs_empsrno']."' order by dsbsrno","Centra","TEST");
      $sel = $emp_dash;
      
    }
    else{
        $menu_new = select_query_json("select distinct sm.menuid ,sm.mainmenu,(select max(DSBSRNO) from employee_dashboard) dsbsrno from srm_menu_access sma ,srm_menu sm ,srm_main_menu smm , employee_dashboard ed where sma.mnucode = sm.mnucode and ed.menuid=smm.menuid and sma.VEWVALU  = 'Y'  
 and smm.mainmenu = sm.mainmenu and sm.menuid = smm.menuid and sma.ENTSRNO = '".$_SESSION['tcs_empsrno']."' and smm.menuid not in 
 (select emp.menuid from srm_main_menu srm,employee_dashboard emp where emp.menuid=srm.menuid and emp.empsrno='".$_SESSION['tcs_empsrno']."' and srm.deleted='N')
union
select ed.menuid,smm.mainmenu,ed.dsbsrno from employee_dashboard ed,srm_main_menu smm where smm.menuid = ed.menuid and ed.empsrno = '".$_SESSION['tcs_empsrno']."' order by dsbsrno" ,"Centra","TEST");
         $sel =  $menu_new;
    }
  }
  else{
    $sel =  $inner_menuaccess;?>
    <input type="hidden" name="emp_exist_stat" id="emp_exist_stat" value="0"/>
  <?}

    
  
   $i=0;
   $animation='';
   $theme='';
   foreach($sel as $select){
    $i++;
   $id=$select['MENUID'];

   switch($id){
 
      case '1':
      $menuname='SYSTEM';
      $icon="fa fa-laptop fa-2x";
      $bg_clr="#455A64";
      // $animation="flip";

      break;
      case '2':
      $menuname='PURCHASE';
      $icon="fa fa-shopping-cart fa-2x";
      $bg_clr="red";
      $theme='live-tile';
      $tiles="tiles";
      $animation="data-direction='horizontal' data-mode='carousel' data-init-delay='850'";


      break;
      case '3':
      $menuname='TAILYOU';
      $icon="fa fa-scissors fa-2x";
      $bg_clr="rgba(251,140,0 ,1)";
      $url="www.tailyou.com/employee_portal/home.php";

      break;
      case '4':
      $menuname='CRM';
      $icon="fa fa-phone-square fa-2x";
      $bg_clr="#b90a72";

      break;
      case '5':
      $menuname='APPROVAL DESK';
      $icon="fa fa-check fa-2x";
      $bg_clr="#173cb2";
      $url='/approval-desk/home.php';

      break;
      case '6':
      $menuname='JEWELLERY';
      $icon="fa fa-diamond fa-2x";
      $bg_clr="#2979FF";

      break;
      case '7':
      $menuname='OFFLINE REPORT';
      $icon="fa fa-pie-chart fa-2x";
      $bg_clr="#4A148C";

      break;
      case '8':
      $menuname='ADMIN';
      $icon="fa fa-users fa-2x";
      $bg_clr="#5a370ce3";  //#0d47a1

      break;
      case '9':
      $menuname='BRANCH';
      $icon="fa fa-university fa-2x";
      $bg_clr=   "#610a0a";//#008e00";

      break;
      case '10':
      $menuname='HR';
      $icon="fa fa-user fa-2x";
      $bg_clr="#b8003cc4";
      $url="hr.php";

      break;
      //  case '11':
      //  $menuname='APPROVAL';
      // $icon="fa fa-check-square-o fa-2x";
      // $bg_clr="#114306";

      // break;
      case '11':
       $menuname='PAYROLL';
      $icon="fa fa-money fa-2x";
      $bg_clr="#153f48";#AD1457";

      break;
      case '12':
      $menuname='SALES';
      $icon="fa fa-shopping-bag fa-2x";
      $bg_clr="#00C853";

      break;
      case '13':
      $menuname='OPERATION';
      $icon="fa fa-tachometer fa-2x";
      $bg_clr="#200351";

      break;
      case '14':
       $menuname='SCM';
      $icon="fa fa-graduation-cap fa-2x";
      $bg_clr="#09b7af";//#922929";

      break;
       case '15':
       $menuname='UTILITY';
      $icon="fa fa-wrench fa-2x";
      $bg_clr="#795548";

      break;
      default :
      $icon="fa fa-tasks fa-2x";
      $bg_clr="#114306";
      break;



   }
 ?>



 <li> <a href="<?=$url?>" target="_blank" "<?=$select['MAINMENU']?>">
     
        
     
         <div class="box nostatus <?=$theme?>" style="background-color:<?=$bg_clr?>;" <?=$animation?>>
            
            <div id = "tile_<?=$i?>" class="s" ><h4> <label class="badge badge-info " ><?=$select['MENUID']?></label> </h4>
            <input type="hidden" class="dashboard_order" name="dashboard_order_<?=$id?>" id="dashboard_order_<?=$id?>" value="<?=$id?>"/>
            <p><div class="iconalign"><h3 class=""><i class="<?=$icon?>"></i></h3><br>
              <span class=""><?=$select['MAINMENU']?></span>            
            </div></p>          
        </div>        
      </div>  
  
 </a>

 </li>
  
  <? $url='';
    $animation='';
    $theme='';
    $tiles='';
   
   } ?>
  </div>

</div>
 </div>
  </div>



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
// $(".live-tile").not(".exclude").liveTile();
// jQuery UI
$(".live-tile").liveTile();
$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();
$('#sortable li').addClass('ui-state-default');
//without data-attributes
//$("#tile1").liveTile({ mode:'flip', initDelay: 500 });
//$("#tile2").last().liveTile({ mode:'flip' });

    });

       $( "#sortable" ).sortable({
        
       
    //     start: function(event, ui) {
    //   var marginsToSet = ui.item.data().sortableItem.margins;
    //   ui.helper.css('margin-left', marginsToSet.left);
    //   ui.helper.css('margin-top', marginsToSet.top);
    // },
       
   update:function(event,ui){
    var element_id= [];
      var g = 0;
          $(".dashboard_order").each(function(){

            element_id[g]=($(this).val());
            g++;
          });
          console.log("Tiles Order:"+element_id);
          var element_id1 = JSON.stringify(element_id,true);

          if($("#emp_exist_stat").val() == 0){
          $.ajax({
            url:'ajax/ajax_employee_dashboard.php?action=insert',
            type:'POST',
            data: {element_id:element_id1
                  },
            dataType:"html",
            success:function(response,result){
              console.log(response);
                if($("#emp_exist_stat").val() == 0){
                  $("#emp_exist_stat").val(1);
                }
            }

          });
        }
        if($("#emp_exist_stat").val() == 1){
          var element_id1 = JSON.stringify(element_id,true);
            $.ajax({
            url:'ajax/ajax_employee_dashboard.php?action=update',
            type:'POST',
            data: {element_id:element_id1
                  },
            dataType:"html",
            success:function(response,result){
               console.log(response);
                if($("#emp_exist_stat").val() == 1){
                  $("#emp_exist_stat").val(1);
                }
            }

          });

        }
        callpos();
  }
  
  });
        function callpos(){
          $( "#sortable" ).sortable( "refresh",true );
          $( "#sortable" ).sortable( "refreshPositions" ,true);
            }

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
    trigger : 'hover click focus',
        html : true,
        //content : '<div class="my-popover">'+
         //         '<a href="#" class="pull-left"><img src="avatar.jpg" class="media-object img-rounded" alt="Sample Image" width="150" height="100" style="text-align:center"></a>'+
         //         '<div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div>'+
          //        '</div>'
          content: function getprofile_info(){
            return $("#my_popover_content").html();
          }

    });
      

    $(document).ready(function() {

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

    });

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