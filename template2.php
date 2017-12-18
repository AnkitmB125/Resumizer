<?php
session_start();

require('function.php');
$con = con();

//$CV_id = $_GET["id"];
$user_id = $_SESSION['id'];

$query = "SELECT * FROM user U where U.id = '$user_id'";

$result = $con->query($query);

$arr = $result->fetch_array();

$email = $arr["email"];
$user_firstname = $arr["first_name"];
$user_lastname = $arr["last_name"];





//QUERY TO FETCH ALL POSTS AND THEIR DETAILS
$allposts = "SELECT * FROM user U, post P where U.id=P.user_id and U.id='$user_id'";
$posts_result = $con->query($allposts);
$arr = $posts_result->fetch_array();
$fname = $arr["first_name"];
$lname = $arr["last_name"];
$gender = $arr["gender"];
$email = $arr["email"];
$phone = $arr["contact_number"];
$DOB = $arr["dob"];
$address = $arr["address"];
$linkedin = $arr["linkedin"];
$faceboook = $arr["facebook"];
$motto = $arr["objective"];
$sname = $arr["school_name"];
$sper = $arr["percent_10"];
$stype = $arr["school_exam"];
$syop = $arr["school_yop"];
$hsname = $arr["h_school_name"];
$hsper = $arr["percent_12"];
$hstype = $arr["h_school_exam"];
$hsyop = $arr["h_school_yop"];
$cname = $arr["college_name"];
$cper = $arr["cpi"];
$ctype = $arr["college_exam"];
$cyop = $arr["college_yop"];
$p1 = $arr["project1"];
$p2 = $arr["project2"];
$p3 = $arr["project3"];
$p4 = $arr["project4"];
$p5 = $arr["project5"];
$p6 = $arr["project6"];
$t1 = $arr["skill1"];
$d1 = $arr["s_detail1"];
$t2 = $arr["skill2"];
$d2 = $arr["s_detail2"];
$t3 = $arr["skill3"];
$d3 = $arr["s_detail3"];
$t4 = $arr["skill4"];
$d4 = $arr["s_detail4"];
$t5 = $arr["skill5"];
$d5 = $arr["s_detail5"];
$t6 = $arr["skill6"];
$d6 = $arr["s_detail6"];
$a1 = $arr["achievement1"];
$a2 = $arr["achievement2"];
$a3 = $arr["achievement3"];
$a4 = $arr["achievement4"];
$e1 = $arr["activity1"];
$e2 = $arr["activity2"];
$e3 = $arr["activity3"];
$e4 = $arr["activity4"];
$e5 = $arr["activity5"];
$s1 = $arr["strong1"];
$s2 = $arr["strong2"];
$s3 = $arr["strong3"];
$s4 = $arr["strong4"];
$s5 = $arr["strong5"];
$i1 = $arr["api1"];
$i2 = $arr["api2"];
$i3 = $arr["api3"];
$i4 = $arr["api4"];
$i5 = $arr["api5"];
$past1 = $arr["past1"];
$past2 = $arr["past2"];




$name = $fname." ".$lname;

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./CSS Frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    <link href="./assets/css/blog_page.css" rel="stylesheet">
    <!-- <link href="cover1.css" rel="stylesheet"> -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</head>
<body>
	<div id="printableArea">
<h2><?php echo "$name"; ?></h2>
<hr style="width:100%;"/>
<font size="4"><u>Email ID</u>: <?php echo "$email"; ?><br/>
<u>Contact No.</u>: <?php echo "+91-$phone"; ?><br/>
<u>Address</u>: <?php echo "$address"; ?></font>
<br/>
<h3>Objective:</h3>
<hr>
<font size="4"><?php echo "$motto"; ?></font>
<br/>
<h3>Educational Details:</h3><hr>
<font size="4">
College Name          : <?php echo "$cname"; ?><br/>
Type of Examination   : <?php echo "$ctype"; ?><br/>
Year of passing       : <?php echo "$cyop"; ?><br/>
Percentage/CPI/CGPA   : <?php  echo "$cper"; ?><br/>
</font>
<br/>
<font size="4">
High School Name          : <?php echo "$hsname"; ?><br/>
Type of Examination   : <?php echo "$hstype"; ?><br/>
Year of passing       : <?php echo "$hsyop"; ?><br/>
Percentage/CPI/CGPA   : <?php  echo "$hsper"; ?><br/>
</font>
<br/>
<font size="4">
School Name          : <?php echo "$sname"; ?><br/>
Type of Examination   : <?php echo "$stype"; ?><br/>
Year of passing       : <?php echo "$syop"; ?><br/>
Percentage/CPI/CGPA   : <?php  echo "$sper"; ?><br/>
</font>
<br/>

<h3>Past Experience:</h3>
<hr>
<font size="4">
<ul>
<?php echo "<li> $past1"; ?>
<?php echo "<li> $past2"; ?>
</ul>
<font size="4">
<br/>
<h3>Technical Profile:</h3>
<hr>
<font size="4"><ul >
<?php if($t1 != ""){echo "<li> $t1 :: $d1<br>";}  ?>
<?php if($t2 != ""){echo "<li> $t2 :: $d2<br>";}  ?>
<?php if($t3 != ""){echo "<li> $t3 :: $d3<br>";}  ?>
<?php if($t4 != ""){echo "<li> $t4 :: $d4<br>";}  ?>
<?php if($t5 != ""){echo "<li> $t5 :: $d5<br>";}  ?>
<?php if($t6 != ""){echo "<li> $t6 :: $d6<br>";}  ?>


</ul>
</font>
<br/>
<h3>Projects and Internships done:</h3>
<hr>
<font size="4">
<ul><?php if($p1 !="") {echo "<li> $p1<br>";};
if($p2 !="") {echo "<li> $p2<br>";}
if($p3 !="") {echo "<li> $p3<br>";}
if($p4 !="") {echo "<li> $p4<br>";}
if($p5 !="") {echo "<li> $p5<br>";}
if($p6 !="") {echo "<li> $p6<br>";}

 ?></ul>
</font>
<br/>
<h3>Academic Achievements:</h3><hr>
<font size="4">
<ul><?php if($a1 !="") {echo "<li> $a1<br>";};
if($a2 !="") {echo "<li> $a2<br>";}
if($a3 !="") {echo "<li> $a3<br>";}
if($a4 !="") {echo "<li> $a4<br>";}
 ?></ul>
</font>
<br/>
<h3>Extra-curricular and Co-curricular Activities:</h3><hr>
<font size="4">
<ul><?php if($e1 !="") {echo "<li> $e1<br>";};
if($e2 !="") {echo "<li> $e2<br>";}
if($e3 !="") {echo "<li> $e3<br>";}
if($e4 !="") {echo "<li> $e4<br>";}
if($e5 !="") {echo "<li> $e5<br>";}
 ?></ul>
</font>
<br/>
<h3>Strong Points:</h3><hr>
<font size="4">
<ul><?php if($i1 !="") {echo "<li> $i1<br>";};
if($i2 !="") {echo "<li> $i2<br>";}
if($i3 !="") {echo "<li> $i3<br>";}
if($i4 !="") {echo "<li> $i4<br>";}
if($i5 !="") {echo "<li> $i5<br>";}
 ?></ul>
</font>
<br/>
</div>
<center>
<button type="button" class="btn btn-primary btn-lg" onclick="printDiv('printableArea')">Print this page</button>
<a href="./profile.php"><button type="button" class="btn btn-primary btn-lg" >Back to Profile</button></a>
</center>

</body>
</html>

