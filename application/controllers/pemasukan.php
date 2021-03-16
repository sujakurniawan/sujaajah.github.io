<?php

class Pemasukan extends CI_Controller {
    public function index()
    {
        $this->load->model('m_pmskan');

        $data['pemasukan'] = $this->m_pmskan->kategori_keu()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_pmskan',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_pmskan');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
    $id_kk                = $this->input->post('id_kk');
    $nominal_keu          = $this->input->post('nominal_keu');
    $sumber_dana          = $this->input->post('sumber_dana');
    $keterangan_pemsuk    = $this->input->post('keterangan_pemsuk');
    $tgl_keu              = $this->input->post('tgl_keu');

        $data = array(
            'id_kk'              =>$id_kk,
            'nominal_keu'        =>$nominal_keu,
            'sumber_dana'        =>$sumber_dana,
            'keterangan_pemsuk'  =>$keterangan_pemsuk,
            'tgl_keu'            =>$tgl_keu,
        );
        $this->m_pmskan->input_data($data, 'tbl_keuangan');
        redirect('pemasukan/index');
    }

    // public function hapus ($id){
        // $where = array ('id' => $id);
        // $this->_pmskan->hapus_data($where,'tbl_keuangan');
        // redirect('Data/index');
    // }

    public function edit_pemasukan($id_keu){
        $where = array('id_keu' =>$id_keu);
        $data['pemasukan'] = $this->m_pmskan->edit_pemasukan($where,'tbl_keuangan')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_pemasukan',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
    $id_keu                = $this->input->post('id_keu');
    $nominal_keu          = $this->input->post('nominal_keu');
    $sumber_dana          = $this->input->post('sumber_dana');
    $keterangan_pemsuk    = $this->input->post('keterangan_pemsuk');
    $tgl_keu              = $this->input->post('tgl_keu');

        $data = array(
            'nominal_keu'        =>$nominal_keu,
            'sumber_dana'        =>$sumber_dana,
            'keterangan_pemsuk'  =>$keterangan_pemsuk,
            'tgl_keu'            =>$tgl_keu,

            );
        $where = array(
            'id_keu'    => $id_keu
        );
        $this->m_pmskan->update_data($where,$data,'tbl_keuangan');
        redirect('pemasukan/index');
    }
}
?>