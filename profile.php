<?php
session_start();

require('function.php');
$con = con();

$user_id = $_SESSION['id'];

$query = "SELECT * FROM user U where U.id = '$user_id'";

$result = $con->query($query);

$arr = $result->fetch_array();

$email = $arr["email"];
$firstname = $arr["first_name"];
$lastname = $arr["last_name"];
$name = $firstname." ".$lastname;
$allposts = "SELECT * FROM user U, post P where U.id=P.user_id";
$posts_result = $con->query($allposts);
?>


<!DOCTYPE html>
<html>
<head>
<title><?php echo "$firstname"; ?>'s Profile-Resumizer</title>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./CSS Frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    <link href="./assets/css/blog_page.css" rel="stylesheet">
    <link href="cover1.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>


</head>
<body>
		<div class="jumbotron">
		  <h1 class="display-1"><a href="Homepage.php" class="text-primary" style="text-decoration : none">
		<h1 class="display-1">Resumizer</h1>
		</a></h1>
		
		</div>
		 <div align="left" ><font size="5"><nav class="nav nav-pills nav-justified">
                <a class="nav-link" href="Homepage.php"><font color="#fff">Home</font></a>
                <a class="nav-link" href="tipsLogin.php"><font color="#fff">Resume Tips</font></a>
                <a class="nav-link  " href="logout.php"><font color="#fff">Logout</font></a>
              </nav></font></div>

		<center><h1 class="display-2"><u>Name</u>: <?php echo "$name"; ?></h1><br/>
		<center><h2><u>Email ID</u>: <?php echo "$email"; ?></h2><br/>

		<?php 
		$i=1;
        // while($arr = $posts_result->fetch_array()){
          
        //   $id = $arr["id"];
          
          
        //   $link = "template.php?id=".$id;
        //   echo "<h2><a href=$link>$firstname 's CV-$i</a></h2>" ;
        //   $i++;

        // }
        echo "<h2><a href=template1.php>$firstname 's CV-1</a></h2><br/>" ;
        echo "<h2><a href=template2.php>$firstname 's CV-2</a></h2>" ;
        ?>

        <p class="lead">
              <a href="pageMiracle.php" class="btn btn-lg btn-primary">Create new CV<span class="glyphicon glyphicon-arrow-right"></span></a>
            </p>

         



</body>
</html>