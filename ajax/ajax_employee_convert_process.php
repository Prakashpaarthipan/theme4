<?php 
session_start();
include_once('../lib/config.php');
include_once('../lib/function_connect.php');
include_once('../general_functions.php');
//echo $_SESSION['tcs_empsrno'];

extract($_REQUEST);
//echo $empsrno;
error_reporting(E_ALL);
$currentdate1 = strtoupper(date('d-M-Y h:i:s A'));
$current_yr = select_query_json("Select Poryear From Codeinc", "Centra", 'TCS'); 
$ftp = ftp_connect($ftp_server);
$login = ftp_login($ftp, $ftp_user_name,$ftp_user_pass);


if($_REQUEST['action']=='sel_branch'){  ?>
  <div class="list_view push-up-12" id='id_monitor_board'>
                        <?  
                        if($val=='all')
                        {
                        $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='1801' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      }
                      else
                      {

                         $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='1801' and intv.sec_brncode='".$val."' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      }
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                   VERIFY
                                   <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql);?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                                $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno=1801", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>')">
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

if($val=='all'){
 $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='-55641' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
}
else
{
  $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='-55641' and intv.sec_brncode='".$val."' and  to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
}
                      
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
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces1('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>','-55641')">
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
                            <? 
                            if($val=='all'){


                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='-452' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                           else
                           {
                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='-452' and intv.sec_brncode='".$val."' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                      
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
                            <? 

                              if($val=='all')
                              {

                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='-21344' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                           else
                           {
                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='-21344' and intv.sec_brncode='".$val."' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                      
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
                            <?  

                              if($val=='all')
                              {

                            $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='-20118' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                          }
                          else
                          {
                            $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' and  empsrno='-20118' and intv.sec_brncode='".$val."' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                          }
                      
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
            </div> 



  <?}
else if($_REQUEST['action']=='sel_intnumb'){  ?>
  <div class="list_view push-up-12" id='id_monitor_board'>
                        <?  
                        if($branch=='all' || $branch=='0'){
                          $que="";
                        }else{
                          $que=" and intv.sec_brncode='".$branch."'";
                        }
                        if($val=='')
                        {
                        $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='1801' ".$que." and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      }
                      else
                      {

                         $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N'  and  empsrno='1801' ".$que." and intv.INTNUMB like '%".$val."%' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                      }
                      
                      // print_r($sql);
                            ?>
                    
                            <div class="nonadv_list">
                                <h3 class="text-center">
                                    <span class="pull-left percent"></span> 
                               
                                   VERIFY
                                    <span class="pull-right count red-tooltip" id="count" data-toggle="tooltip" data-placement="top"><?=count($sql);?> </span><br><br>
                                  
                                </h3>
                                 <div class='tasks table'>

                             <?  $sql_process=array(); $intnumb=array();$id=0;
                                 for($i=0;$i<count($sql);$i++)
                                { 
                                    $id+=1;
                                $img=select_query_json("select EMPPHOT from attn_interview_staff where intnumb='".$sql[$i]['INTNUMB']."' and intyear='".$sql[$i]['INTYEAR']."' and deleted='N' and duty_join='N' and empsrno=1801", "Centra", "TEST");
                               ?>
                     
                                 
                                   
                                    <div class='task-item hover-box' id='task_item<?=$id?>'>
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>')">
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

if($val==''){
 $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que."  and  empsrno='-55641' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
}
else
{
 
  $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que." and  empsrno='-55641' and intv.INTNUMB like '%".$val."%' and  to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
}
                      
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
                                       <div class='openprocess' id="order<?=$id?>" onclick="openproces1('<?=$sql[$i]['INTNUMB']?>','<?=$sql[$i]['INTYEAR']?>','<?=$img[0]['EMPPHOT']?>','-55641')">
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
                            <? 
                            if($val==''){


                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que."  and  empsrno='-452' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                           else
                           {
                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que."  and  empsrno='-452' and intv.INTNUMB like '%".$val."%' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                      
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
                            <? 

                              if($val=='')
                              {

                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que." and  empsrno='-21344' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                           else
                           {
                             $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que." and  empsrno='-21344' and intv.INTNUMB like '%".$val."%' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                           }
                      
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
                            <?  

                              if($val=='')
                              {

                            $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que." and  empsrno='-20118' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                          }
                          else
                          {
                            $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, 
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where deleted='N' and duty_join='N' ".$que." and empsrno='-20118' and intv.INTNUMB like '%".$val."%' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");
                          }
                      
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
            </div> 



  <?}
else if($_REQUEST['action'] == 'showprocess') { 

 $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.APPSRNO,intv.BNKCODE,intv.EMPPHOT,intv.ACCNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, (select ctyname from city where ctycode=intv.PERCITY) percityname, (select ctyname from city where ctycode=intv.PRECITY) precityname,
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch, (select commode from branch where brncode=intv.sec_brncode) com_mode, intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,
                          intv.FATHER_NAME
                           from attn_interview_staff intv where intv.INTNUMB='".$intnum."' and intv.INTYEAR='".$intyear."'  and deleted='N' and duty_join='N' and   empsrno='1801' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");




        $path = "ATTN_INTERVIEW/".$intyear."-".$intnum."/"; //the path where the file is located

        $aadhaarfile = $intyear.'-'.$intnum.'STAFF_ID_AADHAR.jpg'; //the file you are looking for
        $bankfile = $intyear.'-'.$intnum.'STAFF_ID_BANK.jpg';
        $panfile = $intyear.'-'.$intnum.'STAFF_ID_PAN.jpg';

        $check_file_aadhar = $path.$aadhaarfile; //combine string for easy use
        $check_file_bank = $path.$bankfile;
        $check_file_pan = $path.$panfile;

        $contents_on_server = ftp_nlist($ftp, $path); //Returns an array of filenames from the specified directory on success or FALSE on error. 

// Test if file is in the ftp_nlist array
        if (in_array($check_file_aadhar, $contents_on_server)) 
        {
            $adhar='1';
        }
        else
        {
            $adhar='0';
        }
        if (in_array($check_file_bank, $contents_on_server)) 
        {
            $bank1='1';
        }
        else
        {
            $bank1='0';
        }
        if (in_array($check_file_pan, $contents_on_server)) 
        {
            $pan='1';
        }
        else
        {
             $pan='0';
        }



?>

  <div class="modal-dialog showprocess_dialog" role="document">
    <div class="modal-content showprocess_content">
   <form class="form-horizontal" name='savedetails'  id= 'savedetails' method='post' action=''>
      <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <h3 class="modal-title" id="exampleModalLabel">Interview Details : <?=$sql[0]['INTNUMB']?> / <?=$sql[0]['INTYEAR']?> </h3>
       
      </div>
      <div class="modal-body">
    
          <div class="row">
                                        
                                        <div class="col-md-4" style="padding:0px 10px">

            
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Interview Place :</label>
                                                                                        
                                                                                                          
                                                       <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['INTERVIEW_PLACE']?></label>
                                                                                           
                                                   
                                               
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Interview Date :</label>
                                                                                                      
                                                      <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['INTERVIEWDATE']?></label>
                                                   
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Reporting Date :</label>
                                                                                                    
                                                       <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['REPORTING_DATE']?></label>
                                                   
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Name :</label>
                                                                                                     
                                                       <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['EMPNAME']?></label>
                                                   
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Gender :</label>
                                                                                                     
                                                      <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['GENDER']?></label>
                                                   
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Selection Branch :</label>
                                                                                                    
                                                       <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['SELECTION_BRANCH']?></label>
                                                   
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Section :</label>
                                                                                                      
                                                       <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['SELECTED_SECTION']?></label>
                                                   
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Designation :</label>
                                                                                                    
                                                       <label class="col-md-6 control-label" style="text-align:left"><?=$sql[0]['SELECTED_DESIGNATION']?></label>
                                                  
                                            </div>
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Address:</label>

                                             </div>  
                                             <div class="form-group">  
                                                <div class="col-md-6 col-xs-12">
                                                  <label>Permanent:</label>
                                                  <div class="input-group">                                                        
                                                       <p><?=$sql[0]['PERADD1']?></p> 
                                                       <p><?=$sql[0]['PERADD2']?></p>
                                                       <p><?=$sql[0]['PERADD3']?></p>
                                                      
                                                       <p><?=$sql[0]['PERCITYNAME']?></p>
                                                       <p><?=$sql[0]['PERPINC']?></p>
                                                    </div>   
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                  <label>Temporary:</label>
                                                  <div class="input-group">                                                        
                                                       <p><?=$sql[0]['PREADD1']?></p>
                                                       <p><?=$sql[0]['PREADD2']?></p>
                                                       <p><?=$sql[0]['PREADD3']?></p>
                                                       <p><?=$sql[0]['PRECITYNAME']?></p>
                                                       <p><?=$sql[0]['PREPINC']?></p>
                                                    </div>   
                                                </div>
                                            </div>
                                            
                                            
                                          
                                            
                                       
                                      
                                        
                                    </div>
                             
                                        
                                        <div class="col-md-4" style="border-right: 1px dashed #000;border-left: 1px dashed #000;padding:0px 10px">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date of Join</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="text" class="form-control reqd" style="text-transform:uppercase !important" onblur="check_valid(this)"  name='dateofjoin' id='dateofjoin' value="<?=$sql[0]['REPORTING_DATE']?>"/>
                                                    </div>                                            
                                                  
                                                </div>
                                              
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Gender</label>
                                                <div class="col-md-6">
                                                   <div class="input-group">   
                                                    <select class="form-control reqd" autofocus style="text-transform:uppercase !important" onblur="check_valid(this)" required id="gender"  name="gender">
                                                          <option value='M' <? if($sql[0]['GENDER']=='MALE'){?> selected <?}?>>Male</option>
                                                          <option value='F' <? if($sql[0]['GENDER']=='FEMALE'){?> selected <?}?>>Female</option>
                                                                                                    
                                                         
                                                        
                                                       </select>
                                                     </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                 <div class="col-md-3"> 
                                                  <div class="input-group">
                                                 <select class="form-control reqd" autofocus onblur="check_valid(this)" style="text-transform:uppercase !important" required id="guardian"  name="guardian">
                                                          <option value='F' selected>Father</option>
                                                         
                                                          <option value='G'>Guardian</option>
                                                                                                    
                                                         
                                                        
                                                       </select> </div>
                                                     </div>
                                                <div class="col-md-6">            
                                                  <div class="input-group">                                                        
                                                        <input type="text" class="form-control reqd" style="text-transform:uppercase !important" onblur="check_valid(this)" name='father' id='father' value="<?=$sql[0]['FATHER_NAME']?>"/>
                                                    </div> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Languages Known</label>
                                                <div class="col-md-6">     
                                                  <div class="input-group">                                                        
                                                        <input type="text" class="form-control reqd" name='lang' style="text-transform:uppercase !important" onblur="check_valid(this)"  maxlength="50" id='lang' value=""/>
                                                        <span id="language" style="color:red"></span>
                                                    </div> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Weekly Off</label>
                                                <div class="col-md-6"> 
                                                  <select class="form-control reqd" autofocus tabindex='1' style="text-transform:uppercase !important" onblur="check_valid(this)" required id="weeklyoff"  name="weeklyoff">
                                                          <option value='SUN' selected>SUN</option>
                                                          <option value='MON' selected>MON</option>
                                                          <option value='TUE' selected>TUE</option>
                                                          <option value='WED' selected>WED</option>
                                                          <option value='THU' selected>THU</option>
                                                          <option value='FRI' selected>FRI</option>
                                                          <option value='SAT' selected>SAT</option>                                                
                                                         
                                                        
                                                       </select> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Shift</label>
                                                <div class="col-md-6">
                                                   <? $shift=select_query_json("SELECT SFTNUMB,SFTNAME||' ( '||SFTFRTI||' - '||SFTTOTI||' ) ' shifttime FROM shift order by sftname","Centra","TCS");?>
                                                   <select class="form-control reqd" autofocus tabindex='1' style="text-transform:uppercase !important" onblur="check_valid(this)" required id="shift"  name="shift">
                                                     <?foreach($shift as $key=>$co){?>
                                                          <option value='<?=$co['SFTNUMB']?>'><?= $co['SHIFTTIME']?></option>
                                                         
                                                        <?}?>
                                                          
                                                        
                                                       </select> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Aadhaar No</label>
                                                <div class="col-md-6">            
                                                  <div class="input-group">                                                        
                                                        <input type="text" class="form-control reqd len" style="text-transform:uppercase !important" onblur="check_len(this.minLength,this.maxLength,this.value,this.id,'aadhaarspan');assign_aadhaar(this.value);"  name='aadhaar' minlength="10" maxlength="20" id='aadhaar' value="<?=$sql[0]['ADRNUMB']?>"/>
                                                        
                                                        <span id="aadhaarspan" style="color:red"></span>
                                                    </div> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Pan Number</label>
                                                <div class="col-md-6">            
                                                  <div class="input-group">                                                        
                                                        <input type="text" class="form-control reqd len" style="text-transform:uppercase !important" onblur="check_len(this.minLength,this.maxLength,this.value,this.id,'panspan');assign_pan(this.value)" name='pan' id='pan' minlength="10" maxlength="14" value="<?=$sql[0]['PANNUMB']?>"/>
                                                        <span id="panspan" style="color:red"></span>
                                                    </div> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Bank</label>
                                                <div class="col-md-6"> 
                                                 <? $bank=select_query_json("select level bnkcode,substr(salary_bank_name(level),1,50) bnkname from dual group by level having substr(salary_bank_name(level),1,50)<>'0' connect by level<=50 order by bnkcode","Centra","TCS");?>
                                                  <select class="form-control reqd" autofocus style="text-transform:uppercase !important" tabindex='1' onblur="check_valid(this)" required id="bank"  name="bank">

                                                    <?foreach($bank as $key=>$co){?>
                                                          <option value='<?=$co['BNKCODE']?>' <? if($sql[0]['BNKCODE']==$co['BNKCODE']){?> selected <?}?>><?=$co['BNKNAME']?></option>
                                                         
                                                        <?}?>
                                                       </select>            
                                                 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">IFSC Code</label>
                                                <div class="col-md-6">            
                                                  <div class="input-group">                                                        
                                                        <input type="text" name='ifsc' style="text-transform:uppercase !important" class="form-control reqd len" onblur="check_len(this.minLength,this.maxLength,this.value,this.id,'ifscspan')" minlength="7" maxlength="20" id='ifsc' value=""/>
                                                        <span id="ifscspan" style="color:red"></span>
                                                    </div> 
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">A/C No</label>
                                                <div class="col-md-6">            
                                                  <div class="input-group">                                                        
                                                        <input type="text" name='accno' style="text-transform:uppercase !important" class="form-control reqd len"  onblur="check_len(this.minLength,this.maxLength,this.value,this.id,'accspan');assign_bank(this.value)" onkeypress="return isNumberKey(event)" minlength="6" maxlength="16" id='accno' value="<?=$sql[0]['ACCNUMB']?>"/>
                                                        <span id="accspan" style="color:red"></span>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Expected Salary</label>
                                                <div class="col-md-6">            
                                                  <div class="input-group">                                                        
                                                        <input type="text" name='salary' style="text-transform:uppercase !important" class="form-control reqd len"  onkeypress="return isNumberKey(event)" onblur="check_len(this.minLength,this.maxLength,this.value,this.id,'salspan')" minlength="4" maxlength="7" id='salary' value=""/>
                                                        <span id="salspan" style="color:red"></span>
                                                    </div> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                      
                                       <div class="col-md-4">
                                          <div id="my-canvas" style="text-align:center"></div><br>
                                          <div class="form-group">
                                                   
                                                   <div class="col-md-6">                                                        
                                                        <input type="checkbox" name='nepalstaf' disabled id='nepalstaf' <? if($sql[0]['APPSRNO']=='1') {?> checked <?}?> value="<?=$sql[0]['APPSRNO']?>"/> Nepal Staff
                                                                                          
                                                  <input type="hidden" name='nepalstaff' id='nepalstaff' value="<?=$sql[0]['APPSRNO']?>"/>
                                                </div>

                                          </div>

                                      

                                          <div class="form-group">
                                             <label class="col-md-3 control-label">Reporting To</label>
                                                <div class="col-md-6">                                            
                                                       <div class="input-group">                                                    
                                                        <input type="text" style="text-transform:uppercase !important" class="form-control auto_complete reqd" onblur="check_valid(this)" rel="<?=$sql[0]['SELECTION_BRNCODE']?>"  name='reportingto' maxlength="50" id='reportingto' value=""/>
                                                                                          
                                                  </div>

                                          </div>

                                       </div>  
                                       <div class="form-group">
                                        <label class="col-md-3 control-label">Email - Id</label>
                                               <div class="col-md-6">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="email" required  name='reportingtoemail' onblur="isEmail(this.id,this.value,'reporttospan');" class="form-control reqd" maxlength="50" id='reportingtoemail' value=""/>
                                                        <span id="reporttospan" style="color:red"></span>
                                                    </div>                                            
                                                  
                                                </div>
                                       </div>
                                       <div class="form-group">
                                       <label class="col-md-3 control-label">Reporting CC</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="text" name='reportingcc' style="text-transform:uppercase !important" onblur="check_valid(this)" rel="<?=$sql[0]['SELECTION_BRNCODE']?>"  class="form-control auto_complete reqd" maxlength="50" id='reportingcc' value=""/>
                                                    </div>                                            
                                                  
                                                </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="col-md-3 control-label">Email - Id</label>
                                                <div class="col-md-6">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="email" required name='reportingccemail' onblur="isEmail(this.id,this.value,'reportccspan');" class="form-control reqd" maxlength="50" id='reportingccemail' value=""/>
                                                        <span id="reportccspan" style="color:red"></span>
                                                    </div>                                            
                                                  
                                                </div>
                                         </div>
                                         <div class="form-group">
                                         <label class="col-md-3 control-label">Top Core</label>
                                                <div class="col-md-6 col-xs-12">
                                                   <? // $topcore=select_query_json("SELECT CORNAME,CORCODE FROM EMPCORE_SECTION WHERE DELETED='N' ORDER BY CORNAME","Centra","TCS");?>
                                                     <select class="form-control reqd" autofocus tabindex='1' style="text-transform:uppercase !important"  onblur="check_valid(this)" required id="topcore"  name="topcore">
                                                          <option value='1' selected>S - TEAM</option>
                                                          <option value='2' >MANAGEMENT</option>
                                                          <option value='3'>OPERATION</option>
                                                          <option value='4'>ADMIN</option>
                                                         
                                                        
                                                       </select> 
                                                </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="col-md-3 control-label">Core</label>
                                                 <div class="col-md-6 col-xs-12">
                                                  <? $core=select_query_json("SELECT CORNAME,CORCODE FROM EMPCORE_SECTION WHERE DELETED='N' and CORCODE not in (65) ORDER BY CORNAME","Centra","TCS");?>
                                                  <select class="form-control reqd" autofocus tabindex='1' required id="core"  name="core">

                                                    <?foreach($core as $key=>$co){?>
                                                          <option value='<?=$co['CORCODE']?>'><?=$co['CORNAME']?></option>
                                                         
                                                        <?}?>
                                                       </select> 
                                                </div>

                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Sub Core</label>
                                                <div class="col-md-6 col-xs-12">
                                                  <? $subcor=select_query_json("SELECT SUBNAME,SUBCODE FROM EMPSUBCORE_SECTION WHERE DELETED='N' ORDER BY SUBNAME","Centra","TCS");?>
                                                     <select class="form-control reqd" autofocus onblur="check_valid(this)" tabindex='1' required id="subcore"  name="subcore">
                                                         <?foreach($subcor as $key=>$co){?>
                                                          <option value='<?=$co['SUBCODE']?>'><?=$co['SUBNAME']?></option>
                                                         
                                                        <?}?>
                                                       </select> 
                                                </div>

                                        </div>

                                          <div class="form-group">
                                            <label class="col-md-3 control-label">ID</label>
                                                <div class="col-md-6">
                                                  <div class="input-group">
                                                 <select class="form-control" autofocus onblur="check_valid(this)" onchange="addrow(this.value)" required id="idupload"  name="idupload">
                                                          <option value='0' selected>Choose ID</option>
                                                          <option value='1' <?if($adhar=='1'){?> disabled <?}?>>AADHAAR</option>
                                                          <option value='2' <?if($bank1=='1'){?> disabled <?}?>>BANK</option>                                                         
                                                          <option value='3' <?if($pan=='1'){?> disabled <?}?>>PAN</option>
                                                                                                    
                                                         
                                                        
                                                       </select>
                                                       <span id="iduploadspan" style="color:red"></span> </div>
                                                     </div>
                                                            
                                                 <!--  <div class="input-group">                                                        
                                                        <input type="file" class="form-control" onblur="check_valid(this)" name='upload_file' accept="image/jpeg,image/png,application/pdf,image/jpg" id='upload_file' value=""/>
                                                    </div>  -->
                                               
                                            </div>
                                  
                             </div>
                           </div>
                               <input type="hidden" name="intnumb" id="intnumb" value="<?=$sql[0]['INTNUMB']?>" />
                               <input type="hidden" name="intyear" id="intyear" value="<?=$sql[0]['INTYEAR']?>" />
                                <input type="hidden" name="commode" id="commode" value="<?=$sql[0]['COM_MODE']?>" />
                                
                        
               <hr>
<div class="row">
               <div id="showdetails" <? if($adhar=='1' || $bank1=='1' || $pan=='1'){?> style="display: block;" <?} else {?> style="display: none;" <?}?>>
                            <table class="table" id="iddetails">
                              <tr class="trhead">
                               
                                <td>Int No</td>
                                <td>Int Year</td>
                                <td>ID Name</td>
                                <td>ID No</td>
                                <td>Image</td>
                                <td></td>
                              </tr>
                              <? if($adhar=='1'){ ?>


                              <tr id='dettr_1'>

                                <td><input class="form-control" type="text" readonly name="intnum1" id="intnum1" value="<?=$intnum?>"></td>
                                <td><input class="form-control" type="text" readonly name="intyear1" id="intyear1" value="<?=$intyear?>"></td>
                                <td><input class="form-control" type="text" readonly name="iddetail1" id="iddetail1" value="AADHAAR"></td>
                                <td><input class="form-control" type="text" readonly name="idnum1" id="idnum1"  value="<?=$sql[0]['ADRNUMB']?>"></td>
                                <td><a href="../ftp_image_view.php?pic=<?=$aadhaarfile?>&path=<?=$path?>" target="_blank"><img style="max-height:100px;max-width:100px" src="../ftp_image_view.php?pic=<?=$aadhaarfile?>&path=<?=$path?>"></a></td>
                                <td></td>
                                



                              </tr>
                            <? } else if($bank1=='1'){?>
                              <tr id='dettr_2'>
                                <td><input class="form-control" type="text" readonly name="intnum2" id="intnum2" value="<?=$intnum?>"></td>
                                <td><input class="form-control" type="text" readonly name="intyear2" id="intyear2" value="<?=$intyear?>"></td>
                                <td><input class="form-control" type="text" readonly name="iddetail2" id="iddetail2" value="BANK"></td>
                                <td><input class="form-control" type="text" readonly name="idnum1" id="idnum1"  value="<?=$sql[0]['ACCNUMB']?>"></td>
                                <td><a href="../ftp_image_view.php?pic=<?=$bankfile?>&path=<?=$path?>" target="_blank"><img style="max-height:100px;max-width:100px" src="../ftp_image_view.php?pic=<?=$bankfile?>&path=<?=$path?>"></a></td>
                                <td></td>
                                


                              </tr>
                               <? } else if($pan=='1'){?>
                                <tr id='dettr_3'>
                                <td><input class="form-control" type="text" readonly name="intnum3" id="intnum3" value="<?=$intnum?>"></td>
                                <td><input class="form-control" type="text" readonly name="intyear3" id="intyear3" value="<?=$intyear?>"></td>
                                <td><input class="form-control" type="text" readonly name="iddetail3" id="iddetail3" value="BANK"></td>
                                <td><input class="form-control" type="text" readonly name="idnum1" id="idnum1"  value="<?=$sql[0]['PANNUMB']?>"></td>
                                <td><a href="../ftp_image_view.php?pic=<?=$panfile?>&path=<?=$path?>" target="_blank"><img style="max-height:100px;max-width:100px" src="../ftp_image_view.php?pic=<?=$panfile?>&path=<?=$path?>"></a></td>
                                <td></td>
                                 
                                </tr>
                                <?}?>
                            </table>
  
</div>

 </div>                       <!--  <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Reporting To</label>
                                                <div class="col-md-3">                                            
                                                       <div class="input-group">                                                    
                                                        <input type="text" class="form-control auto_complete" name='reportingto' max-length='50' id='reportingto' value=""/>
                                                                                          
                                                  </div>
                                                </div>
                                                <label class="col-md-3 control-label">Top Core</label>
                                                <div class="col-md-3 col-xs-12">
                                                   <? // $topcore=select_query_json("SELECT CORNAME,CORCODE FROM EMPCORE_SECTION WHERE DELETED='N' ORDER BY CORNAME","Centra","TCS");?>
                                                     <select class="form-control reqd" autofocus tabindex='1' required id="topcore"  name="topcore">
                                                          <option value='S - TEAM' selected>S - TEAM</option>
                                                          <option value='MANAGEMENT' >MANAGEMENT</option>
                                                          <option value='OPERATION'>OPERATION</option>
                                                          <option value='ADMIN'>ADMIN</option>
                                                         
                                                        
                                                       </select> 
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Email - Id</label>
                                               <div class="col-md-3">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="email" required name='reportingto' class="form-control" max-length='50' id='reportingto' value=""/>
                                                    </div>                                            
                                                  
                                                </div>
                                                 <label class="col-md-3 control-label">Core</label>
                                                 <div class="col-md-3 col-xs-12">
                                                  <? $core=select_query_json("SELECT CORNAME,CORCODE FROM EMPCORE_SECTION WHERE DELETED='N' and CORCODE not in (65) ORDER BY CORNAME","Centra","TCS");?>
                                                  <select class="form-control reqd" autofocus tabindex='1' required id="core"  name="core">

                                                    <?foreach($core as $key=>$co){?>
                                                          <option value='<?=$co['CORCODE']?>'><?=$co['CORNAME']?></option>
                                                         
                                                        <?}?>
                                                       </select> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">    
                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Reporting CC</label>
                                                <div class="col-md-3">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="text" name='reportingto' class="form-control auto_complete" max-length='50' id='reportingto' value=""/>
                                                    </div>                                            
                                                  
                                                </div>
                                                <label class="col-md-3 control-label">Sub Core</label>
                                                <div class="col-md-3 col-xs-12">
                                                  <? $subcore=select_query_json("SELECT SUBNAME,SUBCODE FROM EMPSUBCORE_SECTION WHERE DELETED='N' ORDER BY SUBNAME","Centra","TCS");?>
                                                     <select class="form-control reqd" autofocus tabindex='1' required id="topcore"  name="topcore">
                                                         <?foreach($subcore as $key=>$co){?>
                                                          <option value='<?=$co['SUBCODE']?>'><?=$co['SUBNAME']?></option>
                                                         
                                                        <?}?>
                                                       </select> 
                                                </div>
                                            </div>

                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Email - Id</label>
                                                <div class="col-md-3">                                            
                                                    <div class="input-group">                                                        
                                                        <input type="email" required name='reportingemail' class="form-control" max-length='50' id='reportingemail' value=""/>
                                                    </div>                                            
                                                  
                                                </div>
                                               
                                            </div>
                                             
                                            
                                        </div>
                                      
                                        
                                    </div> -->
                                    <br>

               <div class="form-group">
                    
                   <div class="col-md-12">  
                             <center>  <button type="button" class='btn btn-sm btn-success showprocess_btn' <?if($_SESSION['tcs_empsrno']!='1801'){?> disabled <?}?> data-toggle="tooltip" data-placement="top" data-original-title="VERIFY" onclick="save_details('savedetails')"><i class='fa fa-paper-plane' >&nbsp; VERIFY</i></button>    <button type="button" class='btn btn-sm btn-danger showprocess_btn' <?if($_SESSION['tcs_empsrno']!='1801'){?> disabled <?}?>  data-toggle="tooltip" data-placement="top" data-original-title="REJECT" onclick="reject_details('savedetails')"><i class='fa fa-paper-plane' >&nbsp; REJECT</i></button></center> 
                                              
                  </div>
                                   </div>
                           
      </div>
      
       
      
     </form>
   </div>
 </div>
    
    
<? }
else if($_REQUEST['action'] == 'showprocess1') { 

 $sql=select_query_json("select intv.INTYEAR,intv.INTNUMB,intv.APPSRNO,intv.BNKCODE,intv.EMPPHOT,intv.ACCNUMB,intv.intplace,(select ctyname from city where ctycode=intv.intplace) interview_place, to_char(intv.INTDATE,'dd-MM-yyyy') interviewdate, (select ctyname from city where ctycode=intv.PERCITY) percityname, (select ctyname from city where ctycode=intv.PRECITY) precityname,
                          to_char(intv.APPDATE,'dd-MM-yyyy') reporting_date,
                          intv.empname,decode(intv.EMPLSEX,'M','MALE','F','FEMALE') gender,
                          intv.ESECODE,decode(intv.paycompany,1,(select esename from empsection where esecode=intv.ESECODE),(select esename from new_empsection where esecode=intv.ESECODE)) selected_section,
                          intv.desCODE,decode(intv.paycompany,1,(select desname from designation where descode=intv.desCODE),(select desname from new_designation where descode=intv.desCODE)) selected_designation,
                          intv.sec_brncode selection_brncode, (select brnname from branch where brncode=intv.sec_brncode) selection_branch,(select relname from religion where relcode=intv.emprelg) reli,intv.PAYCOMPANY,intv.empsrno,intv.duty_join,intv.ADRNUMB,intv.PANNUMB,
                          intv.PERADD1,intv.PERADD2,intv.PERADD3,intv.PERCITY,intv.PERPINC, intv.PREADD1 ,intv.PREADD2,intv.PREADD3,intv.PRECITY,intv.PREPINC,intv.EMPPHON,intv.EMPMOBL,intv.BLOODGROUP,to_char(intv.EMPLDOB,'dd-MM-yyyy') dob,to_char(intv.EMPADOB,'dd-MM-yyyy') adob,intv.pre_exp,intv.nof_yrs,intv.exp_field,intv.exp_org,intv.job_desc,intv.lea_reason,intv.basic_earned,
                          intv.FATHER_NAME,intv.MARSTAT,intv.EMPREMA,intv.EMPRELG,intv.EMER_PHONE,intv.EDUQUAL,intv.TECQUAL,intv.EMPLSEX,intv.EMPSRNO
                           from attn_interview_staff intv where intv.INTNUMB='".$intnum."' and intv.INTYEAR='".$intyear."'  and deleted='N' and duty_join='N' and empsrno='".$empsrno."' and to_number(to_char(intv.ADDDATE,'yyyyMM'))>201810 order by intv.INTNUMB asc", "Centra", "TEST");


    $sq=select_query_json("select emp.*,to_char(emp.EMPDOJ,'dd-MM-yyyy') EMPDOJ1,(select BNKNAME from bank where BNKCODE=emp.BNKCODE) BNKNAM,(select EMPCODE||' - '||EMPNAME from employee_office where empcode=emp.RPRTTO) REPORTTO,(select EMPCODE||' - '||EMPNAME from employee_office where empcode=emp.RPRTCC) REPORTCC,(SELECT SFTNAME||' ( '||SFTFRTI||' - '||SFTTOTI||' ) ' shifttime FROM shift where sftnumb=emp.SHIFT) sfttime from employee_convert_details emp where emp.intnumb='".$intnum."' and emp.intyear='".$intyear."' and deleted='N'","Centra","TEST");

        $path = "ATTN_INTERVIEW/".$intyear."-".$intnum."/"; //the path where the file is located

        $aadhaarfile = $intyear.'-'.$intnum.'STAFF_ID_AADHAR.jpg'; //the file you are looking for
        $bankfile = $intyear.'-'.$intnum.'STAFF_ID_BANK.jpg';
        $panfile = $intyear.'-'.$intnum.'STAFF_ID_PAN.jpg';

        $check_file_aadhar = $path.$aadhaarfile; //combine string for easy use
        $check_file_bank = $path.$bankfile;
        $check_file_pan = $path.$panfile;

        $contents_on_server = ftp_nlist($ftp, $path); //Returns an array of filenames from the specified directory on success or FALSE on error. 

// Test if file is in the ftp_nlist array
        if (in_array($check_file_aadhar, $contents_on_server)) 
        {
            $adhar='1';
        }
        else
        {
            $adhar='0';
        }
        if (in_array($check_file_bank, $contents_on_server)) 
        {
            $bank1='1';
        }
        else
        {
            $bank1='0';
        }
        if (in_array($check_file_pan, $contents_on_server)) 
        {
            $pan='1';
        }
        else
        {
             $pan='0';
        }



?>

  <div class="modal-dialog showprocess_dialog1" role="document" style="width:780px !important;">
    <div class="modal-content showprocess_content1">
 
      <div class="modal-header" style="margin-bottom: 10px;height:5%">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <h3 class="modal-title" id="exampleModalLabel">Interview Details : <?=$sql[0]['INTNUMB']?> / <?=$sql[0]['INTYEAR']?> </h3>
       
      </div>
      <div class="modal-body" id="empdetails" style="height:90%">
        <div id="case-left" style="display:none;cursor:pointer;" onclick="moveprev()">
          <img style="max-width:30px;max-height:30px" src="images/left.png"/>
        </div>
        <div id="case-right" style="display:none;cursor:pointer;" onclick="movenext()">
           <img style="max-width:30px;max-height:30px" src="images/right.png"/>
        </div>
         <form name="savedetails1" id="savedetails1" action="" method="post">
         <div class="row" style="display:none">
              <div class="nav-tabs-custom" style="padding: 10px; margin-top: 10px;">
              <ul class="nav nav-tabs">
                <li class="active" id = "tab_1"><a href="#emp_personal"  data-toggle="tab" style="padding: 10px;">Page 1</a></li>
                  <li id="tab_2"><a href="#emp_employment" data-toggle="tab" style="padding: 10px;">Page 2</a></li>

                  <li id="tab_3"><a href="#emp_office"  data-toggle="tab" style="padding: 10px;">Page 3</a></li>
                   <li id="tab_4"><a href="#emp_final"  data-toggle="tab" style="padding: 10px;">Page 4</a></li>
                </ul>

              </div>
        </div>
         <div class="tab-content">
                <div class="tab-pane active page1" id='emp_personal'>
                    <div class="row" style="border-bottom:1px solid #000;padding-bottom:20px; ">
                              <div class="col-md-8">
                                 <div style="clear: both;"></div>
                                 <div class="col-md-12" style="padding: 10px 10px;"></div>
                                 <div class="row">
                                  <div class="form-group">
                              
                                <label class="col-md-3 control-label">Designation <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['SELECTED_DESIGNATION']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                                  <div class="form-group">
                              
                                <label class="col-md-3 control-label">Section <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['SELECTED_SECTION']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                                  <div class="form-group">
                              
                                <label class="col-md-3 control-label">Branch <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['SELECTION_BRANCH']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                              </div>
                              <div class="col-md-4" style="float:right">
                                <div id="my-canvas" style="text-align:right"></div>
                              </div>
                    </div>
                    <section class="content" style="margin:10px 0px 0px 0px;">
                    <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>PERSONAL DETAILS </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                          <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Applicant Name <span style="float:right">:</span></label>
                              
                               <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['EMPNAME']?> </label>
                               <label class="col-md-3 control-label">Applicant Name (As per Aadhaar Card) <span style="float:right">:</span></label>
                              
                               <label class="col-md-3 control-label" style="color:#002eff"></label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                         
                        <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Gender <span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['GENDER']?> </label>
                              <input type="hidden" name="gender" value="<?=$sql[0]['EMPLSEX']?>"/>

                                <label class="col-md-3 control-label">Blood Group<span style="float:right">:</span></label>
                               <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['BLOODGROUP']?> </label>
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                        <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Date of Birth (Certificate) <span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['DOB']?> </label>
                              
                               
                                <label class="col-md-3 control-label">Date of Birth (Actual) <span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['ADOB']?> </label>
                            
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                         <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Father Name / Guardian <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['FATHER_NAME']?> </label>
                                <input type="hidden" name="guardian" value="<?=$sq[0]['GRDTYP']?>"/>
                                 <input type="hidden" name="father" value="<?=$sql[0]['FATHER_NAME']?>"/>

                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                        
                        <div class="row">
                             <div class="form-group">
                              
                                 <label class="col-md-3 control-label">Marital Status<span style="float:right">:</span></label>
                               <div class="col-md-3">
                                <input type="checkbox" disabled <?if($sql[0]['MARSTAT']=='Y'){?> checked <?}?> value="Y" /> YES  &nbsp;&nbsp;
                                <input type="checkbox" disabled <?if($sql[0]['MARSTAT']=='N'){?> checked <?}?> value="N" /> NO
                                </div>
                               <label class="col-md-3 control-label">Date of Wedding<span style="float:right">:</span></label>
                               <label class="col-md-3 control-label"> </label>
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>


                         <div class="row">
                             <div class="form-group">
                             
                                 <label class="col-md-3 control-label">Native Place<span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['PERCITYNAME']?> </label>
                                
                                 <label class="col-md-3 control-label">Email<span style="float:right">:</span></label>
                               <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['EMPREMA']?> </label>
                             
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                         <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Religion <span style="float:right">:</span></label>
                             
                             
                               <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['RELI']?> </label>
                             
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                         <div class="row">
                             <div class="form-group">
                             
                                 <label class="col-md-3 control-label">Mobile Number<span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['EMPMOBL']?> </label>
                              
                                 <label class="col-md-3 control-label">Emergency No<span style="float:right">:</span></label>
                               <label class="col-md-3 control-label" style="color:#002eff"><?=$sql[0]['EMER_PHONE']?> </label>
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>


                        <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Identification Marks <span style="float:right">:</span></label>
                             
                             
                               <label class="col-md-3 control-label" style="color:#002eff"> </label>
                             
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                      </div>
                    </div>
                
                    <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>ADDRESS FOR COMMUNUCATION </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                        <div class="row">
                             <div class="form-group">
                              <div class="col-md-6">
                                <label class="control-label" style="font-size:16px;font-weight:bold">Present Address: </label>
                                 <div class="input-group">                                                        
                                   <p><?=$sql[0]['PREADD1']?></p>
                                   <p><?=$sql[0]['PREADD2']?></p>
                                   <p><?=$sql[0]['PREADD3']?></p>
                                   <p><?=$sql[0]['PRECITYNAME'].' - '.$sql[0]['PREPINC']?></p>
                                   
                                 </div>   

                              </div>
                              <div class="col-md-6" >
                              <label class="control-label" style="font-size:16px;font-weight:bold">Permanent Address: </label>
                                 <div class="input-group">                                                        
                                     <p><?=$sql[0]['PERADD1']?></p> 
                                     <p><?=$sql[0]['PERADD2']?></p>
                                     <p><?=$sql[0]['PERADD3']?></p>
                                    
                                     <p><?=$sql[0]['PERCITYNAME'].' - '.$sql[0]['PERPINC']?></p>
                                    
                                  </div>  
                              </div>
                          </div>
                        </div>

                        
                       </div>   
                    </div> 



                     <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>EDUCATIONAL QUALIFICATION </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                          <div class="row">
                            <table class="table table-striped table-bordered table-hover" width="100%">
                              <thead>
                                <tr>
                                <td>Qualification</td>
                                <td>Institute / University</td>
                                <td>Year of Passing</td>
                                <td>Percentage / Class</td>
                              </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><?=$sql[0]['EDUQUAL']?></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>



                            </table>



                          </div>
                           <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                        
                      </div>
                    </div>

                 
                  </section>

                </div>



                 <div class="tab-pane page2" id='emp_employment'>
                    
                    <section class="content" style="margin:10px 0px 0px 0px;">
                         <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>FAMILY DETAILS </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                          <div class="row">
                            <table class="table table-striped table-bordered table-hover" width="100%">
                              <thead>
                                <tr>
                                <td>S.No</td>
                                <td>Name</td>
                                <td>Age</td>
                                <td>Relationship</td>
                                <td>Profession</td>
                                <td>Income</td>
                                <td>Phone No</td>
                              </tr>
                              </thead>
                              <tbody>
                                <?if($sq[0]['GRDTYP']=='F'){?>
                                <tr>

                                  <td>1</td>
                                  <td><?=$sql[0]['FATHER_NAME']?></td>
                                  <td></td>
                                  <td>FATHER</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr><?} else{?>
                                  <tr>

                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                  <?}?>
                              </tbody>



                            </table>



                          </div>
                           <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                        
                      </div>
                    </div>
                    <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>EMPLOYMENT HISTORY </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                        <div class="row">
                            <table class="table table-striped table-bordered table-hover" width="100%">
                              <thead>
                                <tr>
                                <td>Particular</td>
                                <td>Organization I</td>
                                <td>Organization II</td>
                                <td>Organization III</td>
                               </tr>
                              </thead>
                              <tbody>
                               <tr>
                                <td>Name of the Company</td>
                                <td><?=$sql[0]['EXP_ORG']?></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Employee ID Number</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Designation</td>
                                <td><?=$sql[0]['JOB_DESC']?></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Experience</td>
                                <td><?=$sql[0]['EXP_FIELD']?></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Overall Experience</td>
                                <td><?=$sql[0]['NOF_YRS']?></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Last Drawn Salary</td>
                                <td><?=$sql[0]['BASIC_EARNED']?></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Reason for Leaving</td>
                                <td><?=$sql[0]['LEA_REASON']?></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>Contact Name (HR / Direct Manager)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                 <tr>
                                <td>Contact Number (Landline / Mobile)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                
                              </tbody>



                            </table>



                          </div>
                           <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                            <table class="table table-striped table-bordered table-hover" width="100%">
                              <thead>
                                <tr>
                                <td>Strength</td>
                                <td>Weakness</td>
                                
                               </tr>
                              </thead>
                              <tbody>
                               <tr>
                                
                                <td></td>
                                <td></td>
                                </tr>
                               
                              </tbody>



                            </table>



                          </div>
                           <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                         </div>
                    
                       </div>

                     <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>LANGUAGES KNOWN </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">

                         <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Languages<span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=strtoupper($sq[0]['EMPLANG'])?> </label>
                                <input type="hidden" name="lang" id="lang" value="<?=strtoupper($sq[0]['EMPLANG'])?>"/>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                       
                      </div>
                    </div>




                    
                  </section>

                </div>

                 <div class="tab-pane page3" id='emp_office'>
                    
                    <section class="content" style="margin:10px 0px 0px 0px;">

                       <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>COST TO THE COMPANY DETAILS </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">

                         <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Previous Salary<span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=strtoupper($sq[0]['BASIC_EARNED'])?> </label>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                          <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Expected Salary<span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=strtoupper($sq[0]['EXPSLRY'])?> </label>
                                 <input type="hidden" name='salary' value="<?=$sq[0]['EXPSLRY']?>"/>
                                  <input type="hidden" name='nepalstaff' id='nepalstaff' value="<?=$sq[0]['NPLSTAT']?>"/>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Expected Date of Joining<span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['EMPDOJ1']?> </label>
                                <input type="hidden" name='dateofjoin1' value="<?=$sq[0]['EMPDOJ1']?>"/>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>



                       
                      </div>
                    </div>



                     <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>MANDATORY DETAILS</b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">

                         <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Aadhaar Number<span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sq[0]['AADHAAR']?> </label>
                                 <input type="hidden" name='aadhaar' value="<?=$sq[0]['AADHAAR']?>"/>
                                 <input type="hidden" name='adrimg' value="<?=$sq[0]['ADRIMG']?>"/>
                              <?if($adhar=='1'){?>
                               <div class="col-md-6" style="padding-bottom:10px"> <a href="../ftp_image_view.php?pic=<?=$aadhaarfile?>&path=<?=$path?>" target="_blank" title="AADHAAR IMAGE"><img style="max-height:75px;max-width:75px;border-radius:5px " src="../ftp_image_view.php?pic=<?=$aadhaarfile?>&path=<?=$path?>"></a></div>
                              <?}?>
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                          <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Pan Number<span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sq[0]['PANNUMB']?> </label>
                                <input type="hidden" name='pan' value="<?=$sq[0]['PANNUMB']?>"/>
                                <input type="hidden" name='panimg' value="<?=$sq[0]['PANIMG']?>"/>
                               <?if($pan=='1'){?>
                               <div class="col-md-6" style="padding-bottom:10px">  <a href="../ftp_image_view.php?pic=<?=$panfile?>&path=<?=$path?>" target="_blank" title="PAN IMAGE"><img style="max-height:100px;max-width:100px" src="../ftp_image_view.php?pic=<?=$panfile?>&path=<?=$path?>"></a></div>
                              <?}?>
                                
                             
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Bank <span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['BNKNAM']?> </label>
                                 <input type="hidden" name='bank' value="<?=$sq[0]['BNKCODE']?>"/>
                                 <input type="hidden" name='bnkimg' value="<?=$sq[0]['BNKIMG']?>"/>

                               
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Bank A/C No<span style="float:right">:</span></label>
                                <label class="col-md-3 control-label" style="color:#002eff"><?=$sq[0]['ACCNO']?> </label>
                                <input type="hidden" name='accno' value="<?=$sq[0]['ACCNO']?>"/>

                              <?if($bank1=='1'){?>
                               <div class="col-md-6" style="padding-bottom:10px"> <a href="../ftp_image_view.php?pic=<?=$bankfile?>&path=<?=$path?>" target="_blank" title="BANK PASSBOOK IMAGE"><img style="max-height:100px;max-width:100px" src="../ftp_image_view.php?pic=<?=$bankfile?>&path=<?=$path?>"></a></div>
                              <?}?>
                                
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Bank IFSC Code<span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['BNKIFSC']?> </label>
                                <input type="hidden" name='ifsc' value="<?=$sq[0]['BNKIFSC']?>"/>
                             
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                          <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">Passport Number<span style="float:right">:</span></label>
                                <label class="col-md-9 control-label" style="color:#002eff"></label>
                                
                             
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>


                       
                      </div>
                    </div>


                    <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>APPOINTMENT </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                          <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Date of joining <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['EMPDOJ1']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Branch / Location <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['SELECTION_BRANCH']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>


                           <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Section / Department <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['SELECTED_SECTION']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                          <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Weekly Off <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['WEEKOFF']?> </label>
                                <input type="hidden" name='weeklyoff' value="<?=$sq[0]['WEEKOFF']?>"/>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Shift <span style="float:right">:</span></label>
                               <? $shift=select_query_json("SELECT SFTNAME||' ( '||SFTFRTI||' - '||SFTTOTI||' ) ' shifttime FROM shift where SFTNUMB='".$sq[0]['SHIFT']."'","Centra","TCS");?>
                                <label class="col-md-9 control-label" style="color:#002eff"><?=$shift[0]['SHIFTTIME']?> </label>
                                <input type="hidden" name='shift' value="<?=$sq[0]['SHIFT']?>"/>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Reporting To<span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['REPORTTO']." (".$sq[0]['RPTMAIL'].")"?> </label>
                                <input type="hidden" name='reportingto' id='reportingto' value="<?=$sq[0]['RPRTTO']?>"/>
                                <input type="hidden" name='reportingtoemail' id='reportingtoemail' value="<?=$sq[0]['RPTMAIL']?>"/>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                          <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Reporting CC<span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sq[0]['REPORTCC']." (".$sq[0]['RPCMAIL'].")"?> </label>
                                <input type="hidden" name='reportingcc' id='reportingcc' value="<?=$sq[0]['RPRTCC']?>"/>
                               <input type="hidden" name='reportingccemail' id='reportingccemail' value="<?=$sq[0]['RPCMAIL']?>"/>
                               <input type="hidden" name='topcore' value="<?=$sq[0]['TOPCORE']?>"/>
                                <input type="hidden" name='core' value="<?=$sq[0]['CORE']?>"/>
                                 <input type="hidden" name='subcore' value="<?=$sq[0]['SUBCORE']?>"/>
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-3 control-label">Designation <span style="float:right">:</span></label>
                              
                               <label class="col-md-9 control-label" style="color:#002eff"><?=$sql[0]['SELECTED_DESIGNATION']?> </label>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           

                      </div>
                    </div>
                    

                    


                  </section>

                </div>
                 <div class="tab-pane page4" id='emp_final'>
                    
                    <section class="content" style="margin:10px 0px 0px 0px;">
                 <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>CORPORATE SOCIAL RESPONSIBILITY (CSR) </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">
                          <div class="row">
                             <div class="form-group">
                              
                                <label class="col-md-6 control-label">Would you like to participate in Our Social Activity? <span style="float:right">:</span></label>
                              
                               <div class="col-md-6">
                                <input type="checkbox" disabled  value="Y" /> YES  &nbsp;&nbsp;
                                <input type="checkbox" disabled  value="N" /> NO   &nbsp;&nbsp;
                                <input type="checkbox" disabled  value="F" /> May be in Future
                                </div>
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                              
                                 <div class="col-md-4">
                                <input type="checkbox" disabled  value="1" /> Blood Donation Camp
                                
                                </div>
                              
                               <div class="col-md-4">
                                <input type="checkbox" disabled  value="2" /> NGO Activities
                                
                                </div>
                                 <div class="col-md-4">
                                <input type="checkbox" disabled  value="3" /> Supporting downtrodden for Education
                                
                                </div>
                                 <div class="col-md-4">
                                <input type="checkbox" disabled  value="4" /> Planting Saplings
                                
                                </div>
                                 <div class="col-md-4">
                                <input type="checkbox" disabled  value="5" /> Supporting Orphans
                                
                                </div>
                                
                              
                          </div>
                        </div>
                          <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
   

                      </div>
                    </div>
                     <div class="box box-primary">
                      <div class="box-header bg-greens ui-sortable-handle" style="background-color: #1D5B69;text-align: center;color: #FFFFFF;
                                    display: block;
                                    padding: 10px;
                                    position: relative;
                                    text-align: center;">
                        <b style='color:#FFF; font-weight:bold; text-transform:uppercase'>COMMENTS </b>
                      </div> 
                    
                       <div class="panel-body" style="font-size:12px !important">

                         <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">HUMAN RESOURCE<span style="float:right">:</span></label>

                                <textarea resize="none" name="hrcmnt" <?if($empsrno==($_SESSION['tcs_empsrno']*-1) && $empsrno=='-55641'){?> style="width:70%;color:#002eff;text-transform:uppercase;"<?}else{?> style="width:70%;color:#002eff;text-transform:uppercase;background-color:#cccccc70;" readonly <?}?> rows="3"><?=$sq[0]['HRCMNT']?></textarea>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">ADMIN GM<span style="float:right">:</span></label>

                                <textarea resize="none" name="gmcmnt" <?if($empsrno==($_SESSION['tcs_empsrno']*-1) && $empsrno=='-452'){?> style="width:70%;color:#002eff;text-transform:uppercase;"<?}else{?> style="width:70%;color:#002eff;text-transform:uppercase;background-color:#cccccc70;" readonly <?}?> rows="3"><?=$sq[0]['GMCMNT']?></textarea>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">SK SIR<span style="float:right">:</span></label>

                                <textarea resize="none" name="skcmnt"<?if($empsrno==($_SESSION['tcs_empsrno']*-1) && $empsrno=='-21344'){?> style="width:70%;color:#002eff;text-transform:uppercase;"<?}else{?> style="width:70%;color:#002eff;text-transform:uppercase;background-color:#cccccc70;" readonly <?}?> rows="3"><?=$sq[0]['SKCMNT']?></textarea>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>

                           <div class="row">
                             <div class="form-group">
                             
                                <label class="col-md-3 control-label">MD SIR<span style="float:right">:</span></label>

                                <textarea resize="none" name="mdcmnt" <?if($empsrno==($_SESSION['tcs_empsrno']*-1) && $empsrno=='-20118'){?> style="width:70%;color:#002eff;text-transform:uppercase;"<?}else{?> style="width:70%;color:#002eff;text-transform:uppercase;background-color:#cccccc70;" readonly <?}?> rows="3"><?=$sq[0]['MDCMNT']?></textarea>
                              
                                
                              
                          </div>
                        </div>
                         <div style="clear: both;"></div>
                          <div class="col-md-12" style="padding: 5px 10px;"></div>
                         
                          <input type="hidden" name="intnumb" id="intnumb" value="<?=$sq[0]['INTNUMB']?>" />
                               <input type="hidden" name="intyear" id="intyear" value="<?=$sq[0]['INTYEAR']?>" />
                               <input type="hidden" name="empserial" id="empserial" value="<?=$sql[0]['EMPSRNO']?>" />


                       
                      </div>
                    </div>
                  </section>
                </div>

        </div>  
        </div>    
         <div class="modal-footer" style="height:5%">
   
       
               <div class="form-group">
                    
                   <div class="col-md-12">  
                             <center>   <?if($sql[0]['EMPSRNO']=='-21344' && (($_SESSION['tcs_empsrno']*-1)=='-21344')){?> <button type="button" class='btn btn-sm btn-success showprocess_btn' data-toggle="tooltip" data-placement="top" data-original-title="APPROVE" onclick="sksir_approve('savedetails1')"><i class='fa fa-paper-plane' >&nbsp; APPROVE</i></button>    <button type="button" class='btn btn-sm btn-danger showprocess_btn' data-toggle="tooltip" data-placement="top" data-original-title="REJECT" onclick="reject_details('savedetails1')"><i class='fa fa-paper-plane' >&nbsp; REJECT</i></button></button>    <button type="button" class='btn btn-sm btn-info showprocess_btn' data-toggle="tooltip" data-placement="top" data-original-title="MOVE TO KS SIR" onclick="save_details1('savedetails1')"><i class='fa fa-paper-plane' >&nbsp; MOVE TO KS SIR</i></button><?} else{?>

                              <button type="button" class='btn btn-sm btn-success showprocess_btn' <?if($empsrno!=($_SESSION['tcs_empsrno']*-1)){?> disabled <?}?> data-toggle="tooltip" data-placement="top" data-original-title="APPROVE" onclick="save_details1('savedetails1')"><i class='fa fa-paper-plane' >&nbsp; APPROVE</i></button>    <button type="button" class='btn btn-sm btn-danger showprocess_btn' <?if($empsrno!=($_SESSION['tcs_empsrno']*-1)){?> disabled <?}?> data-toggle="tooltip" data-placement="top" data-original-title="REJECT" onclick="reject_details('savedetails1')"><i class='fa fa-paper-plane' >&nbsp; REJECT</i></button><?}?>
                             </center> 
                                              
                  </div>
                                   </div>
                                    </form>   

      </div> 
                   
      </div>


</div>


     
    
<? }

?>

 