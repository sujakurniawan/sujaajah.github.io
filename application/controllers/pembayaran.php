<?php

class Pembayaran extends CI_Controller {
    public function index()
    {
        $this->load->model('m_byr');
        $data['pembayaran'] = $this->m_byr->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_bayar',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_bayar');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
    $tgl_transk                = $this->input->post('tgl_transk');
    $status_transk          = $this->input->post('status_transk');

        $data = array(
            'tgl_transk'          =>$tgl_transk,
            'status_transk'    =>$status_transk,
        );
        $this->m_byr->input_data($data, 'tbl_transaksi');
        redirect('pembayaran/index');
    }

    // public function hapus ($id){
        // $where = array ('id' => $id);
        // $this->m_byr->hapus_data($where,'tbl_transaksi');
        // redirect('Data/index');
    // }

    public function edit($id_transk){
        $where = array('id_transk' =>$id_transk);
        $data['Data'] = $this->m_byr->edit_data($where,'tbl_transaksi')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_edit',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_transk          =   $this->input->post('id_transk');
        $tgl_transk        = $this->input->post('tgl_transk');
        $status_transk   = $this->input->post('status_transk');

        $data = array(
            'tgl_transk'       => $tgl_transk,
            'status_transk'  => $status_transk,
        );
        $where = array(
            'id_transk'    => $id_transk
        );
        $this->m_byr->update_data($where,$data,'tbl_transaksi');
        redirect('pembayaran/index');
    }
}
?>