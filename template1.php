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
    <title><?php echo "$fname's CV"; ?></title>
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #97e4fc}

th {
    background-color: #3191d6;
    color: white;
}
</style>
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
<div class="jumbotron">
  <h1 class="display-3"><center><?php echo "$name"; ?></center></h1>
</div>
<p style="text-align:left;"><font size="5">
<u>Email ID</u>: <?php echo "$email"; ?>
<span style="float:right;"><u>Contact No.</u>: <?php echo "+91-$phone"; ?></span>
</p></font><br/>
<div align="center"><font size="5"><?php echo "<u>Address</u>: $address"; ?></font></div><br/>
<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Career Objective:</strong></font></div>
<font size="5"><?php echo "$motto"; ?></font><br/><br/>
<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Educational Qualificational details:</strong></font></div>
<br/><br/>
<font size="5">
<table>
  <tr>
    <th>Sr. No.</th>
    <th>College/Board/University</th> 
    <th>Examination</th>
    <th>Year of Passing</th>
    <th>Percentage/CPI/CGPA</th>
  </tr>
  <tr>
    <td>1.</td>
    <td><?php echo "$cname";  ?></td>
    <td><?php echo "$ctype";  ?></td>
    <td><?php echo "$cyop";  ?></td>
    <td><?php echo "$cper/10";  ?></td>
  </tr>
  <tr>
    <td>2.</td>
    <td><?php echo "$hsname";  ?></td>
    <td><?php echo "$hstype";  ?></td>
    <td><?php echo "$hsyop";  ?></td>
    <td><?php echo "$hsper%";  ?></td>
  </tr>
  <tr>
    <td>3.</td>
    <td><?php echo "$sname";  ?></td>
    <td><?php echo "$stype";  ?></td>
    <td><?php echo "$syop";  ?></td>
    <td><?php echo "$sper%";  ?></td>
  </tr>
</table>
</font>
<br/><br/>


<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Past Experience:</strong></font></div>
<font size="5">
<ul><?php if($past1 !="") {echo "<li> $past1<br>";};
if($past2 !="") {echo "<li> $past2<br>";}
 ?></ul>
</font>
<br/>

<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Technical Profile:</strong></font></div>
<font size="5"><ul >
<?php if($t1 != ""){echo "<li> $t1 :: $d1<br>";}  ?>
<?php if($t2 != ""){echo "<li> $t2 :: $d2<br>";}  ?>
<?php if($t3 != ""){echo "<li> $t3 :: $d3<br>";}  ?>
<?php if($t4 != ""){echo "<li> $t4 :: $d4<br>";}  ?>
<?php if($t5 != ""){echo "<li> $t5 :: $d5<br>";}  ?>
<?php if($t6 != ""){echo "<li> $t6 :: $d6<br>";}  ?>


</ul>
</font>
<br/>
<font size="5">
<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Projects and Internships done:</strong></font></div>
<ul><?php if($p1 !="") {echo "<li> $p1<br>";};
if($p2 !="") {echo "<li> $p2<br>";}
if($p3 !="") {echo "<li> $p3<br>";}
if($p4 !="") {echo "<li> $p4<br>";}
if($p5 !="") {echo "<li> $p5<br>";}
if($p6 !="") {echo "<li> $p6<br>";}

 ?></ul>
</font>
<br/>

<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Academic Achievements:</strong></font></div>
<font size="5">
<ul><?php if($a1 !="") {echo "<li> $a1<br>";};
if($a2 !="") {echo "<li> $a2<br>";}
if($a3 !="") {echo "<li> $a3<br>";}
if($a4 !="") {echo "<li> $a4<br>";}
 ?></ul>
</font>
<br/>

<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Extra-curricular and Co-curricular Activities:</strong></font></div>
<font size="5">
<ul><?php if($e1 !="") {echo "<li> $e1<br>";};
if($e2 !="") {echo "<li> $e2<br>";}
if($e3 !="") {echo "<li> $e3<br>";}
if($e4 !="") {echo "<li> $e4<br>";}
if($e5 !="") {echo "<li> $e5<br>";}
 ?></ul>
</font>
<br/>

<div style="width:1348px;height: 40px;background-color:#3191d6;"><font size="6"><strong>Strong Points:</strong></font></div>
<font size="5">
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