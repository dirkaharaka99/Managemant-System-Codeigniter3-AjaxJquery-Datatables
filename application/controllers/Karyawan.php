<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('Karyawan_model');
	}

	public function index()
	{
		$data = [
			'content' => 'karyawan_view'
		];

		return $this->load->view('layout/template', $data);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Insert Records                               */
	/* -------------------------------------------------------------------------- */

	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('nama', 'Nama Karyawan', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|is_numeric');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
			
		

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
			  
					$ajax_data = $this->input->post();
					$ajax_data['created_at'] = date('Y-m-d H:i:s');
					$ajax_data['updated_at'] = date('Y-m-d H:i:s');
					

					if ($this->Karyawan_model->insert_entry($ajax_data)) {
						$data = array('res' => "success", 'message' => "Data added successfully");
					} else {
						$data = array('res' => "error", 'message' => "Failed to add data");
					}
				
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	/* -------------------------------------------------------------------------- */
	/*                                Fetch Records                               */
	/* -------------------------------------------------------------------------- */

	public function fetch()
	{
		$posts = $this->Karyawan_model->get_entries();
		echo json_encode($posts);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Delete Records                               */
	/* -------------------------------------------------------------------------- */

	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			$post = $this->Karyawan_model->single_entry($del_id);

			if ($this->Karyawan_model->delete_entry($del_id)) {
				$data = array('res' => "success", 'message' => "Data delete successfully");
			} else {
				$data = array('res' => "error", 'message' => "Delete query errors");
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	/* -------------------------------------------------------------------------- */
	/*                                Edit Records                                */
	/* -------------------------------------------------------------------------- */

	public function edit()
	{
		if ($this->input->is_ajax_request()) {

			$edit_id = $this->input->get('edit_id');

			if ($post = $this->Karyawan_model->single_entry($edit_id)) {
				$data = array('res' => "success", 'post' => $post);
			} else {
				$data = array('res' => "error", 'message' => "Failed to fetch data");
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	/* -------------------------------------------------------------------------- */
	/*                               Update Records                               */
	/* -------------------------------------------------------------------------- */

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('nama', 'Kode Produk', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_hp', 'no_hp', 'required|is_numeric');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				$id = $this->input->post('edit_id');
				$ajax_data['nama'] = $this->input->post('nama');
				$ajax_data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
				$ajax_data['tgl_lahir'] = $this->input->post('tgl_lahir');
				$ajax_data['no_hp'] = $this->input->post('no_hp');
				$ajax_data['alamat'] = $this->input->post('alamat');
				$ajax_data['jabatan'] = $this->input->post('jabatan');
				$ajax_data['updated_at'] = date('Y-m-d H:i:s');
				if ($this->Karyawan_model->update_entry($id, $ajax_data)) {
					$data = array('res' => "success", 'message' => "Data update successfully");
				} else {
					$data = array('res' => "error", 'message' => "Failed to update data");
				}
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
}
