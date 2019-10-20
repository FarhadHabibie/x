<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_crud',$data);
	}

	function tambah(){
		$this->load->view('v_crud');
	}

	function tambah_data(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->m_data->input_data($data,'tbl_member');
		redirect('crud/index');
	}

    function hapus(){
        $nama=$this->input->post('nama');
        $this->m_data->hapus_member($nama);
        redirect('crud/index');
    }
}