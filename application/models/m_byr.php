<?php

class M_byr extends CI_Model {
    public function tampil_data()
   {
       return $this->db->get('tbl_transaksi');
        
    }

    public function jabatan(){
        $this->db->select('*');
        $this->db->from('tbl_siswa','tbl_kategori_keu');
        $this->db->join('tbl_transaksi','tbl_transaksi.id_jabatan = tbl_siswa.id_siswa','tbl_kategori_keu.id_kk');
        return $this->db->get('');
    }

    public function input_data($data, $table){
        $this->db->insert($table,$data);
    }
    
    // public function hapus_data($where, $table){
        // $this->db->where($where);
        // $this->db->delete($table);
    // }
    public function edit_data_jbtn($where, $table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}
?>