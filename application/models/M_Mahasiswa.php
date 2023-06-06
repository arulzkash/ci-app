<?php

class M_Mahasiswa extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $this->db->get('t_mahasiswa')->result_array();
    }
}
