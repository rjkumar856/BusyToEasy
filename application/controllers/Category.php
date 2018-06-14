<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->library('details');
        $this->load->model('categories');
        $data['activepage']="";
	}
	 
	public function index($slug=''){
	    $data['activepage']="category";
	    
	    //$this->details->sendWay2SMS("9092310791","Testing");
	    
	    $data['check_slug'] = $this->categories->check_slug($slug);
	    if($data['check_slug'] and $data['check_slug'][0]['slug'] == "fitness-trainer-at-home"){
	    $this->load->view('common/header',$data);
		$this->load->view('category/fitness_trainer_at_home',$data);
	    }else if($data['check_slug']){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/view_category',$data);
	    }
	    else{
	        $this->load->view('home_page',$data);
	    }
	}
	
	public function sendSMS(){
	    header('Content-type: application/json');
	     try{
	     $postdata = file_get_contents("php://input");
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status1"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	     
    	     $request = json_decode($postdata);
    	     if(!isset($request->phone) || empty($request->phone) || !isset($request->message) || empty($request->message)){
                        echo json_encode(array("code"=>'203',"status1"=>"error","message"=>"Enter the Mobile Number and Message!"));
                        return true;
                    }
                    
                 $customer_details = array(
                 'phone'   => $request->phone,
                 'message'=> $request->message,
                 'ip'   => $this->details->getClientIP()
                 );
          
            $login_details = $this->details->sendWay2SMS($customer_details['phone'],$customer_details['message']);
            if(isset($login_details) && $login_details){
                
                            echo json_encode(array("code"=>'200',"status"=>"succes","message"=>'Your SMS have been sent Successfully!'));
                            return true;
                            exit();
                }else{
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured:'.$login_details));
                        return true;
                        exit();
                }
        }
        
	   }catch(Exception $ex){
	       echo json_encode(array("code"=>'203',"status"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
	}
	
	
}
