<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html lang="en">
    <head id="head">
        <title>Registration | ProMAS</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" media="screen">
        <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" media="screen">
        
                <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.0.js"></script>
        </head>
            
    
        <body >

            <form id="reg_form" class="col-sm-6 col-lg-offset-3 " action="" method="POST" role="form">

                <h4 style="font-family:Adobe Ming Std L"> Personal Details</h4>

                <div class="hr"><hr></div>
    
                <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                 <label for="inputTitle" class="control-label">Title</label>
                                <select name="title" class="form-control">
                                    <option></option>
                                    <option>Dr</option>
                                    <option>Mr</option>
                                    <option>Prof</option>
                                    <option>Miss</option>
                                    <option>Mrs</option>
                                </select>
                            </div>
                        
                    </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputSeniority" class="control-label">Seniority</label>
                                <select name="seniority" class="form-control">
                                    <option>Select Seniority</option>
                                    <option>Assistant Lecturer</option>
                                    <option>Doctor</option>
                                    <option>Lecturer</option>
                                    <option>Tutorial Assistant</option>
                                    <option>Professor</option>
                                </select>
                            </div>
                        </div>
                 </div>
                
                <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="inputFirstName"> First Name: </label>
                                <input name="fname" type="text" class=" form-control" id="inputFirstName" placeholder="First Name" value="">
                            </div>
                        
                    </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="inputLastName"> Last Name: </label>
                                <input name="lname" type="text" class="form-control" id="inputLastName" placeholder="LastName" value="">
                            </div>
                        </div>
                 </div>
                    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="inputPhoneNumber"> Phone Number: </label>
                            <input name="phone" type="text" class="form-control" id="inputPhoneNumber" placeholder="PhoneNumber">
                        </div>
                    </div>
                </div>

                 
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" >
                                <label class="control-label" for="inputEmail"> Email: </label>
                                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" disabled value="">
                            </div>
                        </div>
                    </div>
                
                <h4 style="font-family:Adobe Ming Std L"> Work Details</h4>
                <div class="hr"><hr></div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                                <label for="inputCollege/School" class="control-label">College/School</label>
                                <select name="college" class="form-control" >
                                  <option></option>
                                  <option>COET</option>
                                  <option>COICT</option>
                                  <option>CASS</option>
                                  <option>LAW</option>
                                </select>
                        </div>
                    </div>
                        
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputDepartment" class="control-label">Department</label>
                                <select name="dept"class="form-control">
                                    <option></option>
                                    <option>Computer Science & Engineering</option>
                                </select>
                            </div>
                    </div>
                 </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputRole" class="control-label">User Role</label>
                            <select name="role" class="form-control" disabled>
                                <option <?php if($this->session->userdata['type'] == 'coordinator'){ echo 'selected';} ?>>Coordinator</option>
                                <option <?php if($this->session->userdata['type'] == 'supervisor'){ echo 'selected';} ?>>Supervisor</option>
                                <option <?php if($this->session->userdata['type'] == 'administrator'){ echo 'selected';} ?>>Administrator</option>
                            </select>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group" >
                            <label for="inputOfficeLocation" class="control-label">Office Location</label>
                            <input name="office" type="text" class="form-control" id="inputOfficeLocation" placeholder="Office Location">
                        </div>
                    </div>
                </div>
                
                <h4 style="font-family:Adobe Ming Std L"> Create new password</h4>
                <div class="hr"><hr></div>
                
                <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputPassword" class=" control-label">Password</label>
                                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                    </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputPasswordCon" class="control-label">Confirm Password</label>
                                <input name="password_con" type="password" class="form-control" id="inputPasswordCon" placeholder="Confirm Password">
                            </div>
                        </div>
                 </div>
                
                <div class="row">
                    <div class="col-sm-offset-0 col-sm-3">
                        <div class="form-group" >
                            <button name="submit" type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </div>
                
            </form>
            
 
        </body>
       
</html>

