<?
session_start();
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
 include_once('lib/config.php');
 include_once('lib/function_connect.php');
// include_once('/general_functions.php');
extract($_REQUEST);
        



//$sql_emprights = select_query_json("select * from tlu_employee_rights where deleted = 'N' and empsrno = '".$_SESSION['tcs_empsrno']."'", "Centra", "TCS");
$_SESSION['tlu_emp_prhdcod'] = 1;
if(count($sql_emprights) > 0) {
    $_SESSION['tlu_emp_prhdcod'] = $sql_emprights[0]['PRSCODE'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- META SECTION -->
<title>Purchase Order Track Board :: <?php echo $site_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- END META SECTION -->
<? //$theme_view = "css/theme-default.css";
   //if(isset($_COOKIE['assign_theme'])) { $theme_view = $_COOKIE['assign_theme']; } 

   $theme_view= 'theme_default/jquery-ui.min,theme_default/bootstrap,theme_default/font-awesome.min,theme_default/summernote,theme_default/codemirror,theme_default/nv.d3,theme_default/jquery.mCustomScrollbar,theme_default/fullcalendar,theme_default/blueimp-gallery.min,theme_default/rickshaw,theme_default/dropzone,theme_default/animate.min,theme_default/theme-default';?>


<link rel="stylesheet" href="css/styles.php?load=<?=$theme_view?>,select2.min,po_track1,social-buttons,po_track2,jquery.dropdown,default,ekko-lightbox,flavor-lightbox">


<!-- END META SECTION -->
<!-- CSS INCLUDE -->
<!-- 
<link rel="stylesheet" type="text/css" id="theme" href=""/>
<link rel="stylesheet" type="text/css" href="css/.css"/>
<link rel="stylesheet" type="text/css" href="css/.css"/> -->

 <!-- <link rel="stylesheet" href="css/.css" type="text/css">
  
    <link href="css/.css" rel="stylesheet">
   
    
    <link rel="stylesheet" href="css/.css"> -->
   
 <!-- <link rel="stylesheet" href="css/.css"> -->
<!-- EOF CSS INCLUDE -->
</head>
<body>
   <?php include 'includes/header1.php';?>
   
 <?php include 'includes/side-panel.php';?>
    <div id="load_page" ></div>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-toggled page-container-wide page-navigation-top-fixed">

        <!-- START PAGE SIDEBAR -->
        <!-- <div class="page-sidebar page-sidebar-fixed scroll mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar mCS_disabled"> -->
            <!-- START X-NAVIGATION -->
            <? //include 'lib/app_left_panel.php';?>
            <!-- END X-NAVIGATION -->
        <!-- </div> -->
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <?// include "lib/header.php"; ?>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb" >
                <li><a href="home.php">Home</a></li>
                <li class="active">Employee Convert</li>
                 <li> 
                  
                  <select name='select_branch' id='select_branch'  onchange="showboard(this.value)">
                  
                    <option value='0'>CHOOSE THE BRANCH</option>
                    <option value='all'>ALL</option>
                    <? 

                    $sql_brn = select_query_json("Select Brncode,Substr(Nicname,3,10) NICNAME From Branch ORDER BY BRNCODE", "Centra", 'TCS');
                    foreach($sql_brn as $key=>$secval){
                   ?>
                    <option value='<?=$secval['BRNCODE']?>'><?=$secval['NICNAME']?></option>
          <?}?>                    

                </select>  </li>
                <li class="xn-search">
                  
                        <input type="text" name="entry_no" id="entry_no" onkeyup="selectorder(this.value);" placeholder="Search Order No."/>
            
            </li>
            </ul>
            <!-- END BREADCRUMB -->
             <span class="pull-right red_clr" id="valueinlacs" > </span>
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

        
                <div class="content-frame-body1">



                    <div class="list_view push-up-12" id='id_monitor_board'>

                      <? 
                     //  $sql=select_query_json("select (select COUNT(ZNECODE) from order_tracking_detail where ZNECODE>0 and ZNESTAT='N' and DELETED='N') totcount,ord.PROSTAT,ord.SUPCODE,ord.PORNUMB,ord.SUPGRD,ord.PORQTY,ord.PORYEAR,ord.ZNECODE,ord.ZNPSRNO,ord.REMARKS,ord.EMPSRNO, to_char(ord.PORDATE,'dd-MM-yyyy') PORDATE,to_char(ord.POREDDT,'dd-MM-yyyy') POREDDT,to_char(ord.ADDDATE,'dd-MM-yyyy') ADDDATE1, to_char(ord.POREDDT,'dd-MM-yyyy HH:mi:ss AM') POREDDT,ord.PORVAL,sup.SUPNAME,city.CTYNAME,emp.empname,emp.empcode from supplier sup,city city,order_tracking_detail ord,employee_office emp where  ord.ZNESTAT='N' and emp.empsrno=ord.empsrno and sup.SUPCODE=ord.supcode and sup.CTYCODE=city.CTYCODE  and ord.DELETED='N' order by ord.ADDDATE asc", "Centra", "TEST");
                     //   $sql_process=array();
                     //   foreach($sql as $key => $process)
                     //  {
                     //      $sql_process[$process['ZNECODE']][] = $process;
                     //  }
                     // //print_r($sql_process);
                     //   $sql_ord_confirm = select_query_json("select mas.ZNECODE,mas.ADDUSER,mas.ZNCSRNO,sum(mas.ZNEDAYS) ZNEDAYS,mas.ZNENAME from order_tracking_master mas where mas.ZNEMODE='R' and mas.DELETED='N' group by(mas.ZNECODE,mas.ADDUSER,mas.ZNCSRNO,mas.ZNENAME) order by mas.ZNCSRNO asc", "Centra", "TEST");
                     //   //  $seltotal=select_query_json("select COUNT(*) totcount from order_tracking_detail where ZNECODE>0 and ZNESTAT='N' and DELETED='N'", "Centra", "TEST");
                     //  // print_r($sql_ord_confirm);
                     //      $tme = 0; $ttl_prscnt = '';$perc=''; $cnt=count($sql_ord_confirm);
                     //      foreach ($sql_ord_confirm as $key => $ord_confirm_value) { $tme+=1; 
                     //        $count=0;$sum=0;$subcount=0;
                     //        $subcount=count($sql_process[$ord_confirm_value['ZNECODE']]);
                     //        for($i=0;$i<$subcount;$i++){
                              
                     //         $sum+=$sql_process[$ord_confirm_value['ZNECODE']][$i]['PORVAL'];
                     //        }
                     //       $count= $sql_process[$ord_confirm_value['ZNECODE']][0]['TOTCOUNT'];
                           
                             
                     //       $perc=round(($subcount/$count)*100);
                     //       $totalval=number_format(($sum/100000),2);
                            ?>
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"> <?= '%'?></span> 
                                    <!-- <?=$ord_confirm_value['ZNENAME']?>  -->
                                    VERIFIED
                                    <span class="pull-right count red-tooltip" id="count<?=$tme?>" data-toggle="tooltip" data-placement="top"> <?php if($subcount>0){ echo $subcount;}else{echo '0';}?></span><br><br>
                                   <!-- <span class="pull-left duedays" > Due Days : <?=$ord_confirm_value['ZNEDAYS'].' days'?> </span> -->
                                   <!-- <span class="pull-right totalvalue" > Total Value : <?=$totalval.' L'?></span> -->
                                </h3>

                              
                                 <? /* <div id="list_head" style="margin:0;color:#000;font-size:12px !important;">
                                      <div class="row" style="margin:0">
                                        <div class="col-md-12" style="padding:5px 0px;text-align:center">                                       
                                        
                                          <div class="col-md-3">
                                              <label >Order</label>
                                          </div><!-- duration -->
                                          <div class="col-md-5">
                                              <label>Supplier</label>
                                          </div><!-- rate -->
                                          
                                          
                                          <div class="col-md-2">
                                              <label >Qty</label>
                                          </div><!-- CGST -->
                                          <div class="col-md-2">
                                              <label >Val</label>
                                          </div><!-- SGST -->
                                       </div>
                                      
                                      </div> 

                                    </div> */ ?> 

                <div class='tasks table'>
                   <?php 
                        // $t=0;$due=0;$active=0;
                        //               for($i=0;$i<$subcount;$i++){
                                            
                        //                     $sum+=$sql_process[$ord_confirm_value['ZNECODE']][$i]['PORVAL'];
                        //                     $t=$t+1;
                        //                if($sql_process[$ord_confirm_value['ZNECODE']][$i]['EMPSRNO']==$_SESSION['tcs_empsrno']){
                        //                 $status=1;
                        //                }else{
                        //                 $status=0;
                        //                }
                        ?>
                    
                     <div class='task-item hover-box' id='task_item1'>
                     <div class='openprocess' id="order1" onclick="">
                          <div class="row task_row">
                                    <div class="col-md-12 task_col1">
                                        <div class="form-group">
                                         <!--<div class="col-md-1">
                                             <span id='dropdown<?=$tme.$t?>' style="font=size:12px;font-weight:bold;color:#ffebcc;border:1px solid #000;cursor:pointer !important;padding:2px 5px;background-color:#29a329"  onclick="selecttoggle('<?=$tme.$t?>')"> + </span>
                                          </div><!-- duration -->
                                          
                                          <div class="col-md-12 task_col2">
                                              Entry Year : 2018 - 19
                                          </div>
                                           <div class="clearboth"></div>

                                           <div class="col-md-12 task_col2">
                                              Located Branch : Tiruppur
                                          </div>
                                           <div class="clearboth"></div>
                                         
                  </div>
              </div>
               </div>
             </div>
           </div>
         </div>
       </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
</div>
</div>
    <? include "lib/app_footer.php"; ?>


<div class="modal fade" id="modal-bodyshowProcess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
</div>
    <!-- Show Modal process -->
    <div id="myModal_showProcess" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
               
                <div class="modal-body" id="modal-bodyshowProcess">
                  
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Show History -->
    <div id="myModal_showHistory" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
               
                <div class="modal-body" id="modal-bodyshowHistory"></div>
            </div>
        </div>
    </div>
    <!-- Show History -->
 <!-- Show Emploee numbers-->
    <div id="myModal_showEmployee" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       
    </div>
  
    <!-- Show History -->
    <!-- Show Modal Windows -->

    <!-- START SCRIPTS -->
  
 <script type = "text/javascript" src = "js/scripts.php?load=plugins/jquery/jquery.min,plugins/jquery/jquery-ui.min,plugins/bootstrap/bootstrap.min,jquery-ui-1.10.3.custom.min,plugins/icheck/icheck.min,plugins/mcustomscrollbar/jquery.mCustomScrollbar.min,plugins/scrolltotop/scrolltopcontrol,settings,plugins,actions,task,script,jquery-customselect,jquery.dropdown,po_track_script1"> </script> <!-- do not specify the .js extension -->


   
    
   
</body>
</html>
