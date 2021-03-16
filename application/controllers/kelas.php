<?php

class Kelas extends CI_Controller {
    public function index()
    {

        $data['kelas'] = $this->m_kls->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_kelas',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_kelas');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id_kelas        = $this->input->post('id_kelas');
        $tingkat_kelas    = $this->input->post('tingkat_kelas');
        $jurusan         = $this->input->post('jurusan');
        $wali_kelas      = $this->input->post('wali_kelas');
        $status          = $this->input->post('status');

        $data = array(
            'tingkat_kelas'    =>$tingkat_kelas,
            'jurusan'         =>$jurusan,
            'wali_kelas'      =>$wali_kelas,
            'status'          =>$status,
        );
        $this->m_kls->input_data($data, 'tbl_kelas');
        redirect('Kelas/index');
    }

    public function edit_kelas($id_kelas){
        $where = array('id_kelas' =>$id_kelas);
        $data['kelas'] = $this->m_kls->edit_kelas($where,'tbl_kelas')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_kelas',$data);
        $this->load->view('templates/footer');

    }

    public function update(){
        $id_kelas         = $this->input->post('id_kelas');
        $tingkat_kelas     = $this->input->post('tingkat_kelas');
        $jurusan          = $this->input->post('jurusan');
        $wali_kelas       = $this->input->post('wali_kelas');
        $status           = $this->input->post('status');

        $data = array(
            'tingkat_kelas'   => $tingkat_kelas,
            'jurusan'        => $jurusan,
            'wali_kelas'     => $wali_kelas,
            'status'         => $status,
        );
        $where = array(
            'id_kelas'       => $id_kelas
        );
        $this->m_kls->update_data($where,$data,'tbl_kelas');
        redirect('Kelas/index');
    }
}
?>