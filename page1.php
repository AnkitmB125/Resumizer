<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="./CSS Frameworks/materialize/css/materialize.css" rel="stylesheet"> -->
    <link href="./CSS Frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="cover2.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/fonts/font.css" rel="stylesheet">
    <link href="./assets/css/blog_page.css" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</head>
<body style="background:#494A50">  
    <a href="Homepage.php">

 <div class="jumbotron">
  <h1 class="display-1"><a href="Homepage2.php" class="text-primary" style="text-decoration : none">
<h1 class="display-1"><center>CV Maker</center></h1>
</a></h1>
</div>
<center><font color="white"><h1 class="display-3">Personal Information</h1><br/><br/>
    <form>
  <div class="container">    
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
           

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form" action="login_backend.php" method="post">
                        <div align="left"><h4>Name:</h4></div>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <font size="5"><input id="fname" type="text" class="form-control" name="fname" value="" placeholder="First Name" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <font size="5"><input id="lname" type="text" class="form-control" name="lname" value="" placeholder="Last Name" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h4>Gender:</h4></div>
                        <div align="left" style="margin-bottom: 50px" class="input-group">
                           <h3>
                                               <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">Male
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">Female
                      </label>
                    </div>
                  
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Others">Others
                      </label>
                    
                        </h3>                                  
                        </div>

                        <div align="left"><h4>E-mail ID:</h4></div>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <font size="5"><input id="login-username" type="email" class="form-control" name="email" value="" placeholder="Email" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h4>Contact Number:</h4></div>
                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <font size="5"><input id="phone" type="number" class="form-control" name="phone" value="" placeholder="Phone Number" style=" height: 45px;">  </font>                                      
                        </div>
                        <div align="left"><h4>Date of Birth:</h4></div>

                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <font size="5"><input id="DOB" type="date" class="form-control" name="DOB" value="" placeholder="Date of Birth" style=" height: 45px;">  </font>                                      
                        </div>
                        <div align="left"><h4>Enter your current address:</h4></div>

                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <font size="15"><textarea id="address" class="form-control" name="address" value="" placeholder="Enter your current address" style=" height: 90px;"></textarea></font>                                     
                        </div>


                        <div align="left"><h4>Social Profiles:</h4></div>

                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/linkedin.png" height="24" width="20"></span>
                            <font size="5"><input id="linkedin" type="text" class="form-control" name="linkedin" value="" placeholder="Your LinkedIn ID" style=" height: 45px;">  </font>                                      
                        </div>

                                 <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/facebook_1.png" height="24" width="20"></span>
                            <font size="5"><input id="facebook" type="text" class="form-control" name="facebook" value="" placeholder="Your Facebook ID" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h4>Life's Objective:</h4></div>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/motto.png" height="24" width="20"></span>
                            <font size="5"><input id="motto" type="text" class="form-control" name="motto" value="" placeholder="Life's Motto" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            

                            <div class="col-sm-12 controls">
                                <a href="page2.php" style="text-decoration : none"><button type="button" class="btn btn-primary btn-lg"><font color="#fff">Save & Next<span class="glyphicon glyphicon-ok"></span></font></a></button>
                            
                     
                                <button type="reset" class="btn btn-primary btn-lg">Reset<span class="glyphicon glyphicon-refresh"></span></button>
                            </div>
                        </div>


                      



                </div>                     
            </div>  


</form>









</body>
</html>    