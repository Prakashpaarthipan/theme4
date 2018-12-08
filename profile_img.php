<?php 
error_reporting(0);
include_once('lib/config.php');
include_once('lib/function_connect.php');
include_once('lib/general_functions.php');
extract($_REQUEST);

if($action == 'profile_img') {
	/* $sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empsrno=".$profile_img, "Centra", "TCS");
	if(count($sql_sub) <= 0) {
		$sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empcode=".$profile_img, "Centra", "TCS");
	}
	$img = $sql_sub[0]['EMPPHOT']->load();
	header("Content-type: image/pjpeg");
	ob_start();
	echo $img; */

	$sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empsrno=".$profile_img, "Centra", "TCS");
	if(count($sql_sub) <= 0) {
		$sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empcode=".$profile_img, "Centra", "TCS");
	}
	$data = base64_decode($sql_sub[0]['EMPPHOT']);
	$im = imagecreatefromstring($data);
	if ($im !== false) {
	    header('Content-Type: image/png');
	    imagepng($im);
	    imagedestroy($im);
	}
	else {
	    echo 'An error occurred.';
	}
} else {
	/* $sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empcode=".$profile_img, "Centra", "TCS");
	$img = $sql_sub[0]['EMPPHOT']->load();
	header("Content-type: image/pjpeg");
	ob_start();
	echo $img; */

	$sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empcode=".$profile_img, "Centra", "TCS");
	if(count($sql_sub) <= 0) {
		$sql_sub = select_query_json("select p.empphot from employee_personal p, employee_office o where p.empsrno=o.empsrno and o.empsrno=".$profile_img, "Centra", "TCS");
	}
	$data = base64_decode($sql_sub[0]['EMPPHOT']);
	$im = imagecreatefromstring($data);
	if ($im !== false) {
	    header('Content-Type: image/png');
	    imagepng($im);
	    imagedestroy($im);
	}
	else {
	    echo 'An error occurred.';
	}
}
?>