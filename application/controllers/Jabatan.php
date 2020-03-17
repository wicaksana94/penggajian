<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index()
	{
		// $this->load->view('home');
		$data['jabatan'] = $this->db->get('jabatan')->result_array();
		$this->load->view('header');
		$this->load->view('jabatan/jabatan', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'jabatan' => $this->input->post('jabatan'),
			'standar_gaji' => $this->input->post('standar_gaji'),
			'keterangan' => $this->input->post('keterangan')
		);

		$this->db->insert('jabatan', $data);
		$this->session->set_flashdata('data','success');
		redirect('jabatan');
	}

	public function get_data_jabatan($id_jabatan)
	{
		$this->db->select('*');
		$this->db->where('id_jabatan', $id_jabatan);
		$result = $this->db->get('jabatan')->row();
		return print_r(json_encode($result));
	}

	public function save_edit($id_jabatan)
	{
		$data = array(
			'kode' => $this->input->post('edit_kode'),
			'jabatan' => $this->input->post('edit_jabatan'),
			'standar_gaji' => $this->input->post('edit_standar_gaji'),
			'keterangan' => $this->input->post('edit_keterangan')
		);

		$this->db->where('id_jabatan', $id_jabatan);
		$this->db->update('jabatan', $data);

		$this->session->set_flashdata('data','success');
		redirect('jabatan');
	}

	public function delete($id)
	{
		$this->db->delete('jabatan', array('id_jabatan' => $id));
		echo "success";
	}
}
