<?php
session_start();
include_once('../lib/config.php');
include_once('../lib/function_connect.php');
include_once('../general_functions.php');
extract($_REQUEST);
error_reporting(E_ALL);
$currentdate1 = strtoupper(date('d-M-Y h:i:s A'));
$current_yr = select_query_json("Select Poryear From Codeinc", "Centra", 'TCS'); 
$ftp = ftp_connect($ftp_server);
$login = ftp_login($ftp, $ftp_user_name,$ftp_user_pass);

print_r($_REQUEST); 

if($_REQUEST['action']=='savedetails'){
$adhar=0;$bankfld=0;$pan=0;
        $path = "ATTN_INTERVIEW/".$intyear."-".$intnumb."/"; //the path where the file is located

        $aadhaarfile = $intyear.'-'.$intnumb.'STAFF_ID_AADHAR.jpg'; //the file you are looking for
        $bankfile = $intyear.'-'.$intnumb.'STAFF_ID_BANK.jpg';
        $panfile = $intyear.'-'.$intnumb.'STAFF_ID_PAN.jpg';

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
           
            if(isset($_FILES['aadhaarcard']['name'])!=""){
               $adhar='1';
              switch($_FILES['aadhaarcard']['name']) 
                {
                  case 'image/jpeg':
                         $extn1 = 'jpg';
                         break;
                  case 'image/jpg':                 
                        // echo "##";
                        $extn1 = 'jpg';
                        break;
                  default: 
                        $extn1 = 'jpg'; 
                        break;
                 
                }
                
        // $current_yr[0]['PORYEAR'] = '2018-19';
        // $count[0]['ENTNUMB'] = "555";
        $path_parts = pathinfo($t);
       //$q=$current_yr[0]['PORYEAR'].'-'.$count1[0]['ENTNUMB'].'-'.$i.'.'.strtolower($path_parts['extension']);
        $file=$intyear.'-'.$intnumb.'STAFF_ID_AADHAR.'.strtolower($extn1);
        //        
        $tmp_name = $_FILES['aadhaarcard']['tmp_name'];    
      
        
        $a1local_file = "../uploads/employee_convert/".$file;
        move_uploaded_file($tmp_name, $a1local_file);


        $directory = "ATTN_INTERVIEW/".$intyear.'-'.$intnumb.'/';

           
        $server_file = $directory.$file;
        $folder_exists = is_dir($directory);
        if($folder_exists) {

         
          //unlink($a1local_file);

         }
          else {
            if(ftp_mkdir($ftp, $directory)) { 
             
               // unlink($a1local_file);

            } else {


             }
          }
           $upload = ftp_put($ftp,$server_file, $a1local_file, FTP_BINARY); 
           unlink($a1local_file);
        
        
    }




        }
        if (in_array($check_file_bank, $contents_on_server)) 
        {
            $bankfld='1';
        }
        else
        {
            
            if(isset($_FILES['bankdet']['name'])!=""){

              $bankfld='1';
         switch($_FILES['bankdet']['name']) 
                {
                  case 'image/jpeg':
                         $extn1 = 'jpg';
                         break;
                  case 'image/jpg':                 
                        // echo "##";
                        $extn1 = 'jpg';
                        break;
                  default: 
                        $extn1 = 'jpg'; 
                        break;
                 
                }
                
        // $current_yr[0]['PORYEAR'] = '2018-19';
        // $count[0]['ENTNUMB'] = "555";
        $path_parts = pathinfo($t);
       //$q=$current_yr[0]['PORYEAR'].'-'.$count1[0]['ENTNUMB'].'-'.$i.'.'.strtolower($path_parts['extension']);
        $file1=$intyear.'-'.$intnumb.'STAFF_ID_AADHAR.'.strtolower($extn1);
        //        
        $tmp_name1 = $_FILES['bankdet']['tmp_name'];    
      
        
        $a1local_file = "../uploads/employee_convert/".$file1;
        move_uploaded_file($tmp_name1, $a1local_file);


        $directory = "ATTN_INTERVIEW/".$intyear.'-'.$intnumb.'/';

        
            
        $server_file = $directory.$file1;
        $folder_exists = is_dir($directory);
        if($folder_exists) {

         
          //unlink($a1local_file);

         }
          else {
            if(ftp_mkdir($ftp, $directory)) { 
             
               // unlink($a1local_file);

            } else {


             }
          }
           $upload = ftp_put($ftp,$server_file, $a1local_file, FTP_BINARY); 
           unlink($a1local_file);
        
        
    }    

        }
        if (in_array($check_file_pan, $contents_on_server)) 
        {
            $pan='1';
        }
        else
        {
             
             if(isset($_FILES['pancard']['name'])!=""){
              $pan='1';
          switch($_FILES['pancard']['name']) 
                {
                  case 'image/jpeg':
                         $extn1 = 'jpg';
                         break;
                  case 'image/jpg':                 
                        // echo "##";
                        $extn1 = 'jpg';
                        break;
                  default: 
                        $extn1 = 'jpg'; 
                        break;
                 
                }
                
        // $current_yr[0]['PORYEAR'] = '2018-19';
        // $count[0]['ENTNUMB'] = "555";
        $path_parts = pathinfo($t);
       //$q=$current_yr[0]['PORYEAR'].'-'.$count1[0]['ENTNUMB'].'-'.$i.'.'.strtolower($path_parts['extension']);
        $file11=$intyear.'-'.$intnumb.'STAFF_ID_AADHAR.'.strtolower($extn1);
        //        
        $tmp_name11 = $_FILES['pancard']['tmp_name'];    
      
        
        $a1local_file = "../uploads/employee_convert/".$file11;
        move_uploaded_file($tmp_name1, $a1local_file);


        $directory = "ATTN_INTERVIEW/".$intyear.'-'.$intnumb.'/';

        
            
        $server_file = $directory.$file11;
        $folder_exists = is_dir($directory);
        if($folder_exists) {

         
          //unlink($a1local_file);

         }
          else {
            if(ftp_mkdir($ftp, $directory)) { 
             
               // unlink($a1local_file);

            } else {


             }
          }
           $upload = ftp_put($ftp,$server_file, $a1local_file, FTP_BINARY); 
           unlink($a1local_file);
        
        
    }    

        }
 // print_r($_REQUEST);
//bank image

    //pan image

    //bank image

$rto=explode(' - ',$reportingto);
$rcc=explode(' - ',$reportingcc);

$count = select_query_json("select nVL(MAX(ENTSRNO),0)+1 ENTSRNO FROM employee_convert_history", "Centra", 'TEST');
     
  
    $g_table="EMPLOYEE_CONVERT_DETAILS";
    $g_fld=array();
    $g_fld['INTNUMB']=$intnumb;
    $g_fld['INTYEAR']=$intyear;
    $g_fld['EMPDOJ']='dd-MM-yyyy~~'.$dateofjoin;
    $g_fld['GENDER']=$gender;
    $g_fld['GRDTYP']=$guardian;
    $g_fld['GRDVAL']=$father;
    $g_fld['EMPLANG']=$lang;
    $g_fld['WEEKOFF']=$weeklyoff;
    $g_fld['SHIFT']=$shift;
    $g_fld['AADHAAR']=$aadhaar;
    $g_fld['PANNUMB']=$pan;
    $g_fld['BNKNAME']=$bank;
    $g_fld['BNKIFSC']=$ifsc;
    $g_fld['ACCNO']=$accno;
    $g_fld['EXPSLRY']=$salary;
    $g_fld['NPLSTAT']=$nepalstaff;
    $g_fld['RPRTTO']=$rto[0];
    $g_fld['RPTMAIL']=$reportingtoemail;
    $g_fld['RPRTCC']=$rcc[0];
    $g_fld['RPCMAIL']=$reportingccemail;
    $g_fld['TOPCORE']=$topcore;
    $g_fld['SUBCORE']=$subcore;
    $g_fld['CORE']=$core;
    $g_fld['ADDUSER']=$_SESSION['tcs_usrcode'];
    $g_fld['ADDDATE']='dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate1;
    $g_fld['EDTUSER']="";
    $g_fld['EDTDATE']="";
    $g_fld['DELUSER']="";
    $g_fld['DELDATE']='';
    $g_fld['DELETED']="N";
    $g_fld['INTSTAT']='F';
    if($adhar=='1'){
      $g_fld['ADRIMG']=$check_file_aadhar;
    }
    else{
      $g_fld['ADRIMG']="";
    }
    if($pan=='1'){
      $g_fld['PANIMG']=$check_file_pan;
    }
    else{
      $g_fld['PANIMG']="";
    }
    if($bankfld=='1'){
      $g_fld['BNKIMG']=$check_file_bank;
    }else{
      $g_fld['BNKIMG']="";
    }
    $g_fld['BNKCODE']=$bank;
   
    print_r($g_fld);
    echo $g_insert_subject = insert_test_dbquery($g_fld, $g_table);  


    $g_table1="EMPLOYEE_CONVERT_HISTORY";
    $g_fld1=array();
    $g_fld1['ENTSRNO']=$count[0]['ENTSRNO'];
    $g_fld1['INTNUMB']=$intnumb;
    $g_fld1['INTYEAR']=$intyear;   
    $g_fld1['ADDUSER']=$_SESSION['tcs_usrcode'];
    $g_fld1['ADDDATE']='dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate1;
    $g_fld1['EDTUSER']="";
    $g_fld1['EDTDATE']="";
    $g_fld1['DELUSER']="";
    $g_fld1['DELDATE']='';
    $g_fld1['DELETED']="N";   
    
    
    if($commode>0)
    {
    $g_fld1['INTSTAT']='F';
    $g_fld1['REMARKS']='FINISHED';
    $g_fld1['EMPSRNO']='-55641';
   }
   else{
    $g_fld1['INTSTAT']='A';
    $g_fld1['REMARKS']='APPROVED';
   }
   
    print_r($g_fld1);
    echo $g_insert_subject = insert_test_dbquery($g_fld1, $g_table1);  



    


    $g_tab="ATTN_INTERVIEW_STAFF";  
    $up_fld=array();
    if($commode>0)
    {
        $up_fld['EMPSRNO']='-55641';
        $where="INTNUMB='".$intnumb."' and INTYEAR='".$intyear."'";
        $update=update_test_dbquery($up_fld, $g_tab, $where);
    }
    else
    {
      $sql_mailsend = store_procedure_query_json("PROC_EMPLOYEE_AUTO_CONVERT('".$intyear."','".$intnumb."')", 'Centra', 'TEST'); 
    }
    


}

else if($_REQUEST['action']=='rejectdetails'){


$rto=explode(' - ',$reportingto);
$rcc=explode(' - ',$reportingcc);

$count = select_query_json("select nVL(MAX(ENTSRNO),0)+1 ENTSRNO FROM employee_convert_history", "Centra", 'TEST');
     
 
    

    $g_table1="EMPLOYEE_CONVERT_HISTORY";
    $g_fld1=array();
    $g_fld1['ENTSRNO']=$count[0]['ENTSRNO'];
    $g_fld1['INTNUMB']=$intnumb;
    $g_fld1['INTYEAR']=$intyear;    
    $g_fld1['ADDUSER']=$_SESSION['tcs_usrcode'];
    $g_fld1['ADDDATE']='dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate1;
    $g_fld1['EDTUSER']="";
    $g_fld1['EDTDATE']="";
    $g_fld1['DELUSER']="";
    $g_fld1['DELDATE']='';
    $g_fld1['DELETED']="N";    
    $g_fld1['INTSTAT']='R';
    $g_fld1['HRCMNT']=$hrcmnt;
    $g_fld1['GMCMNT']=$gmcmnt;
    $g_fld1['SKCMNT']=$skcmnt;
    $g_fld1['MDCMNT']=$mdcmnt;  
    $g_fld1['REMARKS']='REJECTED';

   
   
    print_r($g_fld1);
    echo $g_insert_subject = insert_test_dbquery($g_fld1, $g_table1);  


    $g_tab="ATTN_INTERVIEW_STAFF";  
    $up_fld=array();
    $up_fld['DUTY_JOIN']='R';
    $where="INTNUMB='".$intnumb."' and INTYEAR='".$intyear."'";    
    echo  $update=update_test_dbquery($up_fld, $g_tab, $where);



}
else if($_REQUEST['action']=='savedetails1'){
print_r($_REQUEST);
$emp= select_query_json("select EMPSRNO FROM attn_interview_staff where intnumb='".$intnumb."' and intyear='".$intyear."'", "Centra", 'TEST');

$rto=explode(' - ',$reportingto);
$rcc=explode(' - ',$reportingcc);

$count = select_query_json("select nVL(MAX(ENTSRNO),0)+1 ENTSRNO FROM employee_convert_history", "Centra", 'TEST');
     
  


    $g_table1="EMPLOYEE_CONVERT_HISTORY";
    $g_fld1=array();
    $g_fld1['ENTSRNO']=$count[0]['ENTSRNO'];
    $g_fld1['INTNUMB']=$intnumb;
    $g_fld1['INTYEAR']=$intyear;    
    $g_fld1['ADDUSER']=$_SESSION['tcs_usrcode'];
    $g_fld1['ADDDATE']='dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate1;
    $g_fld1['EDTUSER']="";
    $g_fld1['EDTDATE']="";
    $g_fld1['DELUSER']="";
    $g_fld1['DELDATE']='';
    $g_fld1['DELETED']="N";    
    $g_fld1['HRCMNT']=$hrcmnt;
    $g_fld1['GMCMNT']=$gmcmnt;
    $g_fld1['SKCMNT']=$skcmnt;
    $g_fld1['MDCMNT']=$mdcmnt; 
    $g_fld1['EMPSRNO']=$empserial; 

    if($empserial=='-20118'){
    $sql_mailsend = store_procedure_query_json("PROC_EMPLOYEE_AUTO_CONVERT('".$intyear."','".$intnumb."')", 'Centra', 'TEST');   
    $g_fld1['INTSTAT']='A';
    $g_fld1['REMARKS']='APPROVED BY KS SIR';
    }
    else{
    $g_fld1['INTSTAT']='F';
    $g_fld1['REMARKS']='FINISHED';
    }
   
   
   
    print_r($g_fld1);
    echo $g_insert_subject = insert_test_dbquery($g_fld1, $g_table1);  


    $g_tab="ATTN_INTERVIEW_STAFF";  
    $up_fld=array();
    if($_SESSION['tcs_empsrno']=='55641'){
         $up_fld['EMPSRNO']='-452';
    }
    else if($_SESSION['tcs_empsrno']=='452')
    {
        $up_fld['EMPSRNO']='-21344'; 
    }
    else if($_SESSION['tcs_empsrno']=='21344')
    {
        $up_fld['EMPSRNO']='-20118';
    }
   
    if($empserial=='-20118'){
      $up_fld['DUTY_JOIN']='Y';
    }
   // $up_fld['EMPSRNO']=$emp[0]['EMPSRNO']-1;
    $where="INTNUMB='".$intnumb."' and INTYEAR='".$intyear."'";
    $update=update_test_dbquery($up_fld, $g_tab, $where);


    $g_tab1="EMPLOYEE_CONVERT_DETAILS";  
    $up_fld1=array();
    $up_fld1['HRCMNT']=$hrcmnt;
    $up_fld1['GMCMNT']=$gmcmnt;
    $up_fld1['SKCMNT']=$skcmnt;
    $up_fld1['MDCMNT']=$mdcmnt;
    $where1="INTNUMB='".$intnumb."' and INTYEAR='".$intyear."'";    
    echo  $update=update_test_dbquery($up_fld1, $g_tab1, $where1);



}
else if($_REQUEST['action']=='sksirapprove'){


$rto=explode(' - ',$reportingto);
$rcc=explode(' - ',$reportingcc);

$count = select_query_json("select nVL(MAX(ENTSRNO),0)+1 ENTSRNO FROM employee_convert_history", "Centra", 'TEST');
     
 
    

    $g_table1="EMPLOYEE_CONVERT_HISTORY";
    $g_fld1=array();
    $g_fld1['ENTSRNO']=$count[0]['ENTSRNO'];
    $g_fld1['INTNUMB']=$intnumb;
    $g_fld1['INTYEAR']=$intyear;    
    $g_fld1['ADDUSER']=$_SESSION['tcs_usrcode'];
    $g_fld1['ADDDATE']='dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate1;
    $g_fld1['EDTUSER']="";
    $g_fld1['EDTDATE']="";
    $g_fld1['DELUSER']="";
    $g_fld1['DELDATE']='';
    $g_fld1['DELETED']="N";    
    $g_fld1['SKCMNT']=$skcmnt;
    $g_fld1['INTSTAT']='A';
    $g_fld1['REMARKS']='APPROVED BY SK SIR';
    $g_fld1['EMPSRNO']=$empserial; 
   
   
    print_r($g_fld1);
    echo $g_insert_subject = insert_test_dbquery($g_fld1, $g_table1);  
      $sql_mailsend = store_procedure_query_json("PROC_EMPLOYEE_AUTO_CONVERT('".$intyear."','".$intnumb."')", 'Centra', 'TEST'); 

    $g_tab="ATTN_INTERVIEW_STAFF";  
    $up_fld=array();
    $up_fld['DUTY_JOIN']='Y';
    $where="INTNUMB='".$intnumb."' and INTYEAR='".$intyear."'";    
    echo  $update=update_test_dbquery($up_fld, $g_tab, $where);


    $g_tab1="EMPLOYEE_CONVERT_DETAILS";  
    $up_fld1=array();
    $up_fld1['SKCMNT']=$skcmnt;
    $where1="INTNUMB='".$intnumb."' and INTYEAR='".$intyear."'";    
    echo  $update=update_test_dbquery($up_fld1, $g_tab1, $where1);


}
?>