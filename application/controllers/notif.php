<?php

class Notif extends CI_Controller {
    public function index()
    {
         $this->load->model('m_notif');

        $data['notif'] = $this->m_notif->kategori_keu()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_notif',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_notif');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id_kk              = $this->input->post('id_kk');
        $waktu_notif        = $this->input->post('waktu_notif');
        $keterangan_notif   = $this->input->post('keterangan_notif');

        $data = array(
            'id_kk'              =>$id_kk,
            'waktu_notif'        =>$waktu_notif,
            'keterangan_notif'   =>$keterangan_notif,
        );
        $this->m_notif->input_data($data, 'tbl_notifikasi');
        redirect('notif/index');
    }

    // public function hapus ($id_notif){
        // $where = array ('id_notif' => $id_notif);
        // $this->m_jbtn->hapus_data($where,'tbl_notifikasi');
        // redirect('Jabatan/index');
    // }

    public function edit_notif($id_notif){
        $where = array('id_notif' =>$id_notif);
        $data['notif'] = $this->m_notif->edit_notif($where,'tbl_notifikasi')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_notif',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_notif           =   $this->input->post('id_notif');
        $waktu_notif        = $this->input->post('waktu_notif');
        $keterangan_notif   = $this->input->post('keterangan_notif');

        $data = array(
            'waktu_notif'       => $waktu_notif,
            'keterangan_notif'  => $keterangan_notif,
        );
        $where = array(
            'id_notif'    => $id_notif
        );
        $this->m_notif->update_data($where,$data,'tbl_notifikasi');
        redirect('notif/index');
    }
}
?>