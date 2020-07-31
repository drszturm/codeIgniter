<?php
    header("Access-Control-Allow-Methods: GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    
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
            $this->load->model('Course_model');
        }
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function index_get($id = 0)

            //$this->Main_model->read();
        {
            if($id==0){
                $data = $this->Course_model->list();
            }else{
                $data = $this->Course_model->read($id);
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
            $this->Course_model->insert($input);
         
            
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
            $this->Course_model->update($id,$input);
            
            $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
        }
        
        /**
         * Get All Data from this method.
         *
         * @return Response
         */
        public function index_delete($id)
        {
            $this->Course_model->delete($id);
            
            $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
        }
        
    }
