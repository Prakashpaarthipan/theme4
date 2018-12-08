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
      <?  $theme_view= 'theme_default/summernote,theme_default/codemirror,theme_default/nv.d3,theme_default/jquery.mCustomScrollbar,theme_default/fullcalendar,theme_default/blueimp-gallery.min,theme_default/rickshaw,theme_default/dropzone,theme_default/animate.min,theme_default/theme-default';?>


<link rel="stylesheet" href="css/styles.php?load=<?=$theme_view?>,select2.min,emp_track1,social-buttons,emp_track2,jquery.dropdown,default,ekko-lightbox">
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
      <ul class="breadcrumb" >
                <li><a href="home.php">Home</a></li>
                <li class="active">Employee Convert</li>
                 <li> 
                  
                  <select name='select_branch' class="chos" id='select_branch'  onchange="showboard(this.value)">
                  
                    <option value='0'>CHOOSE THE BRANCH</option>
                    <option value='all'>ALL</option>
                    <? 
                    $branch='888,104,107,112,113,1,201,202,14,10';
                    // $sql_brn = select_query_json("Select Brncode,Substr(Nicname,3,10) NICNAME From Branch where brncode in (888,104,107,112,113,1,201,202,14,10) ORDER BY BRNCODE", "Centra", 'TCS');
                    $sql_brn = select_query_json("select brn.brncode,Substr(brn.Nicname,3,10) NICNAME from attn_interview_staff tdet,branch brn 
                                                    where tdet.sec_brncode=brn.brncode and tdet.deleted='N' and tdet.empsrno in (1801,-55641,-452,-21344,-20118) group by tdet.sec_brncode,brn.brncode,brn.Nicname
                                                    order by brn.brncode", "Centra", "TEST");
                    foreach($sql_brn as $key=>$secval){
                   ?>
                    <option value='<?=$secval['BRNCODE']?>'><?=$secval['NICNAME']?></option>
                   <?}?>                    

                </select>  </li>
                <li class="xn-search">
                  
                        <input type="text" name="interview_no" id="interview_no" onkeyup="selectorder(this.value);" placeholder="Search Interview No."/>
            
            </li>
            </ul>
            <!-- END BREADCRUMB -->
             <span class="pull-right red_clr" id="valueinlacs" > </span>
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

        
                <div class="content-frame-body1">

        <span id="sel_board">

                    <div class="list_view push-up-12" id='id_monitor_board'>



                        <?  




                        $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.EMPPHOT,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and empsrno='1801' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                   VERIFY
                                   <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql)?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                                $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno=1801", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" <?if($_SESSION['tcs_empsrno']=='1801'){?>  onclick="openproces('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>')"<?}?>>
                                            <div class="row task_row">
                                                    <div class="col-md-12 task_col1">
                                                        <div class="form-group">
                                                           
                                                          <div class="col-md-4">
                                                           <div id="my-canvas<?=$id?>">
                                                             
                                                             <?php if($img[0]['EMPPHOT']!=""){ echo '<a href="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'" target="_blank"><img class="profilepic" style="max-height:100px;max-width:100px" src="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'"/></a>';
                                                           }
                                                           else{
                                                            echo '<img class="profilepic" style="max-height:100px;max-width:100px" src="images/customers.png"/>';
                                                           }?>
                                                           </div>
                                                          
                                                          
                                                          </div>
                                                           <div class="col-md-8"> 
                                                           <div class="col-md-12 task_col2">
                                                               <?=$sql[$i]['INTERVIEW_PLACE']?> 
                                                            </div>
                                                             <div class="clearboth"></div>
                                                              <div class="col-md-12 task_col2 font_small">
                                                                <?=$sql[$i]['INTERVIEWDATE'].' - '.$sql[$i]['INTNUMB'] .' / '.$sql[$i]['INTYEAR']?>  
                                                            </div>
                                                             <div class="clearboth"></div>

                                                            
                                                           </div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4">  Name <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['EMPNAME']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>

                                                             <div class="col-md-12 task_col2">
                                                               <span class="black col-md-4"> Branch <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTION_BRANCH']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                                <span class="black col-md-4"> Section <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_SECTION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4"> Designation <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_DESIGNATION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                           
                                                          </div>
                                                       </div>
                                              </div>
                                          </div>
                                    </div>
                                
                              <?}?>
                               </div>
                       </div>



                       <!-- HR HOD -->
<? 

 $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.EMPPHOT,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='-55641' and  to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                  HR HOD
                                   <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql);?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                                $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno='-55641'", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces1('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>','-55641')" >
                                            <div class="row task_row">
                                                    <div class="col-md-12 task_col1">
                                                        <div class="form-group">
                                                           
                                                          <div class="col-md-4">
                                                           <div id="my-canvas<?=$id?>">
                                                             
                                                            <?php if($img[0]['EMPPHOT']!=""){ echo '<a href="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'" target="_blank"><img class="profilepic" style="max-height:100px;max-width:100px" src="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'"/></a>';
                                                           }
                                                           else{
                                                            echo '<img class="profilepic" style="max-height:100px;max-width:100px" src="images/customers.png"/>';
                                                           }?>
                                                           </div>
                                                          
                                                          
                                                          </div>
                                                           <div class="col-md-8"> 
                                                           <div class="col-md-12 task_col2">
                                                               <?=$sql[$i]['INTERVIEW_PLACE']?> 
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2 font_small">
                                                                <?=$sql[$i]['INTERVIEWDATE'].' - '.$sql[$i]['INTNUMB'] .' / '.$sql[$i]['INTYEAR']?>  
                                                            </div>
                                                             <div class="clearboth"></div>


                                                           </div>
                                                            <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4">  Name <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['EMPNAME']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>

                                                             <div class="col-md-12 task_col2">
                                                               <span class="black col-md-4"> Branch <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTION_BRANCH']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                                <span class="black col-md-4"> Section <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_SECTION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4"> Designation <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_DESIGNATION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                              <div class="col-md-12 task_col2">
                                                              <? $selsal=select_query_json("select EXPSLRY from employee_convert_details where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."'","Centra","TEST");?>  
                                                              <span class="black col-md-4"> Exp Salary <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$selsal[0]['EXPSLRY']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                           
                                                          </div>
                                                       </div>
                                              </div>
                                          </div>
                                    </div>
                                
                              <?}?>
                               </div>
                       </div>


                          <!-- GM APPROVAL -->
                            <?  $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='-452' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                  ADMIN-GM APPROVAL
                                    <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql);?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                               
                               $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno='-452'", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces1('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>','-452')">
                                            <div class="row task_row">
                                                    <div class="col-md-12 task_col1">
                                                        <div class="form-group">
                                                           
                                                          <div class="col-md-4">
                                                           <div id="my-canvas<?=$id?>">
                                                             
                                                            <?php if($img[0]['EMPPHOT']!=""){ echo '<a href="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'" target="_blank"><img class="profilepic" style="max-height:100px;max-width:100px" src="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'"/></a>';
                                                           }
                                                           else{
                                                            echo '<img class="profilepic" style="max-height:100px;max-width:100px" src="images/customers.png"/>';
                                                           }?>
                                                           </div>
                                                          
                                                          
                                                          </div>
                                                           <div class="col-md-8"> 
                                                           <div class="col-md-12 task_col2">
                                                               <?=$sql[$i]['INTERVIEW_PLACE']?> 
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2 font_small">
                                                                <?=$sql[$i]['INTERVIEWDATE'].' - '.$sql[$i]['INTNUMB'] .' / '.$sql[$i]['INTYEAR']?>  
                                                            </div>
                                                             <div class="clearboth"></div>
                                                            
                                                           </div>
                                                            <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4">  Name <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['EMPNAME']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>

                                                             <div class="col-md-12 task_col2">
                                                               <span class="black col-md-4"> Branch <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTION_BRANCH']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                                <span class="black col-md-4"> Section <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_SECTION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4"> Designation <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_DESIGNATION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                              <div class="col-md-12 task_col2">
                                                              <? $selsal=select_query_json("select EXPSLRY from employee_convert_details where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."'","Centra","TEST");?>  
                                                              <span class="black col-md-4"> Exp Salary <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$selsal[0]['EXPSLRY']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                           
                                                          </div>
                                                       </div>
                                              </div>
                                          </div>
                                    </div>
                                
                              <?}?>
                               </div>
                       </div>


                          <!-- MD APPROVAL -->
                            <?  $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.EMPPHOT,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='-21344' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                  SK SIR APPROVAL
                                    <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql);?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                               
                                $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno='-21344'", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces1('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>','-21344')">
                                            <div class="row task_row">
                                                    <div class="col-md-12 task_col1">
                                                        <div class="form-group">
                                                           
                                                          <div class="col-md-4">
                                                           <div id="my-canvas<?=$id?>">
                                                             
                                                             <?php if($img[0]['EMPPHOT']!=""){ echo '<a href="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'" target="_blank"><img class="profilepic" style="max-height:100px;max-width:100px" src="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'"/></a>';
                                                           }
                                                           else{
                                                            echo '<img class="profilepic" style="max-height:100px;max-width:100px" src="images/customers.png"/>';
                                                           }?>
                                                           </div>
                                                          
                                                          
                                                          </div>
                                                           <div class="col-md-8"> 
                                                           <div class="col-md-12 task_col2">
                                                               <?=$sql[$i]['INTERVIEW_PLACE']?> 
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2 font_small">
                                                                <?=$sql[$i]['INTERVIEWDATE'].' - '.$sql[$i]['INTNUMB'] .' / '.$sql[$i]['INTYEAR']?>  
                                                            </div>
                                                             <div class="clearboth"></div>
                                                           </div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4">  Name <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['EMPNAME']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>

                                                             <div class="col-md-12 task_col2">
                                                               <span class="black col-md-4"> Branch <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero"><?=$sql[$i]['SELECTION_BRANCH']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                                <span class="black col-md-4"> Section <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_SECTION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4"> Designation <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_DESIGNATION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                              <div class="col-md-12 task_col2">
                                                              <? $selsal=select_query_json("select EXPSLRY from employee_convert_details where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."'","Centra","TEST");?>  
                                                              <span class="black col-md-4"> Exp Salary <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$selsal[0]['EXPSLRY']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                           
                                                          </div>
                                                       </div>
                                              </div>
                                          </div>
                                    </div>
                                
                              <?}?>
                               </div>
                       </div>




 <!-- MD APPROVAL -->
                            <?  $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.EMPPHOT,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='-20118' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                  KS SIR APPROVAL
                                   <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql);?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                                $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno='-20118'", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces1('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>','-20118')">
                                            <div class="row task_row">
                                                    <div class="col-md-12 task_col1">
                                                        <div class="form-group">
                                                           
                                                          <div class="col-md-4">
                                                           <div id="my-canvas<?=$id?>">
                                                             
                                                             <?php if($img[0]['EMPPHOT']!=""){ echo '<a href="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'" target="_blank"><img class="profilepic" style="max-height:100px;max-width:100px" src="data:image/jpg;base64,'.$img[0]['EMPPHOT'].'"/></a>';
                                                           }
                                                           else{
                                                            echo '<img class="profilepic" style="max-height:100px;max-width:100px" src="images/customers.png"/>';
                                                           }?>
                                                           </div>
                                                          
                                                          
                                                          </div>
                                                           <div class="col-md-8"> 
                                                           <div class="col-md-12 task_col2">
                                                               <?=$sql[$i]['INTERVIEW_PLACE']?> 
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2 font_small">
                                                                <?=$sql[$i]['INTERVIEWDATE'].' - '.$sql[$i]['INTNUMB'] .' / '.$sql[$i]['INTYEAR']?>  
                                                            </div>
                                                             <div class="clearboth"></div>

                                                           </div>
                                                            <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4">  Name <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['EMPNAME']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>

                                                             <div class="col-md-12 task_col2">
                                                               <span class="black col-md-4"> Branch <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTION_BRANCH']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                                <span class="black col-md-4"> Section <span class="pull-right">:</span> </span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_SECTION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                             <div class="col-md-12 task_col2">
                                                              <span class="black col-md-4"> Designation <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$sql[$i]['SELECTED_DESIGNATION']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                              <div class="col-md-12 task_col2">
                                                              <? $selsal=select_query_json("select EXPSLRY from employee_convert_details where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."'","Centra","TEST");?>  
                                                              <span class="black col-md-4"> Exp Salary <span class="pull-right">:</span></span> <span class="col-md-8 padding_zero font_small"><?=$selsal[0]['EXPSLRY']?></span>
                                                            </div>
                                                             <div class="clearboth"></div>
                                                           
                                                          </div>
                                                       </div>
                                              </div>
                                          </div>
                                    </div>
                                
                              <?}?>
                               </div>
                       </div>
            </div> </span>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
</div>

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
   <!-- jQuery 2.1.3 -->
    <!-- <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script> -->
  
    <!-- Show History -->
    <!-- Show Modal Windows -->

    <!-- START SCRIPTS -->
  
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->

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
    
 <script type = "text/javascript" src = "js/scripts.php?load=jquery-ui-1.10.3.custom.min,plugins/icheck/icheck.min,plugins/mcustomscrollbar/jquery.mCustomScrollbar.min,plugins,jquery-customselect,jquery.dropdown,emp_track_script1,select2"> </script> <!-- do not specify the .js extension -->

<link href="bootstrap/css/select2.css" rel="stylesheet"/>
 
  <script>
    $(document).ready(function(){
      $('.chos').select2();
     

      $("#empdetails").mouseenter(function(){
    $("#case-left").css("display", "block");
     
    $("#case-right").css("display", "block");
});
       $("#empdetails").mouseleave(function(){
    $("#case-left").css("display", "none");
    
    $("#case-right").css("display", "none");
});
    });
function isEmail(id,email,spanid) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if(regex.test(email)){
    $('#'+id).css('border','1px solid #ccc');
    $('#'+spanid).text('');
    //return true;
  }
  else{
     $('#'+id).val("");
    $('#'+id).css('border','1px solid red');
    $('#'+spanid).text('Enter Valid Mail ID');
     $('#'+id).focus();
   // return false;
  }

  // return regex.test(email);
}

function save_details(frm_name){
  var count=0;
  var rowcount=$('#iddetails tr').length;
  console.log(rowcount);
  $('.reqd').each(function(){
    var val=$(this).val();
    if(val=="")
    {
       count+=1;
       $(this).css('border','1px solid red');
    }


  });
  $('.len').each(function(){
     var charLength = $(this).val().length;
     var min=$(this).prop('minLength');
     var max=$(this).prop('maxLength');
     //var id=$(this span);
        if(charLength < min){
            $(this).next(span).text('Length is short, minimum '+min+' required.');
             $(this).css('border','1px solid red');
             count+=1;

        }else if(charLength > max){
            $(this).next(span).text('Length is not valid, maximum '+max+' allowed.');
            $(this).css('border','1px solid red');
            count+=1;
            //$(this).val(char.substring(0, maxLength));
        }else{

          $(this).css('border','1px solid #ccc');
          // $(this).next(span).text('');
          
        }

  });


  if(rowcount==1){
      $('#idupload').css('border','1px solid red');
      $('#iduploadspan').text('Please Select any one ID Proof');
      count+=1;
  }

  if(count==0){

             var form_data = new FormData(document.getElementById(frm_name));
             form_data.append('action','savedetails');
             $.ajax({
                url:"ajax/ajax_employee_convert.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,                
                dataType:"html",
                success:function(data){
                 console.log(data);
                 window.location.reload();
                }
            });


  }




}

//
function save_details1(frm_name){
 

             var form_data = new FormData(document.getElementById(frm_name));
             form_data.append('action','savedetails1');
             $.ajax({
                url:"ajax/ajax_employee_convert.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,                
                dataType:"html",
                success:function(data){
                 console.log(data);
                 //window.location.reload();
                }
            });


 
}

//selected Branch

//
function showboard(val){
 
$("#load_page").show();
            
             $.ajax({
                url:"ajax/ajax_employee_convert_process.php",
                type: "POST",
                data: {
                  action:'sel_branch',
                  val:val
              },
                           
                dataType:"html",
                success:function(data){
                 console.log(data);
                 $('#sel_board').html(data);
                 $("#load_page").fadeOut('slow');
                 //window.location.reload();
                }
            });


 
}

//search by int number
function selectorder(val){
 var branch=$('#select_branch').val();
$("#load_page").show();
            
             $.ajax({
                url:"ajax/ajax_employee_convert_process.php",
                type: "POST",
                data: {
                  action:'sel_intnumb',
                  val:val,
                  branch:branch
              },
                           
                dataType:"html",
                success:function(data){
                 console.log(data);
                 $('#sel_board').html(data);
                 $("#load_page").fadeOut('slow');
                 //window.location.reload();
                }
            });


 
}


function reject_details(frm_name){
  

             var form_data = new FormData(document.getElementById(frm_name));
             form_data.append('action','rejectdetails');
             $.ajax({
                url:"ajax/ajax_employee_convert.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,                
                dataType:"html",
                success:function(data){
                 console.log(data);
                 window.location.reload();
                }
            });



}


function sksir_approve(frm_name){
  

             var form_data = new FormData(document.getElementById(frm_name));
             form_data.append('action','sksirapprove');
             $.ajax({
                url:"ajax/ajax_employee_convert.php",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                async:true,                
                dataType:"html",
                success:function(data){
                 console.log(data);
                 window.location.reload();
                }
            });



}

function check_valid(val){
//alert("entered");
  var value=val.value;
  console.log(value);
  var id=val.id;
  if(value!=""){
      $('#'+id).css('border','1px solid #ccc');
  }


}

function check_len(min,max,val,idd,id){
//alert("entered");
  var charLength = val.length;
        if(charLength < min){
            $('#'+id).text('Length is short, minimum '+min+' required.');
             $('#'+idd).css('border','1px solid red');
             
        }else if(charLength > max){
            $('#'+id).text('Length is not valid, maximum '+max+' allowed.');
            $('#'+idd).css('border','1px solid red');
           
            //$(this).val(char.substring(0, maxLength));
        }else{

          $('#'+idd).css('border','1px solid #ccc');
          $('#'+id).text('');
         
        }


}

function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 
    && (charCode < 48 || charCode > 57))
     return false;

    return true;
  }
function openproces(intno,intyear,result){

      $('#load_page').show();
  var flag=1;

  if(flag==1){
  $.ajax({
                url:"ajax/ajax_employee_convert_process.php",
                type: "POST",
                data: {
                  action:'showprocess',
                 intnum:intno,
                 intyear:intyear},
                
                dataType:"html",
                success:function(data){
                  //alert("hai");
                   $('#load_page').hide();
                 console.log(data);
                  $('#modal-bodyshowProcess').html(data);
                   var src = "data:image/jpeg;base64,";
                  src += result;
                  var newImage = document.createElement('img');
                  if(result!=="")
                  newImage.src = src;
                  else
                  newImage.src = "images/customers.png";
                  newImage.height = "100";
                  newImage.width = "100";
                  newImage.className="profilepic";
                  document.querySelector('#my-canvas').innerHTML = newImage.outerHTML;

                  $('#modal-bodyshowProcess').modal();


                 
                        
                  //  $('[data-toggle="tooltip"]').tooltip({
                  //     trigger : 'hover'
                  // });    
                   //location.reload();
                   //window.location.reload();


                    $('#dateofjoin').Zebra_DatePicker({
                     // direction:false, // 1,
                      //format: 'M-Y',
                               // pair: $('#datepicker-example4')
                               
                               format: 'd-m-Y',
                              direction: ['<?=$minusseven?>', '<?=$plusseven?>']
                              //direction: ['<?=date("d",strtotime("-7 days"))?>-<?=date("m-Y")?>', '<?=date('d',strtotime("+7 days"))?>-<?=date("m-Y")?>']
                              });
                   auto_complete1();
                }
            });
  }

    }


    //hr
    function openproces1(intno,intyear,result,empsrno){

      $('#load_page').show();
  var flag=1;

  if(flag==1){
  $.ajax({
                url:"ajax/ajax_employee_convert_process.php",
                type: "POST",
                data: {
                 action:'showprocess1',
                 intnum:intno,
                 intyear:intyear,
                 empsrno:empsrno},
                
                dataType:"html",
                success:function(data){
                  //alert("hai");
                   $('#load_page').hide();
                 console.log(data);
                  $('#modal-bodyshowProcess').html(data);
                   var src = "data:image/jpeg;base64,";
                  src += result;
                  var newImage = document.createElement('img');
                 if(result!=="")
                  newImage.src = src;
                 else
                  newImage.src = "images/customers.png";
                  newImage.height = "100";
                  newImage.width = "100";
                  newImage.className="profilepic";
                  document.querySelector('#my-canvas').innerHTML = newImage.outerHTML;

                  $('#modal-bodyshowProcess').modal();

    $("#case-left").children('img').css('opacity','0.3');
      $("#empdetails").mouseenter(function(){
    $("#case-left").css("display","block");

    $("#case-right").css("display", "block");
});
       $("#empdetails").mouseleave(function(){
    $("#case-left").css("display", "none");
    $("#case-right").css("display", "none");
});
                 
                        
                  //  $('[data-toggle="tooltip"]').tooltip({
                  //     trigger : 'hover'
                  // });    
                   //location.reload();
                   //window.location.reload();
                    $('#dateofjoin').Zebra_DatePicker({
                      //direction:false, // 1,
                      //format: 'M-Y',
                               // pair: $('#datepicker-example4')
                               
                               format: 'd-m-Y',
                              direction: ['<?=$plusseven?>', '<?=$minusseven?>']
                              
                              });
                   auto_complete1();
                }
            });
  }

    }
    //GM
    function openproces2(intno,intyear,result){

      $('#load_page').show();
  var flag=1;

  if(flag==1){
  $.ajax({
                url:"ajax/ajax_employee_convert_process.php",
                type: "POST",
                data: {
                  action:'showprocess',
                 intnum:intno,
                 intyear:intyear},
                
                dataType:"html",
                success:function(data){
                  //alert("hai");
                   $('#load_page').hide();
                 console.log(data);
                  $('#modal-bodyshowProcess').html(data);
                   var src = "data:image/jpeg;base64,";
                  src += result;
                  var newImage = document.createElement('img');
                  newImage.src = src;
                  newImage.height = "100";
                  newImage.width = "100";
                  document.querySelector('#my-canvas').innerHTML = newImage.outerHTML;

                  $('#modal-bodyshowProcess').modal();


                 
                        
                  //  $('[data-toggle="tooltip"]').tooltip({
                  //     trigger : 'hover'
                  // });    
                   //location.reload();
                   //window.location.reload();
                    $('#dateofjoin').Zebra_DatePicker({
                     // direction:false, // 1,
                      //format: 'M-Y',
                               // pair: $('#datepicker-example4')
                               
                               format: 'd-m-Y',
                               direction: ['<?=$from?>-Jan', '<?=$currentmonth?>-Dec']
                              });
                   auto_complete1();
                }
            });
  }

    }

    //MD
    function openproces3(intno,intyear,result){

      $('#load_page').show();
  var flag=1;

  if(flag==1){
  $.ajax({
                url:"ajax/ajax_employee_convert_process.php",
                type: "POST",
                data: {
                  action:'showprocess',
                 intnum:intno,
                 intyear:intyear},
                
                dataType:"html",
                success:function(data){
                  //alert("hai");
                   $('#load_page').hide();
                 console.log(data);
                  $('#modal-bodyshowProcess').html(data);
                   var src = "data:image/jpeg;base64,";
                  src += result;
                  var newImage = document.createElement('img');
                  newImage.src = src;
                  newImage.height = "100";
                  newImage.width = "100";
                  document.querySelector('#my-canvas').innerHTML = newImage.outerHTML;

                  $('#modal-bodyshowProcess').modal();


                 
                        
                  //  $('[data-toggle="tooltip"]').tooltip({
                  //     trigger : 'hover'
                  // });    
                   //location.reload();
                   //window.location.reload();
                    $('#dateofjoin').Zebra_DatePicker({
                     // direction:false, // 1,
                      //format: 'M-Y',
                               // pair: $('#datepicker-example4')
                               
                               format: 'd-m-Y',
                               direction: ['<?=$from?>-Jan', '<?=$currentmonth?>-Dec']
                              });
                   auto_complete1();
                }
            });
  }

    }
     function auto_complete1(){
      $('.auto_complete').each(function(){
         var brncode=$(this).attr("rel");
        console.log("asfasdfafda    "+brncode);
        $('#load_page').fadeIn('fast');
            $(this).autocomplete({

              source: function( request, response ) {

                
                $.ajax({
                  url : 'ajax/ajax_employee_details.php',
                  dataType: "json",
                  
                  data: {
                     name_startsWith: request.term,
                     branchcode:brncode,
                     // topcr: $('#slt_topocore').val(),
                     // subcr: $('#slt_subcore').val(),
                     type: 'employee_convert'
                  },
                  success: function( data ) {
                    $('#load_page').fadeOut('fast');
                    if(data == 'No User Available in this Top core and Sub Core') {
                      $('#txt_workintiator').val('');
                      var ALERT_TITLE = "Message";
                      var ALERTMSG = "No User Available in this Top core. Kindly Change this!!";
                      createCustomAlert(ALERTMSG, ALERT_TITLE);
                    } else {
                      response( $.map( data, function( item ) {
                        return {
                          label: item,
                          value: item
                        }
                      }));
                    }
                  }
                });
              },
              change: function(event,ui)
              { if (ui.item == null) 
              {
              $(this).val('');
              $(this).focus(); 
              } 
              },
              autoFocus: true,
              minLength: 2
            });
          });
      $('#load_page').fadeOut('fast');
     }

function movenext(){
  $("#case-left").children('img').css('opacity','1');
    var id=$('.nav-tabs li.active').attr('id');
    var page=id.split('_')[1];
    var next=parseInt(page)+1;
    console.log(next);
    if(page==3){
      $('#case-right').children('img').css('opacity','0.3');
      $('#'+id).removeClass('active');
      $('#tab_4').addClass('active');    
      $('.page4').addClass('active');
      $('.page3').removeClass('active');
      }
      else if(page<3 && page>=1){

        $('#'+id).removeClass('active');
        $('.page'+page).removeClass('active');
        $('.page'+next).addClass("active");
         $('#tab_'+next).addClass('active');
              }
}
function moveprev(){
$('#case-right').children('img').css('opacity','1');
var id=$('.nav-tabs li.active').attr('id');
    var page=id.split('_')[1];
    var prev=page-1;
    console.log(page);
    if(page==2){
     $("#case-left").children('img').css('opacity','0.3');
      $('.nav-tabs li.active').removeClass('active');
      $('#tab_1').addClass('active');    
      $('.page1').addClass('active');
      $('.page2').removeClass('active');
      }
      else if(page>2 && page<=4){
        $('.nav-tabs li.active').removeClass('active');
        $('.page'+page).removeClass('active');
        $('.page'+prev).addClass('active');
         $('#tab_'+prev).addClass('active');
              }
}


function addrow(val)
 {

$('#iduploadspan').text('');

if(val=='1'){
  var name='AADHAAR';
  var name1='aadhaarcard';
  var value=$('#aadhaar').val();
} else if(val=='2'){
   var name='BANK';
   var name1='bankdet';
   var value=$('#accno').val();
}
else if(val=='3'){
  var name='PAN';
  var name1='pancard';
  var value=$('#pan').val();
}
var intnumb=$('#intnumb').val();
var intyear=$('#intyear').val();
$('#idupload option[value="'+val+'"]').attr('disabled','disabled');


$(".loader").show();

 $('#showdetails').css('display','block');
  $('#iddetails tr:last').after('<tr id="dettr_'+val+'">'+
    
    '<td><input class="form-control" type="text" readonly name="intnum'+val+'" id="intnum'+val+'" value="'+intnumb+'"></td>'+
    '<td><input class="form-control" type="text" readonly name="intyear'+val+'" id="intyear'+val+'" value="'+intyear+'"></td>'+
    '<td><input class="form-control" type="text" readonly name="iddetail'+val+'" id="iddetail'+val+'" value="'+name+'"></td>'+
    '<td><input class="form-control" type="text" readonly name="idnum'+val+'" id="idnum'+val+'"  value="'+value+'"></td>'+
    '<td><input class="form-control reqd" type="file"  name="'+name1+'" accept="image/jpg,image/jpeg" onchange="ValidateFileUpload('+val+')" ></td>'+
    '<td><input class="btn btn-warning" type="button"  name="trremove[]" id="trremove" onclick="removetr('+val+')" value="Remove"></td>'+
    '</tr>');

  $('input[name^="'+name1+'"]').rules('add', {
        required: true,
        accept: "image/jpeg, image/jpg"
    });
  $('#idupload').val('0');
  $(".loader").fadeOut("slow");
  

}
  
function removetr(id)
{
$('#dettr_'+id).remove();
$('#idupload option[value="'+id+'"]').attr('disabled',false);
$('#idupload').val('0');
var trid = $('#iddetails tr').length;
if(trid == 1)
{
$('#showdetails').css('display','none');
}
}

function assign_aadhaar(val){
$('#idnum1').val(val);

}
function assign_bank(val){
$('#idnum2').val(val);
  
}
function assign_pan(val){

  $('#idnum3').val(val);
}
  </script> 
    
    <script type="text/javascript" src="js/zebra_datepicker.js"></script>

        <script type="text/javascript">
 $('#dateofjoin').Zebra_DatePicker({
//direction:false, // 1,
//format: 'M-Y',
         // pair: $('#datepicker-example4')
         
         format: 'd-m-Y',
         direction: ['<?=$plusseven?>', '<?=$minusseven?>']
        
        });</script>
</body></html>