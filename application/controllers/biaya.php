<?php

class Biaya extends CI_Controller {
    public function index()
    {
        $this->load->model('m_bya');

        $data['biaya'] = $this->m_bya->jabatan()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_biaya',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_biaya');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
    $id_jabatan     = $this->input->post('id_jabatan');
    $id_kk          = $this->input->post('id_kk');
    $angkatan       = $this->input->post('angkatan');
    $nominal        = $this->input->post('nominal');
    $jadwal         = $this->input->post('jadwal');

        $data = array(
            'id_jabatan'    =>$id_jabatan,
            'id_kk'         =>$id_kk,
            'angkatan'      =>$angkatan,
            'nominal'       =>$nominal,
            'jadwal'        =>$jadwal,
        );
        $this->m_bya->input_data($data, 'tbl_biaya');
        redirect('biaya/index');
    }

    // public function hapus ($id_biaya){
        // $where = array ('id_biaya' => $id_biaya);
        // $this->m_bya->hapus_data($where,'tbl_biaya');
        // redirect('Data/index');
    // }

    public function edit_biaya($id_biaya){
        $where = array('id_biaya' =>$id_biaya);
        $data['biaya'] = $this->m_bya->edit_biaya($where,'tbl_biaya')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_biaya',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_biaya          =   $this->input->post('id_biaya');
        $id_kk          =   $this->input->post('id_kk');
        $angkatan        = $this->input->post('angkatan');
        $nominal   = $this->input->post('nominal');
        $jadwal      = $this->input->post('jadwal');

        $data = array(
            'id_kk'       => $id_kk,
            'angkatan'    => $angkatan,
            'nominal'     => $nominal,
            'jadwal'      => $jadwal,
        );
        $where = array(
            'id_biaya'    => $id_biaya
        );
        $this->m_bya->update_data($where,$data,'tbl_biaya');
        redirect('biaya/index');
    }
}
?>