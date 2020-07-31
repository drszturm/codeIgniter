<?php
    
    require APPPATH . 'libraries/REST_Controller.php';
    
    class Course extends REST_Controller {
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function index_get($id = 0)
        {
            if(!empty($id)){
                $data = $this->db->get_where("courses", ['id' => $id])->row_array();
            }else{
                $data = $this->db->get("courses")->result();
            }
            
            $this->response($data, REST_Controller::HTTP_OK);
        }
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function index_post()
        {
            $input = $this->input->post();
            $this->db->insert('courses',$input);
            
            $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
        }
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function index_put($id)
        {
            $input = $this->put();
            $this->db->update('courses', $input, array('id'=>$id));
            
            $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
        }
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function index_delete($id)
        {
            $this->db->delete('courses', array('id'=>$id));
            
            $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
        }
        
    }
