<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="./CSS Frameworks/materialize/css/materialize.css" rel="stylesheet"> -->
    <link href="./CSS Frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    <link href="./assets/css/blog_page.css" rel="stylesheet">
    <link href="cover1.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <title>Login-Resumizer</title>
</head>
<body>	
	
 <div class="jumbotron">
  <h1 class="display-1"><a href="Homepage2.php" class="text-primary" style="text-decoration : none">
<h1 class="display-1">Resumizer</h1>
</a></h1>
</div>
 

<center><h1 class="display-3">Log In</h1><br/>

<p class="flow-text"><font size="4">New to CV Maker?<a href="signup.php" style="text-decoration : none">Sign Up</a></font></p>
</center><br/>




<div class="container">    
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            
                <div class="panel-heading">
                    

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form" action="login_backend.php" method="post">

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <font size="5"><input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <font size="5"><input id="login-password" type="password" class="form-control" name="password" placeholder="Password" style=" height: 45px;"></font>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                           

                            <div class="col-sm-12 controls"><center>
                                <button type="submit" class="btn btn-primary btn-lg">Log In</button></center>
                            </div>
                        </div>

                        


                            </form>

                </div>                     
            </div>  
        
                

</body>
</html>