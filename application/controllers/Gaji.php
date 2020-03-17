<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

	public function index()
	{
		$data['gaji'] = $this->db->get('gaji')->result_array();
		$data['jabatan'] = $this->db->select('id_jabatan, kode, jabatan')->get('jabatan')->result_array();
		$this->load->view('header');
		$this->load->view('gaji/gaji', $data);
		$this->load->view('footer');
	}

	public function get_karyawan_by_jabatan($id_jabatan)
	{
		$this->db->select('id_karyawan, nama');
		$this->db->where('id_jabatan', $id_jabatan);
		$result = $this->db->get('karyawan')->result_array();
		return print_r(json_encode($result));
	}

	public function add()
	{
		$this->load->helper('global_helper');
		// echo "<pre>";
		// print_r ($this->input->post());
		// echo "</pre>";
		// die();
		$this->db->select('nip, nama');
		$this->db->where('id_karyawan', $this->input->post('id_karyawan'));
		$data['karyawan'] = $this->db->get('karyawan')->row_array();
		// debug($data['karyawan']);
		// echo "<pre>";
		// print_r ($nip);
		// echo "</pre>";
		// die();

		$data = array(
			'kode_penggajian' => $this->input->post('kode_penggajian'),
			'nip_karyawan' => $data['karyawan']['nip'],
			'nama_karyawan' => $data['karyawan']['nama'],
			'tgl_penerimaan' => $this->input->post('tgl_penerimaan'),
			'nominal' => $this->input->post('nominal')
		);

		$this->db->insert('gaji', $data);
		$this->session->set_flashdata('data','success');
		redirect('gaji');
	}

	public function hitung_nominal($id_karyawan)
	{
		// $this->load->helper('global_helper');
		// $this->db->select('karyawan.nama,karyawan.id_jabatan,karyawan.masa_kerja,jabatan.standar_gaji,aturan_gaji.insentif,aturan_gaji.bonus');
		// $this->db->join('jabatan', 'karyawan.id_jabatan = jabatan.id_jabatan', 'left');
		// $this->db->join('aturan_gaji', 'aturan_gaji.jabatan = jabatan.id_jabatan', 'left');
		// $this->db->get('karyawan')->result_array();

		// $this->db->where('karyawan.id_jabatan', '1');
		// $this->db->where('karyawan.id_karyawan', '1');
		// $this->db->where('karyawan.masa_kerja', 'aturan_gaji.masa_kerja');

		// $this->db->select('jabatan.standar_gaji');
		// $this->db->select('aturan_gaji.insentif,aturan_gaji.bonus');

		// $this->db->join('jabatan', 'karyawan.id_jabatan = jabatan.id_jabatan', 'left');
		// $this->db->join('aturan_gaji', 'jabatan.id_jabatan = aturan_gaji.jabatan', 'left');

		// $this->db->get('karyawan')->result_array();


		// $this->db->select('karyawan.id_karyawan, karyawan.id_jabatan, karyawan.masa_kerja, jabatan.standar_gaji, aturan_gaji.insentif, aturan_gaji.bonus');
		// $this->db->join('jabatan', 'karyawan.id_jabatan = jabatan.id_jabatan', 'left');
		// $this->db->join('aturan_gaji', 'jabatan.id_jabatan = aturan_gaji.jabatan', 'left');
		// $this->db->where('karyawan.id_karyawan', '1');
		// $this->db->where('karyawan.masa_kerja', 'aturan_gaji.masa_kerja');
		// $this->db->get('karyawan')->result_array();

		// $this->db->select('jabatan.id_jabatan, jabatan.jabatan, karyawan.masa_kerja as masa kerja karyawan, karyawan.nama, karyawan.nip, jabatan.standar_gaji, aturan_gaji.insentif, aturan_gaji.bonus,  aturan_gaji.masa_kerja as masa kerja aturan_gaji');
		// $this->db->where('karyawan.id_jabatan', '3');
		// $this->db->where('karyawan.id_karyawan', '15');
		// $this->db->join('karyawan', 'karyawan.id_jabatan = jabatan.id_jabatan', 'left');
		// $this->db->join('aturan_gaji', 'jabatan.id_jabatan = aturan_gaji.jabatan', 'left');
		// $result1 = $this->db->get('jabatan')->result_array();

		// echo "<pre>";
		// echo "Result 1";
		// print_r ($result1);
		// echo "</pre>";

		// $this->db->select('jabatan.id_jabatan, jabatan.jabatan, karyawan.masa_kerja, karyawan.nama, karyawan.nip, jabatan.standar_gaji, aturan_gaji.insentif, aturan_gaji.bonus');
		// $this->db->where('karyawan.id_jabatan', '3');
		// $this->db->where('karyawan.id_karyawan', '15');
		// // $this->db->join('karyawan', 'karyawan.id_jabatan = jabatan.id_jabatan', 'left');
		// // $this->db->join('aturan_gaji', 'jabatan.id_jabatan = aturan_gaji.jabatan', 'left');
		// $karyawan = $this->db->get('karyawan')->row_array();

		// $this->db->select('id_jabatan,jabatan,standar_gaji');
		// $this->db->where('id_jabatan', $karyawan['id_jabatan']);
		// $jabatan = $this->db->get('jabatan')->row_array();

		$this->db->select('id_jabatan, masa_kerja');
		$this->db->where('id_karyawan', $id_karyawan);
		$karyawan = $this->db->get('karyawan')->row_array();

		// $result = $this->db->query('
		// 	SELECT *
		// 	FROM (
		// 	SELECT `jabatan`.`id_jabatan`, `jabatan`.`jabatan`, `karyawan`.`id_karyawan`, `karyawan`.`masa_kerja`, `karyawan`.`nama`, `karyawan`.`nip`, `jabatan`.`standar_gaji`, `aturan_gaji`.`insentif`, `aturan_gaji`.`bonus`, `aturan_gaji`.`masa_kerja` AS masa_kerja_aturan_gaji
		// 	FROM `jabatan`
		// 	LEFT JOIN `karyawan` ON `karyawan`.`id_jabatan` = `jabatan`.`id_jabatan`
		// 	LEFT JOIN `aturan_gaji` ON `jabatan`.`id_jabatan` = `aturan_gaji`.`jabatan`
		// 	WHERE `karyawan`.`id_jabatan` = '.$karyawan['id_jabatan'].' AND `karyawan`.`id_karyawan` = '.$karyawan['id_karyawan'].') AS aliases
		// 	WHERE `aliases`.`masa_kerja` >= `aliases`.`masa_kerja_aturan_gaji`
		// ')->row_array();

		// if ($result['masa_kerja']<1) {
		// 	unset($result['bonus']);
		// 	$result['nominal_total_gaji'] = $result['standar_gaji'] + $result['insentif'];
		// } else if ($result['masa_kerja']>=$result['masa_kerja_aturan_gaji']) {
		// 	$result['nominal_total_gaji'] = $result['standar_gaji'] + $result['insentif'] + $result['bonus'];
		// } else {
		// 	$result['nominal_total_gaji'] = $result['standar_gaji'] + $result['insentif'] + $result['bonus'];
		// }

		// return print_r(json_encode($result));

		$this->db->select('standar_gaji');
		$this->db->where('id_jabatan', $karyawan['id_jabatan']);
		$standar_gaji = $this->db->get('jabatan')->row('standar_gaji');

		$this->db->select('insentif');
		$this->db->where('jabatan', $karyawan['id_jabatan']);
		$this->db->where('aturan_gaji.masa_kerja <=', $karyawan['masa_kerja']);
		$insentif = $this->db->get('aturan_gaji')->row('insentif');

		$this->db->select('bonus');
		$this->db->where('jabatan', $karyawan['id_jabatan']);
		$this->db->where('aturan_gaji.masa_kerja <=', $karyawan['masa_kerja']);
		$bonus = $this->db->get('aturan_gaji')->row('bonus');
		
		if ($karyawan['masa_kerja']>=1) {
			$nominal_total_gaji = $standar_gaji+$insentif+$bonus;			
		} else {
			$nominal_total_gaji = $standar_gaji;
		}

		// echo($nominal_total_gaji); die();

		return print_r(json_encode($nominal_total_gaji));
		

		// echo "<pre>";
		// echo "Result 2";
		// echo "<br>";
		// print_r ($standar_gaji);
		// echo "<br>";
		// print_r ($insentif);
		// echo "<br>";
		// print_r ($bonus);
		// echo "</pre>";

		// echo "<pre>";
		// print_r ($this->db->last_query());
		// echo "</pre>";
		// die();
	}

	public function get_data_gaji($id_gaji)
	{
		$this->db->select('*');
		$this->db->where('id_gaji', $id_gaji);
		$result = $this->db->get('gaji')->row();
		return print_r(json_encode($result));
	}

	public function save_edit($id_gaji)
	{
		// echo "<pre>";
		// print_r ($this->input->post());
		// echo "</pre>";
		// die();
		$data = array(
			'kode_penggajian' => $this->input->post('edit_kode'),
			'nip_karyawan' => $this->input->post('edit_nip_karyawan'),
			'nama_karyawan' => $this->input->post('edit_nama_karyawan'),
			'tgl_penerimaan' => $this->input->post('edit_tgl_penerimaan'),
			'nominal' => $this->input->post('edit_nominal')
		);

		$this->db->where('id_gaji', $id_gaji);
		$this->db->update('gaji', $data);

		$this->session->set_flashdata('data','success');
		redirect('gaji');
	}

	public function delete($id)
	{
		$this->db->delete('gaji', array('id_gaji' => $id));
		echo "success";
	}

	
}
