<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**

*

*/

class Course_model extends CI_Model

{
	public function __construct() {
            parent::__construct();
            $this->load->database();
            
        }


	public function read($id = 0){

   
	
            if(!empty($id)){
                $data = $this->db->get_where("courses", ['id' => $id])->row_array();
            }else{
                $data = $this->db->get("courses")->result();
            }

       return $data;

   }



   public function insert($input){

       

       $this->name    = $data['name']; // please read the below note

       $this->description  = $data['description'];

       $this->mainimgpath = $data['mainimgpath'];



       if(   $this->db->insert('courses',$input))

       {    

           return 'Data is inserted successfully';

       }

         else

       {

           return "Error has occured";

       }

   }



   public function update($id,$data){

   
   		 $this->db->update('courses', $input, array('id'=>$id));
   		$this->name    = $data['name']; // please read the below note

       $this->description  = $data['description'];

       $this->mainimgpath = $data['mainimgpath'];

       $result = $this->db->update('courses',$this,array('id' => $id));

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

   

     $this->db->delete('courses', array('id'=>$id));

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