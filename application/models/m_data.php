<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_member');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_member($nama){
        $hasil=$this->db->query("DELETE FROM tbl_member WHERE nama='$nama'");
        return $hasil;
    }
}