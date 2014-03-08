<?php
/*
 * Author: Devid Felix
 * 
 */



 class Manage_users extends CI_Model{
    
     //matches existence of a a non_student user using username and password
        function match_non_student($username, $password){
            $query = $this->db->get_where('non_student_users', array('username' => $username, 'password' => $password));
                if ($query->num_rows() > 0){
                    return $query->result_array();;
                }
        }
        
        //matches existence of a student user using registration_no and password
        function match_student($registration_no, $password){
            $query = $this->db->get_where('students', array('registration_no' => $registration_no, 'password' => $password));
                if ($query->num_rows() > 0){
                    return $query->result_array();;
                }
        }
        
        
        //assuming email will be unique in all two tables
        public function get_student($data){
            
            $query_stud = $this->db->get_where('students',$data);
            
            if($query_stud->num_rows()>0 ){
                
                return $query_stud->result_array();
            }
            
            
        }//end function get_student
        
        public function get_non_student($data){
            
            $query_non_stud = $this->db->get_where('non_student_users',$data);
        
            if($query_non_stud->num_rows()>0 ){
                
                return $query_non_stud->result_array();
            }
            
        }//end function get_non_student
        
        public function update_student($user_id,$data){
            
            
            $this->db->where('students.student_id', $user_id);
            $result_stud = $this->db->update('students', $data); 
            
            return $result_stud;
        }
        
        public function update_non_student($user_id,$data){
            
            $this->db->where('non_student_users.user_id', $user_id);
            $result_non_stud =  $this->db->update('non_student_users', $data);
            
            return $result_non_stud;
        }
        
         
   
    
}

?>
