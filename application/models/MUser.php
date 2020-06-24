<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model{
    
    public function addUser($u, $em, $pas, $name, $jk, $date, $age, $a ,$telp, $pic){
        $query = "INSERT INTO user (username, email, password, nama_lengkap, jk, tanggal_lahir, umur, alamat, no_telp, gambar) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $hasil = $this->db->query($query, array($u, $em, $pas, $name, $jk, $date, $age, $a, $telp, $pic));
        
        return $hasil;
    }
    public function addUserWithoutPicture($u, $em, $pas, $name, $jk, $date, $age, $a, $telp){
        $query = "INSERT INTO user (username, email, password, nama_lengkap, jk, tanggal_lahir, umur, alamat, no_telp)
                    VALUES (?,?,?,?,?,?,?,?,?)";
        $hasil = $this->db->query($query, array($u, $em, $pas, $name, $jk, $date, $age, $a, $telp));

        return $hasil;
    }
    public function editUser($u, $em, $name, $jk, $date, $age, $a ,$telp, $pic, $id){
        $query = "UPDATE user SET
                    username = ?,   
                    email = ?,
                    nama_lengkap = ?,
                    jk = ?,
                    tanggal_lahir = ?,
                    umur = ?,
                    alamat = ?,
                    no_telp = ?,
                    gambar = ?
                    WHERE id_user = ?";
        $hasil = $this->db->query($query, array($u, $em, $name, $jk, $date, $age, $a ,$telp, $pic, $id));
        return $hasil;
    }
    public function editUserWithoutPicture($u, $em, $name, $jk, $date, $age, $a ,$telp, $id){
        $query = "UPDATE user SET
                    username = ?,
                    email = ?,
                    nama_lengkap = ?,
                    jk = ?,
                    tanggal_lahir = ?,
                    umur = ?,
                    alamat = ?,
                    no_telp = ? 
                    WHERE id_user = ?";
        $hasil = $this->db->query($query, array($u, $em, $name, $jk, $date, $age, $a ,$telp, $id));
        return $hasil;
    }
    public function getUser($id = null){
        $this->db->select('*');
        $this->db->from('user');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function deleteUser($id){
        $hasil = $this->db->query('DELETE FROM user WHERE id_user = ?', $id);
        return $hasil;
    }
}