<?php

class C_Mahasiswa extends CI_Controller
{
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
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/tambah', $data);
        $this->load->view('templates/footer');
    }
}
