<?php

class Kategori_keu extends CI_Controller {
    public function index()
    {

       $data['Kategori_keu'] = $this->m_kk->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_kategori_keu',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_kategori_keu');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
    $id_kk               = $this->input->post('id_kk');
    $nama_kk             = $this->input->post('nama_kk');
    $jenis_kk            = $this->input->post('jenis_kk');
    $status_kk           = $this->input->post('status_kk');

        $data = array(
            'id_kk'          =>$id_kk,
            'nama_kk'          =>$nama_kk,
            'jenis_kk'    =>$jenis_kk,
            'status_kk'     =>$status_kk,
        );
        $this->m_kk->input_data($data, 'tbl_kategori_keu');
        redirect('Kategori_keu/index');
    }

    // public function hapus ($id_kk){
        // $where = array ('id_kk' => $id_kk);
        // $this->m_kk->hapus_data($where,'tbl_pegawai');
        // redirect('Data/index');
    // }

    public function edit_kk($id_kk){
        $where = array('id_kk' =>$id_kk);
        $data['Kategori_keu'] = $this->m_kk->edit_kk($where,'tbl_kategori_keu')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_kk',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_kk          =   $this->input->post('id_kk');
        $nama_kk        = $this->input->post('nama_kk');
        $jenis_kk       = $this->input->post('jenis_kk');
        $status_kk      = $this->input->post('status_kk');

        $data = array(
            'nama_kk'       => $nama_kk,
            'jenis_kk'      => $jenis_kk,
            'status_kk'     => $status_kk,
        );
        $where = array(
            'id_kk'    => $id_kk
        );
        $this->m_kk->update_data($where,$data,'tbl_kategori_keu');
        redirect('Kategori_keu/index');
    }
}
?>