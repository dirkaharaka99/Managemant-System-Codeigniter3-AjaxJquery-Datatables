<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('Transaksi_model');
	}

	public function index()
	{
		$queryAllProduk = $this->Transaksi_model->getDataProduk();
		$queryAllPelanggan = $this->Transaksi_model->getDataPelanggan();
		$queryAllKaryawan = $this->Transaksi_model->getDataKaryawan();
		$data = [
			'content' => 'transaksi_view',
			'queryAllProduk' => $queryAllProduk,
			'queryAllPelanggan' => $queryAllPelanggan,
			'queryAllKaryawan' => $queryAllKaryawan
		];

		return $this->load->view('layout/template', $data);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Insert Records                               */
	/* -------------------------------------------------------------------------- */

	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('id_produk', 'ID Produk', 'required');
			$this->form_validation->set_rules('id_pelanggan', 'Id Pelanggan', 'required');
			$this->form_validation->set_rules('id_karyawan', 'Id Karyawan', 'required');
			$this->form_validation->set_rules('jumlah_produk', 'Jumlah Produk', 'required|is_numeric');
			$this->form_validation->set_rules('harga_total', 'Total Harga', 'required|is_numeric');
			

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			}
			else {
				
				$ajax_data = $this->input->post();
				$ajax_data['created_at'] = date('Y-m-d H:i:s');
				$ajax_data['updated_at'] = date('Y-m-d H:i:s');
			

				if ($this->Transaksi_model->insert_entry($ajax_data)) {
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
		$posts = $this->Transaksi_model->get_entries();
		echo json_encode($posts);
	}

	/* -------------------------------------------------------------------------- */
	/*                               Delete Records                               */
	/* -------------------------------------------------------------------------- */

	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			$post = $this->Transaksi_model->single_entry($del_id);

			if ($this->Transaksi_model->delete_entry($del_id)) {
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

			if ($post = $this->Transaksi_model->single_entry($edit_id)) {
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
			$this->form_validation->set_rules('id_produk', 'Id Produk', 'required');
			$this->form_validation->set_rules('id_pelanggan', 'Id Pelanggan', 'required');
			$this->form_validation->set_rules('id_karyawan', 'Id Karyawan', 'required');
			$this->form_validation->set_rules('jumlah_produk', 'Jumlah Produk', 'required|is_numeric');
			$this->form_validation->set_rules('harga_total', 'Harga Total', 'required|is_numeric');

			if ($this->form_validation->run() == FALSE) {
				$data = array('res' => "error", 'message' => validation_errors());
			} else {
				$id = $this->input->post('edit_id');
				$ajax_data['id_produk'] = $this->input->post('id_produk');
				$ajax_data['id_pelanggan'] = $this->input->post('id_pelanggan');
				$ajax_data['id_karyawan'] = $this->input->post('id_karyawan');
				$ajax_data['jumlah_produk'] = $this->input->post('jumlah_produk');
				$ajax_data['harga_total'] = $this->input->post('harga_total');
				$ajax_data['updated_at'] = date('Y-m-d H:i:s');
				if ($this->Transaksi_model->update_entry($id, $ajax_data)) {
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
