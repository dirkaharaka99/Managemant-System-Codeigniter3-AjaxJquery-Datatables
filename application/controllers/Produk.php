<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('Produk_model');
	}

	public function index()
	{
		$data = [
			'content' => 'produk_view'
		];

		return $this->load->view('layout/template', $data);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Insert Records                               */
	/* -------------------------------------------------------------------------- */

	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('kode_produk', 'Kode', 'required|is_unique[produk.kode_produk]');
			$this->form_validation->set_rules('nama_produk', 'Nama', 'required|is_unique[produk.nama_produk]');
			$this->form_validation->set_rules('stok', 'Stok', 'required|is_numeric');
			$this->form_validation->set_rules('harga', 'Harga', 'required|is_numeric');
		

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				$config['upload_path'] = './assets/produk_images/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '1000';
				// $config['max_width'] = '1024';
				// $config['max_height'] = '768';
				$this->load->library('upload', $config);
				// Upload.php line - 1097 public function display_errors($open = '<p>', $close = '</p>')

				if (!$this->upload->do_upload("gambar")) {
					$data = array('res' => "error", 'message' => $this->upload->display_errors());
				} else {
					$ajax_data = $this->input->post();
					$ajax_data['created_at'] = date('Y-m-d H:i:s');
					$ajax_data['updated_at'] = date('Y-m-d H:i:s');
					$ajax_data['gambar'] = $this->upload->data('file_name');

					if ($this->Produk_model->insert_entry($ajax_data)) {
						$data = array('res' => "success", 'message' => "Data added successfully");
					} else {
						$data = array('res' => "error", 'message' => "Failed to add data");
					}
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
		$posts = $this->Produk_model->get_entries();
		echo json_encode($posts);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Delete Records                               */
	/* -------------------------------------------------------------------------- */

	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			$post = $this->Produk_model->single_entry($del_id);

			unlink(APPPATH . '../assets/produk_images/' . $post->gambar);

			if ($this->Produk_model->delete_entry($del_id)) {
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

			if ($post = $this->Produk_model->single_entry($edit_id)) {
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
			$this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
			$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
			$this->form_validation->set_rules('stok', 'Stok', 'required|is_numeric');
			$this->form_validation->set_rules('harga', 'Harga', 'required|is_numeric');

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				if (isset($_FILES["edit_gambar"]["name"])) {
					$config['upload_path'] = APPPATH . '../assets/produk_images/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']     = '1000';
					// $config['max_width'] = '1024';
					// $config['max_height'] = '768';
					$this->load->library('upload', $config);

					if (!$this->upload->do_upload("edit_gambar")) {
						$data = array('res' => "error", 'message' => $this->upload->display_errors());
					} else {
						$edit_id = $this->input->post('edit_id');
						if ($post = $this->Produk_model->single_entry($edit_id)) {
							unlink(APPPATH . '../assets/produk_images/' . $post->gambar);
							$ajax_data['gambar'] = $this->upload->data('file_name');
						}
					}
				}
				$id = $this->input->post('edit_id');
				$ajax_data['kode_produk'] = $this->input->post('kode_produk');
				$ajax_data['nama_produk'] = $this->input->post('nama_produk');
				$ajax_data['stok'] = $this->input->post('stok');
				$ajax_data['harga'] = $this->input->post('harga');
				$ajax_data['updated_at'] = date('Y-m-d H:i:s');
				if ($this->Produk_model->update_entry($id, $ajax_data)) {
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
