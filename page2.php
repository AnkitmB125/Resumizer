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
<!-- <blockquote>
      <h2>CV Maker</h2>
    </blockquote>
        </a>  
        <br/> -->
 <div class="jumbotron">
  <h1 class="display-1"><a href="Homepage2.php" class="text-primary" style="text-decoration : none">
<h1 class="display-1"><center>CV Maker</center></h1>
</a></h1>
</div>
<center><font color="white"><h1 class="display-3">Educational Details</h1><br/><br/>
    <form>
  <div class="container">    
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <!-- <div class="panel panel-info" >
                <div class="panel-heading">
                     <div class="panel-title">log In</div>

                </div>      -->

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form" action="login_backend.php" method="post">
                        <div align="left"><h5 class="display-4">School Details:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                            <font size="5"><input id="sname" type="text" class="form-control" name="sname" value="" placeholder="School Name" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/bar_chart_2.png" height="24" width="20"></span>
                            <font size="5"><input id="sper" type="text" class="form-control" name="sper" value="" placeholder="Percentage in 10th" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/book_1.png" height="24" width="20"></span>
                            <font size="5"><input id="stype" type="text" class="form-control" name="stype" value="" placeholder="Examination" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/cal.png" height="24" width="20"></span>
                            <font size="5"><input id="syop" type="text" class="form-control" name="syop" value="" placeholder="Year of Passing" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h5 class="display-4">High School Details:</h5></div><br/>

                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                            <font size="5"><input id="hsname" type="text" class="form-control" name="hsname" value="" placeholder="High School Name" style=" height: 45px;">  </font>                                      
                        </div>

                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/bar_chart_2.png" height="24" width="20"></span>
                            <font size="5"><input id="hsper" type="text" class="form-control" name="hsper" value="" placeholder="Percentage in 10+2" style=" height: 45px;">  </font>                                      
                        </div>

                              <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/book_1.png" height="24" width="20"></span>
                            <font size="5"><input id="hstype" type="text" class="form-control" name="hstype" value="" placeholder="Examination" style=" height: 45px;">  </font>                                      
                        </div>    

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/cal.png" height="24" width="20"></span>
                            <font size="5"><input id="hsyop" type="text" class="form-control" name="hsyop" value="" placeholder="Year of Passing" style=" height: 45px;">  </font>                                      
                        </div>                                               

                        <div align="left"><h5 class="display-4">College Details:</h5></div><br/>

                        
                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                            <font size="5"><input id="cname" type="text" class="form-control" name="cname" value="" placeholder="College Name" style=" height: 45px;">  </font>                                      
                        </div>

                                                <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/bar_chart_2.png" height="24" width="20"></span>
                            <font size="5"><input id="cper" type="text" class="form-control" name="cper" value="" placeholder="CPI/CGPA" style=" height: 45px;">  </font>                                      
                        </div>

                              <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/book_1.png" height="24" width="20"></span>
                            <font size="5"><input id="ctype" type="text" class="form-control" name="ctype" value="" placeholder="Examination" style=" height: 45px;">  </font>                                      
                        </div>    

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/cal.png" height="24" width="20"></span>
                            <font size="5"><input id="cyop" type="text" class="form-control" name="cyop" value="" placeholder="Year of Passing" style=" height: 45px;">  </font>                                      
                        </div>                                               

                        



                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <a href="page3.php" style="text-decoration : none"><button type="button" class="btn btn-primary btn-lg"><font color="#fff">Save & Next<span class="glyphicon glyphicon-ok"></span></font></a></button>
                            
                     
                                <button type="reset" class="btn btn-primary btn-lg">Reset<span class="glyphicon glyphicon-refresh"></span></button>
                            </div>
                        </div>


                        <!-- <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-t solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account! 
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </div>     -->




                </div>                     
            </div>  


</form>









</body>
</html>    