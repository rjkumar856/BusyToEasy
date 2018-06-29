<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget extends CI_Controller {
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
        $this->load->model('widgets');
        $data['activepage']="";
	}
	 
	public function index(){
	    $data['activepage']="widget";
	    $this->load->view('common/header',$data);
	    //$this->load->view('common/middle',$data);
		$this->load->view('widget/view_widget',$data);
		$this->load->view('common/footer',$data);
	}
}