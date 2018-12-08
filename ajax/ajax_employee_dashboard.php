<?
session_start();
include_once('../lib/config.php');
include_once('../lib/function_connect.php');
include_once('../lib/general_functions.php');
extract($_REQUEST);

$current_year = select_query_json("Select Poryear From Codeinc", "Centra", 'TCS');
$currentdate = strtoupper(date('d-M-Y h:i:s A'));

 $empcode=$_SESSION['tcs_usrcode'];
$empsrno=$_SESSION['tcs_empsrno'];



if($action =='insert'){
//print_r($element_id);
$element_id1=json_decode($element_id);
 $emp_table="employee_dashboard"; 
 $emp_field = array();
 
 for($i=0;$i<count($element_id1);$i++)
  {
  	 
 	 $max_dsb = select_query_json("Select nvl(Max(DSBSRNO),0)+1 max From employee_dashboard where empsrno = '".$empsrno."'","Centra","TEST");

	 $emp_field['EMPSRNO'] = $empsrno;
	 $emp_field['MENUID '] = $element_id1[$i];
	 $emp_field['DSBSRNO'] = $i+1;//$max_dsb[0]['MAX'];
	 $emp_field['ADDUSER'] = $empcode;  
	 $emp_field['ADDDATE'] = 'dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate; 
	 $emp_field['DELETED'] =  'N';
	 print_r($emp_field);
	 $insert_dashboard = insert_test_dbquery($emp_field,$emp_table);

 }
 
}

if($action == 'update'){
	$element_id1=json_decode($element_id);
	$emp_table='employee_dashboard'; 
	$emp_field_up = array();
	$emp_field_new = array();
	
	for($j=1;$j<=count($element_id1);$j++)
 {
 	 $max_dsb_up = select_query_json("Select MENUID From employee_dashboard where empsrno = '".$empsrno."' and MENUID = '".$element_id1[$j-1]."'","Centra","TEST");
 	
	 //$emp_field_up=['EMPSRNO'] = $empsrno;
	 if(count($max_dsb_up)>0){
	 
	 $where_emp_up = "EMPSRNO = '".$empsrno."' and MENUID = '".$element_id1[$j-1]."'";
	 //$emp_field_up['MENUID '] = $element_id1[$i];
	 $emp_field_up['DSBSRNO'] = $j;
	 $emp_field_up['EDTUSER'] = $empcode;  
	 $emp_field_up['EDTDATE'] = 'dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate; 
	 print_r($emp_field_up);
	 $insert_dashboard_up = update_test_dbquery($emp_field_up,$emp_table,$where_emp_up);
	 }
	 
	 else{
	 	 //$max_dsb_up = select_query_json("Select nvl(Max(DSBSRNO),0)+1 max From employee_dashboard where empsrno = '".$empsrno."'","Centra","TEST");
	 $emp_field_new['EMPSRNO'] = $empsrno;
	 $emp_field_new['MENUID '] = $element_id1[$j-1];
	 $emp_field_new['DSBSRNO'] = $j;
	 $emp_field_new['ADDUSER'] = $empcode;  
	 $emp_field_new['ADDDATE'] = 'dd-Mon-yyyy HH:MI:SS AM~~'.$currentdate; 
	 $emp_field_new['DELETED'] =  'N';
	 $insert_dashboard_new = insert_test_dbquery($emp_field_new,$emp_table);
	 }
	 

 }

}
?>