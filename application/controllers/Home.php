<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
        $data['activepage']="";
	}
	 
	public function index(){
	    $data['activepage']="home";
		$this->load->view('home_page',$data);
	}
	
	//public function cat(){
	  //  $data['activepage']="home/categories";
	   // $this->load->view('categories',$data);
    //}
}
