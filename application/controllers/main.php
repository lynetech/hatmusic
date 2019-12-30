<?php
class Main extends CI_controller{
	
	 function __construct()
    {
        parent::__construct();
       
        //$this->load->model('Admin_model');
        //$this->load->model('EvoPHP_model');
        //$this->load->database();
		$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['footer_resource'] = $this->load->view('templates/footer_resource');
 

    }
	
		public function index($page='Home'){
		
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        } 
		$data['page_title'] =ucfirst($page);
		//$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['nav'] = $this->load->view('templates/navbar');
		$this->load->view('pages/Home',$data);
		//$data['footer_resource'] = $this->load->view('templates/footer_resource');
		
		//$this->load->view('templates/header');
		$this->load->view('templates/footer');
		
	}
	public function zik($page='music'){
		
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        } 
		$data['page_title'] =ucfirst($page);
		//$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['nav'] = $this->load->view('templates/navbar');
		$this->load->view('pages/'.$page,$data);
		//$data['footer_resource'] = $this->load->view('templates/footer_resource');

		
		//$this->load->view('templates/header');
		$this->load->view('templates/footer');
		
	}
	public function prof($page='profile'){
		
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        } 
		$data['page_title'] =ucfirst($page);
		//$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['nav'] = $this->load->view('templates/navbar');
		$this->load->view('pages/'.$page,$data);
		//$data['footer_resource'] = $this->load->view('templates/footer_resource');

		
		//$this->load->view('templates/header');
		$this->load->view('templates/footer');
		
	}
	
	public function contact($page='contact_me'){
		
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        } 
		$data['page_title'] =ucfirst($page);
		//$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['nav'] = $this->load->view('templates/navbar');
		$this->load->view('pages/'.$page,$data);
		//$data['footer_resource'] = $this->load->view('templates/footer_resource');

		
		//$this->load->view('templates/header');
		$this->load->view('templates/footer');
		
	}

	public function gallery($page='my_gallery'){
		
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        } 
		$data['page_title'] =ucfirst($page);
		//$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['nav'] = $this->load->view('templates/navbar');
		$this->load->view('pages/'.$page,$data);
		//$data['footer_resource'] = $this->load->view('templates/footer_resource');

		
		//$this->load->view('templates/header');
		$this->load->view('templates/footer');
		
	}
	public function ev($page='events'){
		
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                show_404();
        } 
		$data['page_title'] =ucfirst($page);
		//$data['header_resource'] = $this->load->view('templates/header_resource');
		$data['nav'] = $this->load->view('templates/navbar');
		$this->load->view('pages/'.$page,$data);
		//$data['footer_resource'] = $this->load->view('templates/footer_resource');

		
		//$this->load->view('templates/header');
		$this->load->view('templates/footer');
		
	}
	
}


?>