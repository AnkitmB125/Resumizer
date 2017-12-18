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

    <title>CV Details-Resumizer</title>
</head>
<body style="background:#494A50">  
    <a href="Homepage.php">
<!-- <blockquote>
      <h2>CV Maker</h2>
    </blockquote>
        </a>  
        <br/> -->
 <div class="jumbotron">
  <h1 class="display-1"><a href="Homepage.php" class="text-primary" style="text-decoration : none">
<h1 class="display-1"><center>Resumizer</center></h1>
</a></h1>
</div>
<center><font color="white"><h1 class="display-3">Personal Information</h1><br/><br/>
    
  <div class="container">    
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            
                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="cvdetails" class="form-horizontal" role="form" action="sexy.php" method="post">
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
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">Male
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">Female
                      </label>
                    </div>
                    
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others" disabled>Others
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

                        <center><font color="white"><h1 class="display-3">Educational Details</h1><br/><br/>

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
                        <center><font color="white"><h1 class="display-3">Details of Projects and Internships Done</h1><br/><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/1.png" height="24" width="20"></span>
                            <font size="5"><input id="p1" type="text" class="form-control" name="p1" value="" placeholder="Project 1" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/2.png" height="24" width="20"></span>
                            <font size="5"><input id="p2" type="text" class="form-control" name="p2" value="" placeholder="Project 2" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/3.png" height="24" width="20"></span>
                            <font size="5"><input id="p3" type="text" class="form-control" name="p3" value="" placeholder="Project 3" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/4.png" height="24" width="20"></span>
                            <font size="5"><input id="p4" type="text" class="form-control" name="p4" value="" placeholder="Project 4" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/5.png" height="24" width="20"></span>
                            <font size="5"><input id="p5" type="text" class="form-control" name="p5" value="" placeholder="Project 5" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/6.png" height="24" width="20"></span>
                            <font size="5"><input id="p6" type="text" class="form-control" name="p6" value="" placeholder="Project 6" style=" height: 45px;">  </font>                                      
                        </div>

                        <center><font color="white"><h1 class="display-3">Technical Profile</h1><br/><br/>

                        <div align="left"><h5 class="display-4">Skill 1:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/code.png" height="24" width="20"></span>
                            <font size="5"><input id="t1" type="text" class="form-control" name="t1" value="" placeholder="Skill" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/hashtag.png" height="24" width="20"></span>
                            <font size="5"><input id="d1" type="text" class="form-control" name="d1" value="" placeholder="Detail" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h5 class="display-4">Skill 2:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/code.png" height="24" width="20"></span>
                            <font size="5"><input id="t2" type="text" class="form-control" name="t2" value="" placeholder="Skill" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/hashtag.png" height="24" width="20"></span>
                            <font size="5"><input id="d2" type="text" class="form-control" name="d2" value="" placeholder="Detail" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h5 class="display-4">Skill 3:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/code.png" height="24" width="20"></span>
                            <font size="5"><input id="t3" type="text" class="form-control" name="t3" value="" placeholder="Skill" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/hashtag.png" height="24" width="20"></span>
                            <font size="5"><input id="d3" type="text" class="form-control" name="d3" value="" placeholder="Detail" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h5 class="display-4">Skill 4:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/code.png" height="24" width="20"></span>
                            <font size="5"><input id="t4" type="text" class="form-control" name="t4" value="" placeholder="Skill" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/hashtag.png" height="24" width="20"></span>
                            <font size="5"><input id="d4" type="text" class="form-control" name="d4" value="" placeholder="Detail" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h5 class="display-4">Skill 5:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/code.png" height="24" width="20"></span>
                            <font size="5"><input id="t5" type="text" class="form-control" name="t5" value="" placeholder="Skill" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/hashtag.png" height="24" width="20"></span>
                            <font size="5"><input id="d5" type="text" class="form-control" name="d5" value="" placeholder="Detail" style=" height: 45px;">  </font>                                      
                        </div>

                        <div align="left"><h5 class="display-4">Skill 6:</h5></div><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/code.png" height="24" width="20"></span>
                            <font size="5"><input id="t6" type="text" class="form-control" name="t6" value="" placeholder="Skill" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/hashtag.png" height="24" width="20"></span>
                            <font size="5"><input id="d6" type="text" class="form-control" name="d6" value="" placeholder="Detail" style=" height: 45px;">  </font>                                      
                        </div>

                        <center><font color="white"><h1 class="display-3">Academic Achievements</h1><br/><br/>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/1.png" height="24" width="20"></span>
                            <font size="5"><input id="a1" type="text" class="form-control" name="a1" value="" placeholder="Achievement" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/2.png" height="24" width="20"></span>
                            <font size="5"><input id="a2" type="text" class="form-control" name="a2" value="" placeholder="Achievement" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/3.png" height="24" width="20"></span>
                            <font size="5"><input id="a3" type="text" class="form-control" name="a3" value="" placeholder="Achievement" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/4.png" height="24" width="20"></span>
                            <font size="5"><input id="a4" type="text" class="form-control" name="a4" value="" placeholder="Achievement" style=" height: 45px;">  </font>                                      
                        </div>

                        <font color="white"><h1 class="display-3">Extra-Curricular and Co-curricular Activities</h1><br/><br/>

                            <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/1.png" height="24" width="20"></span>
                            <font size="5"><input id="e1" type="text" class="form-control" name="e1" value="" placeholder="Activity" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/2.png" height="24" width="20"></span>
                            <font size="5"><input id="e2" type="text" class="form-control" name="e2" value="" placeholder="Activity" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/3.png" height="24" width="20"></span>
                            <font size="5"><input id="e3" type="text" class="form-control" name="e3" value="" placeholder="Activity" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/4.png" height="24" width="20"></span>
                            <font size="5"><input id="e4" type="text" class="form-control" name="e4" value="" placeholder="Activity" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/5.png" height="24" width="20"></span>
                            <font size="5"><input id="e5" type="text" class="form-control" name="e5" value="" placeholder="Activity" style=" height: 45px;">  </font>                                      
                        </div>

                        <center><font color="white"><h1 class="display-3">Strong points</h1><br/><br/>

                            <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/1.png" height="24" width="20"></span>
                            <font size="5"><input id="s1" type="text" class="form-control" name="s1" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/2.png" height="24" width="20"></span>
                            <font size="5"><input id="s2" type="text" class="form-control" name="s2" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/3.png" height="24" width="20"></span>
                            <font size="5"><input id="s3" type="text" class="form-control" name="s3" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/4.png" height="24" width="20"></span>
                            <font size="5"><input id="s4" type="text" class="form-control" name="s4" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/5.png" height="24" width="20"></span>
                            <font size="5"><input id="s5" type="text" class="form-control" name="s5" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <font color="white"><h1 class="display-3">Areas of Personal Interest</h1><br/><br/>

                            <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/1.png" height="24" width="20"></span>
                            <font size="5"><input id="i1" type="text" class="form-control" name="i1" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/2.png" height="24" width="20"></span>
                            <font size="5"><input id="i2" type="text" class="form-control" name="i2" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/3.png" height="24" width="20"></span>
                            <font size="5"><input id="i3" type="text" class="form-control" name="i3" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/4.png" height="24" width="20"></span>
                            <font size="5"><input id="i4" type="text" class="form-control" name="i4" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/5.png" height="24" width="20"></span>
                            <font size="5"><input id="i5" type="text" class="form-control" name="i5" value="" placeholder="" style=" height: 45px;">  </font>                                      
                        </div>





                            <center><font color="white"><h1 class="display-3">Past Experience</h1><br/><br/>
                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/1.png" height="24" width="20"></span>
                            <font size="15"><textarea id="past1" class="form-control" name="past1" value="" placeholder="Enter Details of your past experience " style=" height: 90px;"></textarea></font>                                      
                        </div>

                        <div style="margin-bottom: 50px" class="input-group">
                            <span class="input-group-addon"><img src="./ResumeTipsImg/2.png" height="24" width="20"></span>
                            <font size="15"><textarea id="past2" class="form-control" name="past2" value="" placeholder="Enter Details of your past experience " style=" height: 90px;"></textarea></font>                                     
                        </div>




                        <div style="margin-top:10px" class="form-group">
                            

                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-primary btn-lg"><font color="#fff">Save & Next<span class="glyphicon glyphicon-ok"></span></font></button>
                            
                     
                                <button type="reset" class="btn btn-primary btn-lg">Reset<span class="glyphicon glyphicon-refresh"></span></button>
                            </div>
                        </div>

                        </form>
                       
                        </div>     




                </div>                     
            </div>  












</body>
</html>    