<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MProfile extends CI_Model{

    public function CekData($i){
        $hasil = $this->db->query("SELECT * FROM dokter WHERE id_dokter = ?", $i);
        return $hasil;
    }
    public function showTime($i){
        $hasil = $this->db->query("SELECT * FROM jadwal_dokter WHERE id_dokter = ?", $i);
        return $hasil;
    }
    public function selfEdit($user, $email, $real, $spec, $telp, $jk, $bio, $pic, $id){
        $query = "UPDATE dokter SET username = ?, email = ?, nama_dokter = ?, spesialisasi = ?, no_telp = ?, jk = ?, bio = ?, gambar = ? WHERE id_dokter = ?";
        $hasil = $this->db->query($query, array($user, $email, $real, $spec, $telp, $jk, $bio, $pic, $id));
        return $hasil;
    }
    public function selfEditWithoutPicture($user, $email, $real, $spec, $telp, $jk, $bio, $id){
        $query = "UPDATE dokter SET username = ?, email = ?, nama_dokter = ?, spesialisasi = ?, no_telp = ?, jk = ?, bio = ? WHERE id_dokter = ?";
        $hasil = $this->db->query($query, array($user, $email, $real, $spec, $telp, $jk, $bio, $id));
        return $hasil;
    }
    public function changePass($id, $pas){
        $query = "UPDATE dokter SET password = ? WHERE id_dokter = ?";
        $hasil = $this->db->query($query, array($pas, $id));
        return $hasil;
    }
    public function addTime($i, $s, $e){
		$query = "INSERT INTO jadwal_dokter(id_dokter, jam_mulai, jam_selesai) VALUES (?,?,?)";
		$hasil = $this->db->query($query, array($i, $s, $e));
		return $hasil; 
    }
    public function delTime($ij){
        $query = "DELETE FROM jadwal_dokter WHERE id_jadwal = ?";
        $hasil = $this->db->query($query, $ij);
        return $hasil;
    }
}