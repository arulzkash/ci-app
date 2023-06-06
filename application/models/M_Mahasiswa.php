<?php

class M_Mahasiswa extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $this->db->get('t_mahasiswa')->result_array();
    }

    public function getJurusan()
    {
        return $this->db->get('t_jurusan')->result_array();
    }

    public function tambahDataMahasiswa()   
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('t_mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id) {
        $this->db->delete('t_mahasiswa', array('id' => $id));
    }
}
