<?php

/*
 * Author: Devid Felix
 * 
 */

class Logout extends CI_Controller{
    
    public function index() {
        
        //destroy user session and redirect to the login page
        $this->session->sess_destroy();
        setcookie('remember_promas', 'promas', 1,'/');;
        
        unset($_COOKIE['remember_promas']);
        
        redirect('access/login', 'location');
    }
}

?>