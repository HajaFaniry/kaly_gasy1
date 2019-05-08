<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	/* fonction oanle index*/
	
	
/*	
	
	public  function index($vue='')
	{
		if($vue=='')
		{
			$this->load->view('MonSite/header');
			$this->load->view('MonSite/index');
			$this->load->view('MonSite/footer');
		}
		else
		{
		$this->load->view('MonSite/header');
		$this->load->view('MonSite/'.$vue.'');
		$this->load->view('MonSite/footer');
		}
	}
*/
	public function index(){

			$data=array();
			$this->load->model('FonctionModel');
			$data['Categorie']=$this->FonctionModel->Categorie();


			  $this->load->view('Page/index', $data);
	}
	
	public function menu (){

		$this->load->view('Page/menu');
	}

	public function apropos (){

		$this->load->view('Page/about');
	}

	public function admin (){

		$this->load->view('Page/admin');
	}

	public function connexion (){

		$this->load->view('Page/connexion');
	}
	
	}


