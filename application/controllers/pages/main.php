<?php
class Main extends CI_controller{

	//public function view($page='home'){
		public function index(){
			echo'this is main controller';
		/*if(!file_exists(APPATH.'views/pages/.'.$page')){
			show_404();
		}
		$data['title'] =ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer');*/
		$this->load->model('main_model');
		echo $this->main_model->test_main();
	}
	
}


?>