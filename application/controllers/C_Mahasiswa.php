<?php

class C_Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }



    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->M_Mahasiswa->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Mahasiswa';
        $data['jurusan'] = $this->M_Mahasiswa->getJurusan();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_Mahasiswa->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('c_mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->M_Mahasiswa->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash2', 'Dihapus');
        redirect('c_mahasiswa');
    }
}
