<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
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
		$this->load->library('email');
		$this->load->database();
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('details');
        $this->load->helper('security');
        $this->load->model('login_form');
        $this->load->model('Mailsend');
	}
	
	
	public function my_bookings(){
	    $data['activepage']="account";
	    
	    if($this->session->userdata('logged_in')){
	        
	        $login_details = $this->login_form->get_login_details_by_id($this->session->userdata('logged_in')['id']);
        if ($login_details && is_array($login_details)){
            $id = $this->session->userdata('logged_in')['id'];
            $data['ongoing_order'] = $this->login_form->get_ongoing_order($id);
            $data['order_history'] = $this->login_form->get_order_history($id);
            
            $this->load->view('common/header',$data);
		    $this->load->view('account/my_bookings',$data);
            
        }else{
            redirect(base_url());
        }
	    
	    }else{
	        redirect(base_url());
	    }
	}
	
	public function my_account(){
	    $data['activepage']="account";
	    
	    if($this->session->userdata('logged_in')){
	        
	        $data['login_details'] = $this->login_form->get_login_details_by_id($this->session->userdata('logged_in')['id']);
	        
        if ($data['login_details'] && is_array($data['login_details'])){
            
            $this->load->view('common/header',$data);
		    $this->load->view('account/my_account',$data);
            
        }else{
            redirect(base_url());
        }
	    
	    }else{
	        redirect(base_url());
	    }
	}
	
	public function signup_submission(){
	    header('Content-type: application/json');
	    try{
	    $postdata = file_get_contents("php://input");
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	         $request = json_decode($postdata);
    	     if(!isset($request->email) || empty($request->email) || !isset($request->name) || empty($request->name) || !isset($request->mobile) || empty($request->mobile) || !isset($request->password) || empty($request->password) || !isset($request->city) || empty($request->city)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Enter all required fields!"));
                        return true;
                    }
         
         $customer_details = array(
         'userid'   => $this->security->xss_clean($request->email),
         'full_name'=> $this->security->xss_clean($request->name),
         'email'   => $this->security->xss_clean($request->email),
         'password'=> md5($request->password),
         'phone'   => $this->security->xss_clean($request->mobile),
         'city'   => $this->security->xss_clean($request->city),
         'address'=> $this->security->xss_clean($request->address),
         'status'   => 'N',
         'ip'   => $this->details->getClientIP()
      );
      
        $login_details = $this->login_form->check_login($customer_details['userid']);
        if ($login_details && is_array($login_details)){
            echo json_encode(array("code"=>'205',"status"=>"error","message"=>"This Email/Mobile is already Registered. Please Login!"));
            return true;
            exit();
        }else{
        $signup_details = $this->login_form->submit_signup($customer_details);
        
        if(isset($signup_details) && $signup_details){
                        echo json_encode(array("code"=>'200',"status"=>"success","message"=>'You have Signed up Successfully. Now you can login using Your Email and Password!'));
                        return true;
                        exit();
            
            }else{
                    echo json_encode(array("code"=>'203',"status"=>"error","message"=>'Server Error Occured'));
                    return true;
                    exit();
            }
        }
        }
	   }catch(Exception $ex){
	       echo json_encode(array("code"=>'203',"status"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
	}
	
	public function user_update(){
	    //header('Content-type: application/json');
	    try{
	    $postdata = file_get_contents("php://input");
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
            exit();
        }else{
	         $request = json_decode($postdata);
    	     if(!isset($request->email) || empty($request->email) || !isset($request->name) || empty($request->name) || !isset($request->mobile) || empty($request->mobile) || !isset($request->city) || empty($request->city)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Fill all the required fields!"));
                        return true;
                        exit();
                    }
         
         $customer_details = array(
         'full_name'=> $this->security->xss_clean($request->name),
         'email'   => $this->security->xss_clean($request->email),
         'phone'   => $this->security->xss_clean($request->mobile),
         'city'   => $this->security->xss_clean($request->city),
         'address'=> $this->security->xss_clean($request->address),
         'ip'   => $this->details->getClientIP()
        );
        
        $userID =$this->session->userdata('logged_in')['id'];
      
        $update_details_mobile = $this->login_form->check_mobile($userID,$customer_details['phone']);
        $update_details_email = $this->login_form->check_email($userID,$customer_details['email']);
        
        if ($update_details_mobile && is_array($update_details_mobile)){
            echo json_encode(array("code"=>'205',"status"=>"error","message"=>"This Mobile is already Registered with other user."));
            return true;
            exit();
        }else if ($update_details_email && is_array($update_details_email)){
            echo json_encode(array("code"=>'205',"status"=>"error","message"=>"This Email is already Registered with other user."));
            return true;
            exit();
        }else{
        $signup_details = $this->login_form->update_userDetails($userID,$customer_details);
        
        if(isset($signup_details) && $signup_details){
                        echo json_encode(array("code"=>'200',"status"=>"success","message"=>'Your Details updated successfully!'));
                        return true;
                        exit();
            
            }else{
                    echo json_encode(array("code"=>'203',"status"=>"error","message"=>'Server Error Occured'));
                    return true;
                    exit();
            }
        }
        }
	   }catch(Exception $ex){
	       echo json_encode(array("code"=>'203',"status"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
	}
	
	public function login_submission(){
	    header('Content-type: application/json');
	    try{
	    $postdata = file_get_contents("php://input");
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	         $request = json_decode($postdata);
    	     if(!isset($request->user_name) || empty($request->user_name) || !isset($request->password) || empty($request->password)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Enter an Email/Mobile & Password!"));
                        return true;
                    }
         
         $customer_details = array(
         'userid'   => $this->security->xss_clean($request->user_name),
         'password'=> $this->security->xss_clean($request->password)
         );
      
        $login_details = $this->login_form->get_login_details($customer_details['userid']);
        if ($login_details && is_array($login_details)){
            
                    if($login_details[0]['password'] === md5($customer_details['password'])){
                        if($login_details[0]['status'] === 'Y'){
                        $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                        "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],
                        "password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                        $this->session->set_userdata('logged_in', $session_user_data);
                        echo json_encode(array("code"=>'200',"status"=>"success","message"=>'You have logged in Successfully!'));
                        return true;
                        exit();
                        }else{
                        echo json_encode(array("code"=>'202',"status"=>"error","message"=>'User ID is disabled by Admin. Contact admin to Enbale.'));
                        return true;
                        exit();
                        }
                        
                        }else{
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>'You entered Wrong Password'));
                        return true;
                        exit();
                    }
            
            }else{
                    echo json_encode(array("code"=>'204',"status"=>"error","message"=>'Invalid User Name'));
                    return true;
                    exit();
            }
        }
	   }catch(Exception $ex){
	       header('Content-type: application/json');
	       echo json_encode(array("code"=>'203',"status"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
	}
	
	
	
	public function forgot_password(){
	    header('Content-type: application/json');
	    try{
	    $postdata = file_get_contents("php://input");
	     if(empty($postdata)){
            echo json_encode(array("code"=>'202',"status"=>"error","message"=>"Empty Request data!"));
            return true;
        }else{
	         $request = json_decode($postdata);
    	     if(!isset($request->user_name) || empty($request->user_name)){
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Enter an Email/Mobile Number!"));
                        return true;
                    }
         
         $customer_details = array(
         'userid'   => $this->security->xss_clean($request->user_name)
         );
      
        $login_details = $this->login_form->get_login_details($customer_details['userid']);
        if ($login_details && is_array($login_details)){
            $email = $login_details[0]['email'];
            $mobile = $login_details[0]['phone'];
            
                    $randomletter = substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0, 8);
                    $request_details = $this->login_form->Reset_Password(array('id'=>$login_details[0]['id'],'password'=>$randomletter));
            
                    if($request_details){
                            $subject='Password Resetted';
                            $message='New password is : '.$randomletter.'<br> Use this password to login into https://www.webliststore.com/busytoeasy/ website.';
                            $this->Mailsend->send_mail('form@webliststore.com',$email,$subject,$message);
                            
                            echo json_encode(array("code"=>'200',"status"=>"success","message"=>"The New password has been sent to your registered Email ID!"));
                            return true;
                            exit();
                        }else{
                        echo json_encode(array("code"=>'203',"status"=>"error","message"=>"Error:".$request_details));
                        return true;
                        exit();
                    }
            
            }else{
                    echo json_encode(array("code"=>'204',"status"=>"error","message"=>'Entered Email/Mobile Number does not exist. Create an account Now!'));
                    return true;
                    exit();
            }
        }
	   }catch(Exception $ex){
	       header('Content-type: application/json');
	       echo json_encode(array("code"=>'203',"status"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
	}
	
	public function logout(){
	    $this->session->unset_userdata('logged_in');
	    redirect(base_url());
	}


}