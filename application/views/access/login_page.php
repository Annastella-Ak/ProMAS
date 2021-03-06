<?php 
/*Author : Devid Felix , Annastella Kilaja
 * 
 */
?>

<html lang="en">
    <head id="head">
        <title>Login | ProMAS</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" media="screen">
        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" media="screen">
        
                <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.0.js"></script>
        </head>
            
    
    <body >
        
        
        <div id="header-content">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="#">
                    <img src="<?php echo base_url(); ?>assets/images/promas.png" alt="Logo">
                </a>
            <a class="pull-right" href="#">
                <img alt="image" src="<?php echo base_url(); ?>assets/images/udsm_logo.png.png">
            </a>
                </div>
               </div>
                </div>     
        </div>
        
        
            
            <div class="container-fluid">
            <div class="row" >
                 <div style="margin-bottom: -15px" class="col-sm-8 col-sm-offset-2">
                    
                        <div class="btn-group btn-group-sm offset-0">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myOverview">Overview</button>
                        </div>
                        <div class="btn-group btn-group-sm offset-0" >
                            <button type="button" class="btn btn-default">Archive</button>
                        </div>
                </div>
                
            </div>
                
            <div class="row">
                    
                <div class="col-sm-8 col-sm-offset-2">
                    <hr style="border: none; height: 5px; background:#0093D0;"/>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="col-sm-10 col-sm-offset-0 ">
                <h3  style="color:#0093D0">ProMAS Login</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-sm-4 col-sm-offset-4">
                    <div id="login_box" class="col-sm-10 col-sm-offset-1">
                    
                        <div class="container-fluid">
                        
                            <form role="form" action="<?php echo site_url(); ?>/access/login/verify_user" method="POST">
                        <?php if(isset($error)){ echo "<div ><p class='text-center text-danger'><b>".$error."<b></p></div>";} ?>
                        
                        
                              
                            <div class="form-group">
                                <div class="col-sm-11" >
                                <label class="control-label"  for="username">Username&nbsp;&nbsp;</label><?php echo show_form_error('username'); ?>
                                </div>
                                <div class="col-sm-10"> 
                                    <input type="text" name="username" class="form-control " value="<?php echo set_value('username');?>" placeholder="Enter username" >
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-sm-11">
                                <label class="control-label"  for="password">Password&nbsp;&nbsp;</label><?php echo show_form_error('password'); ?>
                                </div>
                                <div class="col-sm-10 ">
                                    <input type="password" name="password" class="form-control  " placeholder="Enter password" >
                                </div>
                            </div>

                            <div class="form-group col-sm-10" >
                                <div class="checkbox">
                                    <label ><input name="keep_logged" type="checkbox" value="1">Keep me logged in</label>
                                </div>
                                <button name="submit" value="submit" type="submit" class="btn btn-primary col-sm-4 col-sm-offset-0 col-xs-12 ">Login</button> 
                            </div>

                        
                            </form>
                
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h5 style="color:#0093D0"><a href="<?php echo site_url(); ?>/access/password">Forgot your password? Click here</a></h5>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <hr style="border: none; height: 5px; color: blue; background: #0093D0;"/>
                </div>
                <div class="col-sm-8 col-sm-offset-2" style="margin-top: -20px; color: #0093D0; ">
                    <h5 class="pull-left">UDSM | CoICT | Computer Science and Engineering Department</h5><h5 class="pull-right">Copyright &COPY; 2014 ProMAS</h5>
                </div>
                
                
            </div>
        </div>
        
        
        <div class="modal" role="dialog" id="myOverview" >

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Project Management And Archiving System(ProMAS)</h4>
            </div>
            <div class="modal-body">
               
                <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">Manage final year projects</h4>
                        </div>
                        <div class="panel-body">
                         Monitoring projects progress and by setting and tracking your project timeline and deliverables,
                         Assess both team and individual perfomance. 
                         Communicate with all parties in the project by using announcements.
                         Get working and informed in one place. 
                      </div>
                      
                  </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                            <h4 class="panel-title">Final year project archive</h4>
                        </div>
                        <div class="panel-body">
                         Find all relevant information on implemented project, when they were done, 
                         by who, what they were all about and where they terminated.
                         Search based on year,tittle, supervisor,coordinator, and so much more! 
                      </div>
                      
                  </div>
            </div> 
        </div>
    </div>
</div>
        

        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
   
    </body>
    
     
</html>                                                                        