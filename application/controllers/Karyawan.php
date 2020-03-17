<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
		$data['karyawan'] = $this->db->get('karyawan')->result_array();
		$this->load->view('header');
		$this->load->view('karyawan/karyawan', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'masa_kerja' => $this->input->post('masa_kerja')
		);

		$this->db->insert('karyawan', $data);
		$this->session->set_flashdata('data','success');
		redirect('karyawan');
	}

	public function delete($id)
	{
		$this->db->delete('karyawan', array('id_karyawan' => $id));
		echo "success";
	}

	public function get_data_karyawan($id_karyawan)
	{
		$this->db->select('*');
		$this->db->where('id_karyawan', $id_karyawan);
		$result = $this->db->get('karyawan')->row();
		return print_r(json_encode($result));
	}

	public function save_edit($id_karyawan)
	{
		$data = array(
			'nip' => $this->input->post('edit_nip'),
			'nama' => $this->input->post('edit_nama'),
			'jenis_kelamin' => $this->input->post('edit_jenis_kelamin'),
			'tgl_lahir' => $this->input->post('edit_tgl_lahir'),
			'telp' => $this->input->post('edit_telp'),
			'email' => $this->input->post('edit_email'),
			'alamat' => $this->input->post('edit_alamat'),
			'masa_kerja' => $this->input->post('edit_masa_kerja')
		);

		$this->db->where('id_karyawan', $id_karyawan);
		$this->db->update('karyawan', $data);

		$this->session->set_flashdata('data','success');
		redirect('karyawan');
	}
	
}
