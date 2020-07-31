<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/**

*

*/

class Course_model extends CI_Model

{

public function read(){

   

       $query = $this->db->query("select * from courses");

       return $query->result_array();

   }



   public function insert($data){

       

       $this->course_name    = $data['name']; // please read the below note

       $this->course_description  = $data['description'];

       $this->course_mainimgpath = $data['mainimgpath'];



       if($this->db->insert('course',$this))

       {    

           return 'Data is inserted successfully';

       }

         else

       {

           return "Error has occured";

       }

   }



   public function update($id,$data){

   

   		$this->course_name    = $data['name']; // please read the below note

       $this->course_description  = $data['description'];

       $this->course_mainimgpath = $data['mainimgpath'];

       $result = $this->db->update('tbl_user',$this,array('user_id' => $id));

       if($result)

       {

           return "Data is updated successfully";

       }

       else

       {

           return "Error has occurred";

       }

   }



   public function delete($id){

   

       $result = $this->db->query("delete from `courses` where id = $id");

       if($result)

       {

           return "Data is deleted successfully";

       }

       else

       {

           return "Error has occurred";

       }

   }



}