<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model{
    public function check($e){
        $sql1 = "SELECT * FROM dokter WHERE email = ?";
        try{
            $hasil = $this->db->query($sql1, array($e));
            //$hasil = $this->db->get();
            return $hasil;
        }catch(Exception $e){
            $e->getMessage();
            return null;
        }
    }
}