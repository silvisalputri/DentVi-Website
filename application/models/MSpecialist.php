<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSpecialist extends CI_Model{
    public function show($id = null){
        $this->db->select("*");
        $this->db->from("specialist");
        if(!empty($id)){
            $this->db->where('id_specialist', $id);
        }
        $hasil = $this->db->get();
        return $hasil;
    }
    public function add($n, $k, $p){
        $query = "INSERT INTO specialist(nama_specialist, keterangan, harga) VALUES(?,?,?)";
        $hasil = $this->db->query($query, array($n, $k, $p));
        return $hasil;
    }
    public function update($n, $k, $p, $i){
        $query = "UPDATE specialist SET
                    nama_specialist = ?,
                    keterangan = ?,
                    harga = ?
                    WHERE id_specialist = ?";
        $hasil = $this->db->query($query, array($n, $k, $p, $i));
        return $hasil;
    }
    public function delete($i){
        $query = "DELETE FROM specialist WHERE id_specialist = ?";
        $hasil = $this->db->query($query, $i);
        return $hasil;
    }
    public function Spec($nama){
        $this->db->select("*");
        $this->db->from("specialist");
        if(!empty($nama)){
            $this->db->where('nama_specialist', $nama);
        }
        $hasil = $this->db->get();
        return $hasil;
    }
}
