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
        $this->load->model('mailsend');
        $data['activepage']="";
	}
	 
	public function index($slug=''){
	    $data['activepage']="category";
	    $data['check_slug'] = $this->categories->check_slug($slug);
	    
	    if($data['check_slug'] and $data['check_slug'][0]['slug'] == "yoga-trainer-at-home"){
	    $this->load->view('common/header',$data);
		$this->load->view('category/yoga_trainer_at_home',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "fitness-trainer-at-home"){
	    $this->load->view('common/header',$data);
		$this->load->view('category/fitness_trainer_at_home',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "dietician"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/dietician',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "physiotherapy-at-home"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/physiotherapy_at_home',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "salon-at-home"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/salon_at_home',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "spa-at-home-for-women"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/spa_at_home_for_women',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "sofa-cleaning"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/sofa_cleaning',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "bathroom-deep-cleaning"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/bathroom_deep_cleaning',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "home-deep-cleaning"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/home_deep_cleaning',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "kitchen-deep-cleaning"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/kitchen_deep_cleaning',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "carpet-cleaning"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/carpet_cleaning',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "carpenter"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/carpenter',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "plumber"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/plumber',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "electrician"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/electrician',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "ac-service-and-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/ac_service_and_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "mobile-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/mobile_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "laptop-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/laptop_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "microwave-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/microwave_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "refrigerator-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/refrigerator_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "washing-machine-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/washing_machine_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "water-purifier-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/water_purifier_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "iphone-ipad-mac-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/iphone_ipad_mac_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "tv-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/tv_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "water-heater-repair"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/water_heater_repair',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "packers-movers"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/packers_movers',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "pest-control"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/pest_control',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "renovation"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/renovation',$data);
	    }else if($data['check_slug'] and $data['check_slug'][0]['slug'] == "house-painters"){
	        $this->load->view('common/header',$data);
		    $this->load->view('category/house_painters',$data);
	    }else if($data['check_slug']){
	        $this->load->view('common/header',$data);
	        $this->load->view('category/view_category',$data);
	    }
	    else{
	        $this->load->view('home_page',$data);
	    }
	}
	
	public function submit_yoga_trainer(){
	    header('Content-type: application/json');
	     try{
	     $this->load->model('login_form');
	     $postdata = file_get_contents("php://input");
	     $user_id = '';
	     $email = '';
	     
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	     
    	     $request = json_decode($postdata);
    	     if(!isset($request->mobile) || empty($request->mobile) || !isset($request->address) || empty($request->address)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Enter the Mobile Number and Address!"));
                        return true;
                    }
                    
            if(!isset($request->gender) || !isset($request->trainee_age) || !isset($request->time_slot) || !isset($request->estimated_budget) || !isset($request->how_soon_start)
            || !isset($request->cat_id) || !isset($request->getin_touch)){
                        echo json_encode(array("code"=>'210',"status"=>"error","message"=>"Please select all the fields!"));
                        return true;
                    }
                    
                    if($this->session->userdata('logged_in')){
                       $user_id = $this->session->userdata('logged_in')['id'];
                    }else{
                        $login_details = $this->login_form->check_login($request->mobile);
                        if($login_details and is_array($login_details)){
                            $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                                "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],"password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                            $this->session->set_userdata('logged_in', $session_user_data);
                            $user_id = $login_details[0]['id'];
                            $email = $login_details[0]['email'];
                        }else{
                            $customer_details = array(
                                 'userid'   => $this->security->xss_clean($request->mobile),
                                 'full_name'=> 'Guest',
                                 'email'   => '',
                                 'password'=> md5(uniqid()),
                                 'phone'   => $this->security->xss_clean($request->mobile),
                                 'city'   => '',
                                 'address'=> '',
                                 'type'   => 'otp',
                                 'status'   => 'Y',
                                 'ip'   => $this->details->getClientIP()
                                );
                              
                              $signup_details = $this->login_form->submit_signup($customer_details);
                              if($signup_details){
                                    $login_details = $this->login_form->check_login($request->mobile);
                                    if($login_details and is_array($login_details)){
                                        $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                                            "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],"password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                                        $this->session->set_userdata('logged_in', $session_user_data);
                                        $user_id = $login_details[0]['id'];
                                        $email = $login_details[0]['email'];
                                    }else{
                                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured'));
                                        return true;
                                        exit();
                                    }
                              }else{
                                    echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured'));
                                    return true;
                                    exit();
                                    }
                        }
                        
                    }
                    
                $questions = json_encode(array('Your gender'=>$this->security->xss_clean($request->gender),
                'Age of the trainee'=>$this->security->xss_clean($request->trainee_age),
                'Please select time slot for yoga sessions'=>$request->time_slot,
                'Your estimated budget (12 sessions a month)'=>$this->security->xss_clean($request->estimated_budget),
                'How soon would you like to start?'=>$this->security->xss_clean($request->how_soon_start),
                'Mobile'=>$this->security->xss_clean($request->mobile),
                'Address'=>$this->security->xss_clean($request->address)
                ));
                
                $mobile = $this->security->xss_clean($request->mobile);
                    
                 $customer_details = array(
                    'user_id' => $user_id,
                    "cat_id" => $this->security->xss_clean($request->cat_id),
                    'mobile' => $this->security->xss_clean($request->mobile),
                    "questions" => $questions,
                    "address" => $this->security->xss_clean($request->address),
                    "landmark" => $this->security->xss_clean($request->address),
                    "flat_no" => $this->security->xss_clean($request->address),
                    'getin_touch'=>$this->security->xss_clean($request->getin_touch),
                    'email' => $email,
                    'order_date' => date("Y-m-d"),
                    'order_time' => date("H:i:s"),
                    'allocated_to' => '',
                    'description' => 'You’ll receive custom quotations from interested professionals within 24 hours through SMS & Email.',
                    'status' => 'Not Allocated',
                    'ip_address' => $this->details->getClientIP()
                );
                
                $make_order = $this->categories->make_order($customer_details);
            if(isset($make_order) && $make_order){
                
                    
                    if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $to = $email;
                        $from = "form@webliststore.com";
                        $cc = "form@webliststore.com";
                        $subject = "New Booking-BusyToEasy";
                        $message = "Your order has been placed Successfully!";
                        $this->mailsend->send_mail($from,$to,$subject,$message,$cc);
                    }
                    
                    $sms = "We have received your request for yoga trainer at home. Matching instructors will send you custom quotations. Review their profiles and contact them for free.";
                    //$login_details = $this->details->sendLocalSMS($mobile,$sms);
                
                    echo json_encode(array("code"=>'200',"status"=>"success","message"=>'Your order has been placed Successfully!'));
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
	
	public function submit_dietician(){
	    header('Content-type: application/json');
	     try{
	     $this->load->model('login_form');
	     $postdata = file_get_contents("php://input");
	     $user_id = '';
	     $email = '';
	     
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	     
    	     $request = json_decode($postdata);
    	     if(!isset($request->mobile) || empty($request->mobile) || !isset($request->address) || empty($request->address)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Enter the Mobile Number and Address!"));
                        return true;
                    }
                    
                    
                if(!isset($request->gender) || !isset($request->trainee_age) || !isset($request->preferred_package) || !isset($request->need_dietician) || !isset($request->prefer_consulting) || !isset($request->how_soon_start)
                    || !isset($request->cat_id) || !isset($request->getin_touch)){
                        echo json_encode(array("code"=>'210',"status"=>"error","message"=>"Please select all the fields!"));
                        return true;
                    }
                    
                    if($this->session->userdata('logged_in')){
                       $user_id = $this->session->userdata('logged_in')['id'];
                    }else{
                        $login_details = $this->login_form->check_login($request->mobile);
                        if($login_details and is_array($login_details)){
                            $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                                "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],"password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                            $this->session->set_userdata('logged_in', $session_user_data);
                            $user_id = $login_details[0]['id'];
                            $email = $login_details[0]['email'];
                        }else{
                            $customer_details = array(
                                 'userid'   => $this->security->xss_clean($request->mobile),
                                 'full_name'=> 'Guest',
                                 'email'   => '',
                                 'password'=> md5(uniqid()),
                                 'phone'   => $this->security->xss_clean($request->mobile),
                                 'city'   => '',
                                 'address'=> '',
                                 'type'   => 'otp',
                                 'status'   => 'Y',
                                 'ip'   => $this->details->getClientIP()
                                );
                              
                              $signup_details = $this->login_form->submit_signup($customer_details);
                              if($signup_details){
                                    $login_details = $this->login_form->check_login($request->mobile);
                                    if($login_details and is_array($login_details)){
                                        $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                                            "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],"password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                                        $this->session->set_userdata('logged_in', $session_user_data);
                                        $user_id = $login_details[0]['id'];
                                        $email = $login_details[0]['email'];
                                    }else{
                                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured'));
                                        return true;
                                        exit();
                                    }
                              }else{
                                    echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured'));
                                    return true;
                                    exit();
                                    }
                        }
                        
                    }
                    
                $questions = json_encode(array("Your gender"=>$this->security->xss_clean($request->gender),
                "Need dietician's help with"=>$this->security->xss_clean($request->need_dietician),
                "Your age"=>$this->security->xss_clean($request->trainee_age),
                'How do you prefer consulting a dietician?'=>$this->security->xss_clean($request->prefer_consulting),
                'Please select your preferred package'=>$this->security->xss_clean($request->preferred_package),
                'How soon would you like to hire?'=>$this->security->xss_clean($request->how_soon_start),
                'mobile'=>$this->security->xss_clean($request->mobile),
                'address'=>$this->security->xss_clean($request->address)
                ));
                
                $mobile = $this->security->xss_clean($request->mobile);
                    
                 $customer_details = array(
                    'user_id' => $user_id,
                    "cat_id" => $this->security->xss_clean($request->cat_id),
                    'mobile' => $this->security->xss_clean($request->mobile),
                    "questions" => $questions,
                    "address" => $this->security->xss_clean($request->address),
                    "landmark" => $this->security->xss_clean($request->address),
                    "flat_no" => $this->security->xss_clean($request->address),
                    'getin_touch'=>$this->security->xss_clean($request->getin_touch),
                    'email' => $email,
                    'order_date' => date("Y-m-d"),
                    'order_time' => date("H:i:s"),
                    'allocated_to' => '',
                    'description' => 'You’ll receive custom quotations from interested professionals within 24 hours through SMS & Email.',
                    'status' => 'Not Allocated',
                    'ip_address' => $this->details->getClientIP()
                );
                
                $make_order = $this->categories->make_order($customer_details);
            if(isset($make_order) && $make_order){
                
                    
                    if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $to = $email;
                        $from = "form@webliststore.com";
                        $cc = "form@webliststore.com";
                        $subject = "New Booking-BusyToEasy";
                        $message = "Your order has been placed Successfully!";
                        $this->mailsend->send_mail($from,$to,$subject,$message,$cc);
                    }
                    
                    $sms = "We have received your request for yoga trainer at home. Matching instructors will send you custom quotations. Review their profiles and contact them for free.";
                    //$login_details = $this->details->sendLocalSMS($mobile,$sms);
                
                    echo json_encode(array("code"=>'200',"status"=>"success","message"=>'Your order has been placed Successfully!'));
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
	
	public function submit_physiotherapy_at_home(){
	    header('Content-type: application/json');
	     try{
	     $this->load->model('login_form');
	     $postdata = file_get_contents("php://input");
	     $user_id = '';
	     $email = '';
	     
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	     
    	     $request = json_decode($postdata);
    	     if(!isset($request->mobile) || empty($request->mobile) || !isset($request->address) || empty($request->address)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Enter the Mobile Number and Address!"));
                        return true;
                    }
                    
                if(!isset($request->gender) || !isset($request->date) || !isset($request->house_flat_no) || !isset($request->landmark) || !isset($request->preferred_gender)
                || !isset($request->patient_age) || !isset($request->physiotherapist_for) || !isset($request->time) || !isset($request->cat_id) || !isset($request->getin_touch)){
                        echo json_encode(array("code"=>'210',"status"=>"error","message"=>"Please select all the fields!"));
                        return true;
                    }
                    
                    if($this->session->userdata('logged_in')){
                       $user_id = $this->session->userdata('logged_in')['id'];
                    }else{
                        $login_details = $this->login_form->check_login($request->mobile);
                        if($login_details and is_array($login_details)){
                            $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                                "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],"password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                            $this->session->set_userdata('logged_in', $session_user_data);
                            $user_id = $login_details[0]['id'];
                            $email = $login_details[0]['email'];
                        }else{
                            $customer_details = array(
                                 'userid'   => $this->security->xss_clean($request->mobile),
                                 'full_name'=> 'Guest',
                                 'email'   => '',
                                 'password'=> md5(uniqid()),
                                 'phone'   => $this->security->xss_clean($request->mobile),
                                 'city'   => '',
                                 'address'=> '',
                                 'type'   => 'otp',
                                 'status'   => 'Y',
                                 'ip'   => $this->details->getClientIP()
                                );
                              
                              $signup_details = $this->login_form->submit_signup($customer_details);
                              if($signup_details){
                                    $login_details = $this->login_form->check_login($request->mobile);
                                    if($login_details and is_array($login_details)){
                                        $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                                            "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],"password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                                        $this->session->set_userdata('logged_in', $session_user_data);
                                        $user_id = $login_details[0]['id'];
                                        $email = $login_details[0]['email'];
                                    }else{
                                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured'));
                                        return true;
                                        exit();
                                    }
                              }else{
                                    echo json_encode(array("code"=>'203',"status"=>"error","message"=>'SMS Server Error Occured'));
                                    return true;
                                    exit();
                                    }
                        }
                        
                    }
                    
                $questions = json_encode(array('Gender of patient'=>$this->security->xss_clean($request->gender),
                'What do you need the physiotherapist for?'=>$this->security->xss_clean($request->physiotherapist_for),
                'Select the preferred gender of the physiotherapist?'=>$this->security->xss_clean($request->preferred_gender),
                'Age of patient'=>$this->security->xss_clean($request->patient_age),
                'Address'=>$this->security->xss_clean($request->address),
                'House/Flat No.'=>$this->security->xss_clean($request->house_flat_no),
                'Landmark'=>$this->security->xss_clean($request->landmark),
                'Mobile'=>$this->security->xss_clean($request->mobile),
                'Date'=>$this->security->xss_clean($request->date),
                'Time'=>$this->security->xss_clean($request->time)
                ));
                
                $mobile = $this->security->xss_clean($request->mobile);
                    
                 $customer_details = array(
                    'user_id' => $user_id,
                    "cat_id" => $this->security->xss_clean($request->cat_id),
                    'mobile' => $this->security->xss_clean($request->mobile),
                    "questions" => $questions,
                    "address" => $this->security->xss_clean($request->address),
                    "landmark" => $this->security->xss_clean($request->landmark),
                    "flat_no" => $this->security->xss_clean($request->house_flat_no),
                    'getin_touch'=>$this->security->xss_clean($request->getin_touch),
                    'email' => $email,
                    'order_date' => date("Y-m-d"),
                    'order_time' => date("H:i:s"),
                    'allocated_to' => '',
                    'description' => 'You’ll receive custom quotations from interested professionals within 24 hours through SMS & Email.',
                    'status' => 'Not Allocated',
                    'ip_address' => $this->details->getClientIP()
                );
                
                $make_order = $this->categories->make_order($customer_details);
            if(isset($make_order) && $make_order){
                
                    
                    if(isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $to = $email;
                        $from = "form@webliststore.com";
                        $cc = "form@webliststore.com";
                        $subject = "New Booking-BusyToEasy";
                        $message = "Your order has been placed Successfully!";
                        $this->mailsend->send_mail($from,$to,$subject,$message,$cc);
                    }
                    
                    $sms = "We have received your request for yoga trainer at home. Matching instructors will send you custom quotations. Review their profiles and contact them for free.";
                    //$login_details = $this->details->sendLocalSMS($mobile,$sms);
                
                    echo json_encode(array("code"=>'200',"status"=>"success","message"=>'Your order has been placed Successfully!'));
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
	
	public function sendSMS(){
	    header('Content-type: application/json');
	     try{
	     $postdata = file_get_contents("php://input");
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
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
          
            //$login_details = $this->details->sendWay2SMS($customer_details['phone'],$customer_details['message']);
            $login_details = $this->details->sendLocalSMS($customer_details['phone'],$customer_details['message']);
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
