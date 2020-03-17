<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan_gaji extends CI_Controller {

	public function index()
	{
		$this->db->select('aturan_gaji.*, jabatan.jabatan as nama_jabatan');
		$this->db->join('jabatan', 'aturan_gaji.jabatan = jabatan.id_jabatan', 'left');
		$data['aturan_gaji'] = $this->db->get('aturan_gaji')->result_array();
		$data['jabatan'] = $this->db->select('id_jabatan, kode, jabatan')->get('jabatan')->result_array();
		$this->load->view('header');
		$this->load->view('aturan_gaji/aturan_gaji', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		$data = array(
			'jabatan' => $this->input->post('jabatan'),
			'masa_kerja' => $this->input->post('masa_kerja'),
			'insentif' => $this->input->post('insentif'),
			'bonus' => $this->input->post('bonus')
		);

		$this->db->insert('aturan_gaji', $data);
		$this->session->set_flashdata('data','success');
		redirect('aturan_gaji');
	}

	public function get_data_aturan_gaji($id_aturan_gaji)
	{
		$this->db->select('*');
		$this->db->where('id_aturan_gaji', $id_aturan_gaji);
		$result = $this->db->get('aturan_gaji')->row();
		return print_r(json_encode($result));
	}

	public function save_edit($id_aturan_gaji)
	{
		$data = array(
			'jabatan' => $this->input->post('edit_jabatan'),
			'masa_kerja' => $this->input->post('edit_masa_kerja'),
			'insentif' => $this->input->post('edit_insentif'),
			'bonus' => $this->input->post('edit_bonus')
		);

		$this->db->where('id_aturan_gaji', $id_aturan_gaji);
		$this->db->update('aturan_gaji', $data);

		$this->session->set_flashdata('data','success');
		redirect('aturan_gaji');
	}

	public function delete($id)
	{
		$this->db->delete('aturan_gaji', array('id_aturan_gaji' => $id));
		echo "success";
	}	
}
