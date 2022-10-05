<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Antrian_dokter extends CI_Model
{
    public function antrian()
    {
        return $this->db->query("select a.*, b.nama, c.nama_puskesmas from data_antrian a
        left join user b on a.id_user = b.id_user
        left join puskesmas c on a.id_puskesmas = c.id_puskesmas");
    }
}
