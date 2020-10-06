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

	function __construct(){
		parent::__construct();
		$this->load->model('Alumni');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function getAlumni(){
		$data = array(
			'ID' => "614259036",
			'Name' => "Dachachan",
			'contact' =>"614259036@webmail.npru.ac.th",
			'adders'=> "7/1 1 nakorphon",
			'Phone'=> "0980021357"
		);

}

	public function showall()
	{
		//$result['alumni'] = $this->Alumni->getAlumni($data);
		print_r($this->Alumni->getAlumni());
		
	}

	public function insert()
	{
		$data = array(
			'A_ID' => "614259036",
			'A_Name' => "fluk",
			'A_contact' =>"614259056@webmail.npru.ac.th",
			'A_adders'=> "7/1 8 nakorphon",
			'A_Phone'=> "0980021357",
			'A_work'=> ""

		);
		//$result['alumni'] = $this->Alumni->getAlumni($data);
		$this->Alumni->insert($data);
		echo'สำเร็จแล้ว';
	}


	public function update()
	{
		$data = array(
			
			'A_work' => "flukkk",
		);
		//$result['alumni'] = $this->Alumni->getAlumni($data);
		$A_ID="614259036";
		$this->Alumni->update($data,$A_ID);
		
	}
	



};
	


