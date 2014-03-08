<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<html lang="en">
    <head id="head">
        
        <title>Forgot Password | ProMAS</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" media="screen">
        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" media="screen">
        
                <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.0.js"></script>
        </head>
            
    
        <body >

            <form id="reg_form" class="col-sm-4 col-sm-offset-4 " action="<?php echo site_url(); ?>/access/password/forgot_password" method="POST" role="form">

                <h4 class="text-center " style="font-family:Adobe Ming Std L"> Reset your password</h4>
                
                <div class="hr"><hr></div>
    
                 <span><?php if (isset($message)){ echo "<h4 class=' text-center text-success'><b>".$message."</b></h4>"; }?>
                 </span>   
                

                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group" >
                            <label class="control-label" for="inputEmail">Email: &nbsp;<?php echo show_form_error('email'); ?></label>
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter registerd email"  value="">
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-sm-offset-0 col-sm-3">
                        <div class="form-group" >
                            <button name="submit" type="submit" class="btn btn-primary btn-block">Send</button>
                        </div>
                    </div>
                </div>
                
            </form>