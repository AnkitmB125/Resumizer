<?php
session_start();
require('function.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){

	$fname = validate($_POST["fname"]);
	$lname = validate($_POST["lname"]);
	$gender = validate($_POST["gender"]);
	$email = validate($_POST["email"]);
	$phone = validate($_POST["phone"]);
	$DOB = validate($_POST["DOB"]);
	$address = validate($_POST["address"]);
	$linkedin = validate($_POST["linkedin"]);
	$facebook = validate($_POST["facebook"]);
	$motto = validate($_POST["motto"]);
	$sname = validate($_POST["sname"]);
	$sper = validate($_POST["sper"]);
	$stype = validate($_POST["stype"]);
	$syop = validate($_POST["syop"]);
	$hsname = validate($_POST["hsname"]);
	$hsper = validate($_POST["hsper"]);
	$hstype = validate($_POST["hstype"]);
	$hsyop = validate($_POST["hsyop"]);
	$cname = validate($_POST["cname"]);
	$cper = validate($_POST["cper"]);
	$ctype = validate($_POST["ctype"]);
	$cyop = validate($_POST["cyop"]);
	$p1 = validate($_POST["p1"]);
	$p2 = validate($_POST["p2"]);
	$p3 = validate($_POST["p3"]);
	$p4 = validate($_POST["p4"]);
	$p5 = validate($_POST["p5"]);
	$p6 = validate($_POST["p6"]);
	$t1 = validate($_POST["t1"]);
	$d1 = validate($_POST["d1"]);
	$t2 = validate($_POST["t2"]);
	$d2 = validate($_POST["d2"]);
	$t3 = validate($_POST["t3"]);
	$d3 = validate($_POST["d3"]);
	$t4 = validate($_POST["t4"]);
	$d4 = validate($_POST["d4"]);
	$t5 = validate($_POST["t5"]);
	$d5 = validate($_POST["d5"]);
	$t6 = validate($_POST["t6"]);
	$d6 = validate($_POST["d6"]);
	$a1 = validate($_POST["a1"]);
	$a2 = validate($_POST["a2"]);
	$a3 = validate($_POST["a3"]);
	$a4 = validate($_POST["a4"]);
	$e1 = validate($_POST["e1"]);
	$e2 = validate($_POST["e2"]);
	$e3 = validate($_POST["e3"]);
	$e4 = validate($_POST["e4"]);
	$e5 = validate($_POST["e5"]);
	$s1 = validate($_POST["s1"]);
	$s2 = validate($_POST["s2"]);
	$s3 = validate($_POST["s3"]);
	$s4 = validate($_POST["s4"]);
	$s5 = validate($_POST["s5"]);
	$i1 = validate($_POST["i1"]);
	$i2 = validate($_POST["i2"]);
	$i3 = validate($_POST["i3"]);
	$i4 = validate($_POST["i4"]);
	$i5 = validate($_POST["i5"]);
	$past1 = validate($_POST["past1"]);
	$past2 = validate($_POST["past2"]);
	
	$user_id = $_SESSION['id'];

	$con = con();

	{
		$ins_query = "INSERT INTO post (first_name, last_name, gender, email, contact_number, dob, address, linkedin, facebook, objective, school_name, percent_10, school_exam, school_yop, h_school_name, percent_12, h_school_exam, h_school_yop, college_name, cpi, college_exam, college_yop, project1, project2, project3, project4, project5, project6, skill1, s_detail1,skill2, s_detail2, skill3, s_detail3, skill4, s_detail4, skill5, s_detail5, skill6, s_detail6, achievement1, achievement2, achievement3, achievement4, activity1, activity2, activity3, activity4, activity5, strong1, strong2, strong3, strong4, strong5, api1, api2, api3, api4, api5, past1, past2, user_id) VALUES ('$fname','$lname','$gender', '$email', '$phone', '$DOB', '$address', '$linkedin', '$facebook', '$motto', '$sname', '$sper', '$stype', '$syop', '$hsname', '$hsper', '$hstype', '$hsyop', '$cname', '$cper', '$ctype', '$cyop', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$t1', '$d1', '$t2', '$d2', '$t3', '$d3', '$t4', '$d4', '$t5', '$d5', '$t6', '$d6', '$a1', '$a2', '$a3', '$a4', '$e1', '$e2', '$e3', '$e4', '$e5', '$s1', '$s2', '$s3', '$s4', '$s5', '$i1', '$i2', '$i3', '$i4', '$i5', '$past1', '$past2', '$user_id')" ;
		$ins_res = $con->query($ins_query);
	
		echo "<script>alert('CV created');window.location='selection.php';</script>";
		die();
	}

}