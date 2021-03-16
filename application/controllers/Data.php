<?php

class Data extends CI_Controller {
    public function index()
    {
        $this->load->model('m_pgw');

        $data['pegawai'] = $this->m_pgw->jabatan()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_data',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_data');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
    $nama                = $this->input->post('nama');
    $id_jabatan          = $this->input->post('id_jabatan');
    $tgl_lahir           = $this->input->post('tgl_lahir');
    $no_tlp              = $this->input->post('no_tlp');
    $alamat              = $this->input->post('alamat');
    $email               = $this->input->post('email');
    $password            = $this->input->post('password');
    $status              = $this->input->post('status');

        $data = array(
            'nama'          =>$nama,
            'id_jabatan'    =>$id_jabatan,
            'tgl_lahir'     =>$tgl_lahir,
            'no_tlp'        =>$no_tlp,
            'alamat'        =>$alamat,
            'email'         =>$email,
            'password'      =>$password,
            'status'        =>$status,
        );
        $this->m_pgw->input_data($data, 'tbl_pegawai');
        redirect('data/index');
    }

    // public function hapus ($id){
        // $where = array ('id' => $id);
        // $this->m_pgw->hapus_data($where,'tbl_pegawai');
        // redirect('Data/index');
    // }

    public function edit($id_nik){
        $where = array('id_nik' =>$id_nik);
        $data['Data'] = $this->m_pgw->edit_data($where,'tbl_pegawai')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_edit',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_nik          =   $this->input->post('id_nik');
        $nama        = $this->input->post('nama');
        $tgl_lahir   = $this->input->post('tgl_lahir');
        $no_tlp      = $this->input->post('no_tlp');
        $alamat      = $this->input->post('alamat');
        $email       = $this->input->post('email');
        $password    = $this->input->post('password');
        $status      = $this->input->post('status');

        $data = array(
            'nama'       => $nama,
            'tgl_lahir'  => $tgl_lahir,
            'no_tlp'     => $no_tlp,
            'alamat'     => $alamat,
            'email'      => $email,
            'password'   => $password,
            'status'     => $status,
        );
        $where = array(
            'id_nik'    => $id_nik
        );
        $this->m_pgw->update_data($where,$data,'tbl_pegawai');
        redirect('Data/index');
    }
}
?>