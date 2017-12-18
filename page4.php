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
<center><font color="white"><h1 class="display-3">Technical Profile</h1><br/><br/>
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

                       

                         


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <a href="page5.php" style="text-decoration : none"><button type="button" class="btn btn-primary btn-lg"><font color="#fff">Save & Next<span class="glyphicon glyphicon-ok"></span></font></a></button>
                            
                     
                                <button type="reset" class="btn btn-primary btn-lg">Reset<span class="glyphicon glyphicon-refresh"></span></button>
                            </div>
                        </div>
</form>









</body>
</html>    