<?php

class M_swa extends CI_Model {
    public function tampil_data()
   {
    return $this->db->get('tbl_siswa');
         } 

       public function kelas(){
         $this->db->select('*');
           $this->db->from('tbl_kelas');
            $this->db->join('tbl_siswa','tbl_siswa.id_kelas = tbl_kelas.id_kelas');
       return $this->db->get('');
    }
    public function input_data($data, $table){
        $this->db->insert($table,$data);
    }

     public function hapus_data($where, $table){
         $this->db->where($where);
         $this->db->delete($table);
     }
    public function edit_siswa($where, $table){
        return $this->db->get_where($table,$where);
    }
    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}
?>