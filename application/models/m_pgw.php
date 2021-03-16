<?php

class M_pgw extends CI_Model {
    public function tampil_data()
   {
       return $this->db->get('tbl_pegawai');
        
    } 

    public function jabatan(){
        $this->db->select('*');
        $this->db->from('tbl_jabatan');
        $this->db->join('tbl_pegawai','tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan');
        return $this->db->get('');
    }
    public function input_data($data, $table){
        $this->db->insert($table,$data);
    }

    // public function hapus_data($where, $table){
        // $this->db->where($where);
        // $this->db->delete($table);
    // }
    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}
?>