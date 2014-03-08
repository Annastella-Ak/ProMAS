<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title><?php if(isset($title)){ echo $title;}else{echo 'ProMAS';} ?></title>

    <!-- Style-sheets -->
    <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <link type="text/css" rel="Stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap_tweaks.css" >
        
    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">ProMAS</a>
                    </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                        <ul class="nav navbar-nav navbar-right">                            
                           <li class="dropdown" id="notification">
                               <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Notifications<span class="badge push_left_bit badge_nav_ie">5</span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#">Notification one one one<br/> sos so</a></li>
                                    <li><a href="#">Notification one</a></li>
                                    <li><a href="#">Notification one</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">See all notification</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" id="announcement">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Announcements<span class="badge push_left_bit badge_nav_ie">54</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification one one one<br/> sos so</a></li>
                                    <li><a href="#">Notification one</a></li>
                                    <li><a href="#">Notification one</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">See all notification</a></li>
                                </ul>
                            </li>                  
                            <li class="dropdown">
                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon push_right_bit glyphicon-user hidden-xs"></span>Admin<b class="caret hidden-xs"></b><span class="glyphicon glyphicon-chevron-down pull-right visible-xs"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="glyphicon push_right_bit glyphicon-user"></span>My profile<span class="glyphicon glyphicon-chevron-right pull-right visible-xs"></span></a></li>
                                    <li><a href="#"><span class="glyphicon push_right_bit glyphicon-pencil"></span>Change password<span class="glyphicon glyphicon-chevron-right pull-right visible-xs"></span></a></li>
                                    <li><a href="#"><span class="glyphicon push_right_bit glyphicon-cog"></span>Preferences<span class="glyphicon glyphicon-chevron-right pull-right visible-xs"></span></a></li>
                                    <li class="divider"></li>
                                    <li class="hidden-xs"><a href="<?php echo site_url(); ?>/access/logout"><span class="glyphicon push_right_bit glyphicon-off"></span>Logout<span class="glyphicon glyphicon-chevron-right pull-right visible-xs"></span></a></li>                                    
                                </ul>                        
                            </li>
                            
                        </ul>
                        <a  href="#" class="btn btn-info navbar-btn btn-block visible-xs" role="button">Logout</a>
                      </div><!-- /nav-bar-collapse -->
            </div>
        </nav>