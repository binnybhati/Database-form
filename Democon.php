<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Democon extends CI_Controller {

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url_helper');
	 		$this->load->model('demomodel');
			 
	 	}
 
 
	public function index()
	{
 
		$data['always']=$this->demomodel->get_all_books();    // table name change krna hai
		$this->load->view('demo1',$data);
		$query = $this->db->get('always');
	}




	public function book_add()
		{
			$data = array(
					'fname' => $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'uid' => $this->input->post('uid'),
					'faname' => $this->input->post('faname'),
                    'moname' => $this->input->post('moname'),
                    'image' => $this->input->post('image'),
					'paddress' => $this->input->post('paddress'),
					'p_city' => $this->input->post('p_city'),
					'p_district' => $this->input->post('p_district'),
					'p_state' => $this->input->post('p_state'),
					'pincode' => $this->input->post('pincode'),
					'phone_no' => $this->input->post('phone_no'),
					'mob_no' => $this->input->post('mob_no'),
					'dob' => $this->input->post('dob'),
					'age' => $this->input->post('age'),
					'aniver_date' => $this->input->post('aniver_date'),
					'pan_no' => $this->input->post('pan_no'),
					'oaddress' => $this->input->post('oaddress'),
					'ocity' => $this->input->post('ocity'),
					'odistrict' => $this->input->post('odistrict'),
					'ostate' => $this->input->post('ostate'),
					'job' => $this->input->post('job'),
					'nomi_name' => $this->input->post('nomi_name'),
					'n_age' => $this->input->post('n_age'),
					'relation' => $this->input->post('relation'),
				);
			$insert = $this->demomodel->book_add($data);
			echo json_encode(array("status" => TRUE));
		}

		public function ajax_edit($id)
		{
			$data = $this->demomodel->get_by_id($id);
 
 
 
			echo json_encode($data);
		}
 
		public function book_update()
	{
		$data = array(
				'fname' => $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'uid' => $this->input->post('uid'),
					'faname' => $this->input->post('faname'),
                    'moname' => $this->input->post('moname'),
                    'image' => $this->input->post('image'),
					'paddress' => $this->input->post('paddress'),
					'p_city' => $this->input->post('p_city'),
					'p_district' => $this->input->post('p_district'),
					'p_state' => $this->input->post('p_state'),
					'pincode' => $this->input->post('pincode'),
					'phone_no' => $this->input->post('phone_no'),
					'mob_no' => $this->input->post('mob_no'),
					'dob' => $this->input->post('dob'),
					'age' => $this->input->post('age'),
					'aniver_date' => $this->input->post('aniver_date'),
					'pan_no' => $this->input->post('pan_no'),
					'oaddress' => $this->input->post('oaddress'),
					'ocity' => $this->input->post('ocity'),
					'odistrict' => $this->input->post('odistrict'),
					'ostate' => $this->input->post('ostate'),
					'job' => $this->input->post('job'),
					'nomi_name' => $this->input->post('nomi_name'),
					'n_age' => $this->input->post('n_age'),
					'relation' => $this->input->post('relation'),
			);
		$this->demomodel->book_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
 
		public function book_delete($id)
	{
		$this->demomodel->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
}
