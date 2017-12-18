<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="./CSS Frameworks/materialize/css/materialize.css" rel="stylesheet"> -->
    <link href="./CSS Frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- <link href="cover2.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    <link href="./assets/css/blog_page.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <title>Sign up-Resumizer</title>
</head>
<body style="background:#494A50">  
    <a href="Homepage.php">

 <div class="jumbotron">
  <h1 class="display-1"><a href="Homepage2.php" class="text-primary" style="text-decoration : none">
<h1 class="display-1"><center>Resumizer</center></h1>
</a></h1>
</div>
 <!-- <blockquote class="blockquote">
  <p class="display-1"><a href="Homepage2.html" class="text-primary" style="text-decoration : none">
<h1 class="display-1">CV Maker</h1>
</a></p>
</blockquote> -->

<center><font color="white"><h1 class="display-3">Sign Up in Resumizer<i class="glyphicon glyphicon-thumbs-up"></i></h1><br/>
    <center><font size="4">Already have an Account?<a href="login2.php" style="text-decoration : none">Log In</a></font></font></center>





<div class="container">    
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            
                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="signupform" class="form-horizontal" role="form" action="signup_backend.php" method="POST">

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <font size="5"><input id="fname" type="text" class="form-control" name="firstname" value="" placeholder="First Name" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <font size="5"><input id="lname" type="text" class="form-control" name="lastname" value="" placeholder="Last Name" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <font size="5"><input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <font size="5"><input id="login-password" type="password" class="form-control" name="password" placeholder="Password" style=" height: 45px;"></font>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                          
                            <div class="col-sm-12 controls"><center>
                                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button></center>
                            </div>
                        </div>


                       
                        </form>

                </div>                     
            </div>  
       
                

</body>
</html>