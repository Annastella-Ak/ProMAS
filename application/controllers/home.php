<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class Home extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        
        if($this->session->userdata('type')=='super'){
            
            //prepare data to be sent to view
            $data['user'] = 'Super user';
            $data['sidebar'] = 'templates/side_bar';
            
            //load user's views
            $this->load->view('templates/header');
            $this->load->view('templates/side_bar');
        }
        
        else if($this->session->userdata['type']=='administrator'){
            
            //prepare data to be sent to view
            $data['user'] = 'Administrator';
            $data['sidebar'] = 'templates/side_bar';
            
            //load user's views
            $this->load->view('templates/header');
             $this->load->view('templates/side_bar');
            
        }
        else if($this->session->userdata['type']=='coordinator'){
            
            //prepare data to be sent to view
            $data['user'] ='Coordinator';
            $data['sidebar'] = 'templates/side_bar';
            
            //load user's views
            $this->load->view('templates/header');
            $this->load->view('templates/side_bar');
        }
        else if($this->session->userdata['type']=='supervisor'){
            
            //prepare data to be sent to view
            $data['user'] = 'Supervisor';
            $data['sidebar'] = 'templates/side_bar';
            
            //load user's views
            $this->load->view('templates/header');
            $this->load->view('templates/side_bar');
            
            
        }
        else if($this->session->userdata['type']=='student'){
            
            //prepare data to be sent to view
            $data['user'] = 'Student';
            $data['sidebar'] = 'templates/side_bar';
            
            //load user's views
            $this->load->view('templates/header');
            $this->load->view('templates/side_bar');
        }
        else{
            
            redirect('access/login','location');
        }
        
        
            
        }//end function index
    
        public function complete_reg(){
            
            if(($this->session->userdata['type']) == 'student'){
                $this->load->view('manage_users/edit_profile_stud');
            }
            
            else{
                
                $this->load->view('manage_users/edit_profile_non_stud');
            }
                
            
            
        }//end function complete registration
    
    
        }

?>
