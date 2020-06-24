<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAppoint extends CI_Model{
    public function add($j, $t, $n, $s, $na, $ph, $ag){
        $query = "INSERT INTO appointment(jam, tanggal, namaDokter, specialist, pasien, no_telp, age)
                    VALUES(?,?,?,?,?)";
        $hasil = $this->db->query($query, array($j, $t, $n, $s, $na, $ph, $ag));
        return $hasil;
    }
    public function del($i){
        $query = "DELETE FROM appointment WHERE id_appointment = ?";
        $hasil = $this->db->query($query, $i);
        return $hasil;
    }
    public function show($id = null){
        $this->db->select('*');
        $this->db->from('dokter');
        $hasil = $this->db->get();
        return $hasil;
    }
    public function showTime($id = null){
        $this->db->select('*');
        $this->db->from('jadwal_dokter');
        $this->db->where('id_dokter', $id);
        $hasil = $this->db->get();
        return $hasil;
    }
}