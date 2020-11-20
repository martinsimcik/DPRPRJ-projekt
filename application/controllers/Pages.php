<?php
class Pages extends CI_Controller {

        public function view()
    {


                   
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();

		$this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
	}
        
                public function home()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
        
                public function fyzika()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
                public function fyzikaKlik()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
                public function chemie()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
                public function chemieKlik()
        {
            
                $this->load->model('pokusy_model');
                $data['polozky'] = $this->pokusy_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
}