<?php

/*
 * Author: Devid Felix
 * 
 */

class Password extends CI_Controller{
    
    function __construct() {
        parent::__construct();
       $this->load->model('access/manage_users');
    }


    
    
    
    public function index(){
        
                 
        $this->load->view('access/forgot_password');
        
    }
            
    public function forgot_password(){
        
        $this->form_validation->set_rules("email","Email","required");
        $this->form_validation->set_message('required','%s is required');
        
       if($this->form_validation->run() !== FALSE){
        
         
           //setting a field to be verified on db
           $data = array(
               'email'=>$_POST['email']
           );
           
           //verifying email on non student table
                $user_data['data'] =$this->manage_users->get_non_student($data);

            
           if($user_data['data'] == NULL){
             
            //verfying email on student table
           $user_data['data'] =$this->manage_users->get_student($data);
              
           
           }//end if $user_data['data'] == NULL
           
           if($user_data['data'] != NULL){
               
               $email = $user_data['data'][0]['email'];
               $user = ucfirst($user_data['data'][0]['first_name']);
               
               //generate a token
               $token = md5(microtime (TRUE)*100000);
               //hash token to be stored on db
               $token_to_db = hash('sha256',$token);
               //expire time to be stored on db
               $expire_time = time() + 3600;
               
               //array for updating database
               $data = array(
                   'token_expire' => $expire_time,
                   'hashed_token' => $token_to_db 
               );
               
               if( isset($user_data['data'][0]['type']) && isset($user_data['data'][0]['user_id'])){
                   
                   $user_id = $user_data['data'][0]['user_id'];
                   $result = $this->manage_users->update_non_student($user_id,$data);
                   $user_type = base64_encode('non_student');
               }
               
               
               else{
                   
                   $user_id = $user_data['data'][0]['student_id'];
                   $result = $this->manage_users->update_student($user_id,$data);
                   $user_type = base64_encode('student');
               }
               
               
               
            if($result){
                   //user id and token to be sent to email
                   $user_id = base64_encode($user_id); 
                   $token_to_email= $token;

                   $from = "dazyd2f@gmail.com";
                   $to = "dazyd2f@hotmail.com";
                   $subject = "ProMAS-Change password";
                   $message = " 
                        <html>
                        <head>
                        <title>ProMAS|Change password</title>
                        </head>
                        <body>
                                <h5>Hello $user,</h5>    
                                <p>Please visit the following link to change your password</p>
                                <a href='http://localhost/ProMAS_4/index.php/access/password/change_password/$user_type/$user_id/$token_to_email'>
                                    Click here to change your password</a>
                                <p>This verification code will expire in 1hour.</p>
                                <p>Sincerely,</p>
                                <p>ProMAS admin.</p>
                        </body></html>";

                    //sending email
                   $email_result =  $this->send_email($from,$to,$subject,$message);

               
                   if($email_result){
                       //on success sending email
                       $data['message'] = "Verification code has been sent, Check your email ";
                       $this->load->view('access/forgot_password',$data);

               
                   }//end inner if $email_result
               
                   else {
                       //on failure sending email
                       $data['message'] = "Email has not been sent, Please again";
                       $this->load->view('access/forgot_password',$data);

                   }//end inner else
               
    
                   }//end if $result
       
               
                   else{
                       //on failure to store 
                       $data['message']='Failed to store verification code on db,';
                       $this->load->view('access/forgot_password', $data);

                   
                   }//end else if $result
               
           
       
                   }//end if userdata != NULL
        
                   else{
                       $data['message'] = "Please use registerd email";
                       $this->load->view('access/forgot_password',$data);
                   }//end outer else
           
                   }//end if $this->form_validation->run() !== FALSE
        
                    else{
            
                        $this->load->view('access/forgot_password');
        
                        
                    }// end else $this->form_validation->run() !== FALSE
        
                    }//end function forgot
    
    
                    public function change_password($user_type,$user_id,$hashed_token){
                        
                        //decoding user id and user type
                        $user_type = base64_decode($user_type);
                        $user_id = base64_decode($user_id);
                        
                        //hash token to be matched with db
                        $token_to_email = hash('sha256', $hashed_token);
         
                        
                        if($user_type=='student'){
                            $data = array(
                                'student_id'=>$user_id,
                            );
                        
                            $user_data['data'] =   $this->manage_users->get_student($data);
                            
                        }// end if $user_type=='student'
                        elseif ($user_type=='non_student') {
                            
                            $data = array(
                                'user_id'=>$user_id,
                            );
                        
                            $user_data['data'] =   $this->manage_users->get_non_student($data);
                            
                        }//// end else if $user_type=='non_student'
                        
                        $token_expire = $user_data['data'][0]['token_expire'];
                        $token_to_db = $user_data['data'][0]['hashed_token'];
                        
                        if(($token_expire < time()) &&($token_to_db == $token_to_email)){
                            
                            $data['user_id'] =$user_id;
                            $data['user_type']=$user_type;
                            $data['message']= " Hello " . ucfirst($user_data['data'][0]['first_name']).",create your new password";
                            
                            $this->load->view('access/change_password', $data);
                        
                        }
                        
                        else{

                            //else load the forgor password view with the expire time error on it
                            $data['message']= 'Verification code has expired, Send new one';
                            $this->load->view('access/forgot_password',$data);
                            
                            
                        }
                        
                        
                        
                        
                    }//end function change password
                    
    
    
                    public function validate_password(){
        
                       $this->form_validation->set_rules("password","Field","required");
                       $this->form_validation->set_rules("password_con","Field","required");
                       $this->form_validation->set_message('required','%s is required');

                       if($this->form_validation->run() !== FALSE){

                           if($_POST['password'] == $_POST['password_con']){

                               $data = array(
                                   'password' => md5($_POST['password'])
                               );
                               
                               
                               if($_POST['user_type']=='student'){
                            
                                   
                                   $user_data['data'] =   $this->manage_users->update_student($_POST['user_id'], $data);
                            
                                }// end if $user_type=='student'
                        
                                elseif ($_POST['user_type']=='non_student') {
                      
                                    
                                    $user_data['data'] =   $this->manage_users->update_non_student($_POST['user_id'],$data);
                    
                        
                                }//// end else if $user_type=='non_student'

         
                               
                                if($user_data['data'] != NULL){
                                 
                                    $data['message']= "Password changed successful, <a href='#'>Click here to login</a>";
                                    
                                    $this->load->view('access/change_password', $data);
                                }//

                                }// end if $_POST['password'] == $_POST['password_con']

                                else{

                                    $data['message']= 'Password do not match';
                                    $this->load->view('access/change_password', $data);

                                }// end else $_POST['password'] == $_POST['password_con']

                                }//end if $this->form_validation->run() !== FALSE


                                else {

                                    $this->load->view('access/change_password');

                                }

                                }//END FUNCTTION VALIDATE

        
    


    
                                public function send_email($from,$to,$subject, $message ){

                                    $config = array(
                                        'protocol' => 'smtp',
                                        'smtp_host' => 'ssl://smtp.googlemail.com',
                                        'smtp_port' => 465,
                                        'smtp_user' => 'dazyd2f@gmail.com',
                                        'smtp_pass' => '04078618',
                                        'mailtype' => 'html'

                                    );

                                    $this->load->library('email', $config);

                                    // this will bind your attributes to email library
                                    $this->email->set_newline("\r\n");
                                    $this->email->from($from,'ProMAS');
                                    $this->email->to($to);
                                    $this->email->subject($subject);
                                    $this->email->message($message);

                                    // send your email. if it produce an error it will print 'Fail to send your message!' for you
                                    if($this->email->send()) {
                                        return TRUE;
                                    }
                                    else {

                                        return FALSE;
                                    }


                                }
    
    
    
}


?>
