<?php

class Jabatan extends CI_Controller {
    public function index()
    {
        $data['jabatan'] = $this->m_jbtn->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_jabatan',$data);
		$this->load->view('templates/footer');

   
    }

    public function tambah(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_jabatan');
		$this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id_jabatan          = $this->input->post('id_jabatan');
        $jabatan             = $this->input->post('jabatan');
        $status              = $this->input->post('status');

        $data = array(
            'id_jabatan'     =>$id_jabatan,
            'jabatan'        =>$jabatan,
            'status'         =>$status,
        );
        $this->m_jbtn->input_data($data, 'tbl_jabatan');
        redirect('jabatan/index');
    }

    // public function hapus ($id_jabatan){
        // $where = array ('id_jabatan' => $id_jabatan);
        // $this->m_jbtn->hapus_data($where,'tbl_jabatan');
        // redirect('Jabatan/index');
    // }

    public function edit($id_jabatan){
        $where = array('id_jabatan' =>$id_jabatan);
        $data['Jabatan'] = $this->m_jbtn->edit_data_jbtn($where,'tbl_jabatan')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_jbtn',$data);
		$this->load->view('templates/footer');

    }

    public function update(){
        $id_jabatan  =   $this->input->post('id_jabatan');
        $jabatan     = $this->input->post('jabatan');
        $status      = $this->input->post('status');

        $data = array(
            'jabatan'   => $jabatan,
            'status'    => $status,
        );
        $where = array(
            'id_jabatan'    => $id_jabatan
        );
        $this->m_jbtn->update_data($where,$data,'tbl_jabatan');
        redirect('Jabatan/index');
    }
}
?>