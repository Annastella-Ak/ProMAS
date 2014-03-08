<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html lang="en">
    <head id="head">
        
        <title>Change Password | ProMAS</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" media="screen">
        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" media="screen">
        
                <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.0.js"></script>
        </head>
            
    
        <body >

            <form id="reg_form" class="col-sm-4 col-sm-offset-4 " action="<?php echo site_url(); ?>/access/password/validate_password" method="POST" role="form">

                
                <input name="user_id" type="hidden" value="<?php if(isset($user_id)) echo $user_id; ?>">
                <input name="user_type" type="hidden" value="<?php if(isset($user_type)) echo $user_type; ?>">
                
                <h4 class="text-center " style="font-family:Adobe Ming Std L"> Create New Password</h4>
                
                <div class="hr"><hr></div>
    
                 <span><?php if (isset($message)){ echo "<h4 class=' text-center text-success'><b>".$message."</b></h4>"; }?>
                 </span>   
                
                <?php if(isset($user_id) && isset($user_type)) { ?>

                <div class="row">
                    <div class="col-sm-10">
                            <div class="form-group">
                                <label for="inputPassword" class=" control-label">New Password:&nbsp;<?php echo show_form_error('password'); ?></label>
                                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                    </div>
                    </div>

                <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="inputPasswordCon" class="control-label">Confirm Password:&nbsp;<?php echo show_form_error('password_con'); ?></label>
                                <input name="password_con" type="password" class="form-control" id="inputPasswordCon" placeholder="Confirm Password">
                            </div>
                        </div>
                 
                </div>
                
                <div class="row">
                    <div class="col-sm-offset-0 col-sm-3">
                        <div class="form-group" >
                            <button name="submit" type="submit" class="btn btn-primary btn-block">Change</button>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                
            </form>
            
            </body>
            </html>


                   