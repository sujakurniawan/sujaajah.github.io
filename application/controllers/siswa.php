<?php

class Siswa extends CI_Controller {
    public function index()
    {
        $this->load->model('m_swa');

        $data['siswa'] = $this->m_swa->kelas()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_siswa',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_siswa');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi() {
    $nis                = $this->input->post('nis');
    $id_kelas           = $this->input->post('id_kelas');
    $nama               = $this->input->post('nama');
    $tgl_lahir          = $this->input->post('tgl_lahir');
    $alamat             = $this->input->post('alamat');
    $no_tlp             = $this->input->post('no_tlp');
    // $jurusan               = $this->input->post('jurusan');
    $agama              = $this->input->post('agama');
    $jk                 = $this->input->post('jk');
    $angkatan           = $this->input->post('angkatan');
    $status             = $this->input->post('status');

        $data = array(
            'nis'           =>$nis,
            'id_kelas'      =>$id_kelas,
            'nama'          =>$nama,
            'tgl_lahir'     =>$tgl_lahir,
            'alamat'        =>$alamat,
            'no_tlp'        =>$no_tlp,
            // 'jurusan'         =>$jurusan,
            'agama'         =>$agama,
            'jk'            =>$jk,
            'angkatan'      =>$angkatan,
            'status'        =>$status,
        );
        $this->m_swa->input_data($data, 'tbl_siswa');
        redirect('siswa/index');
    }

    public function hapus ($id_siswa){
         $where = array ('id_siswa' => $id_siswa);
         $this->m_swa->hapus_data($where,'tbl_siswa');
        redirect('siswa/index');
    }

    public function edit_siswa($id_siswa){
        $where = array('id_siswa' =>$id_siswa);
        $data['siswa'] = $this->m_swa->edit_siswa($where,'tbl_siswa')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_siswa',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_siswa       =   $this->input->post('id_siswa');
    $nis                = $this->input->post('nis');
    $nama               = $this->input->post('nama');
    $tgl_lahir          = $this->input->post('tgl_lahir');
    $alamat             = $this->input->post('alamat');
    $no_tlp              = $this->input->post('no_tlp');
    // $jurusan               = $this->input->post('jurusan');
    $agama              = $this->input->post('agama');
    $jk                 = $this->input->post('jk');
    $angkatan           = $this->input->post('angkatan');
    $status             = $this->input->post('status');

        $data = array(
            'nis'           =>$nis,
            'nama'          =>$nama,
            'tgl_lahir'     =>$tgl_lahir,
            'alamat'        =>$alamat,
            'no_tlp'        =>$no_tlp,
            // 'jurusan'         =>$jurusan,
            'agama'         =>$agama,
            'jk'            =>$jk,
            'angkatan'      =>$angkatan,
            'status'        =>$status,
        );
        $where = array(
            'id_siswa'      => $id_siswa
        );
        $this->m_swa->update($where,$data,'tbl_siswa');
        redirect('siswa/index');
    }
}
?>