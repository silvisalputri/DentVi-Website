<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTesti extends CI_Model{
	public function getTesti($id_testimonial = null)
    {
        $this->db->select('*');
        $this->db->from('testimonial');
        if ($id_testimonial != null) {
            $this->db->where('id_testimonial', $id_testimonial);
        }
        $hasil = $this->db->get();
        return $hasil;
    }
    public function addTesti($nama, $rate, $ket){
        $query = "INSERT INTO testimonial (nama_testi, rating, keterangan) VALUES (?,?,?)";
        $hasil = $this->db->query($query, array($nama, $rate, $ket));
        
        return $hasil;
    }
    public function deleteTesti($id){
        $hasil = $this->db->query('DELETE FROM testimonial WHERE id_testimonial = ?', $id);
        return $hasil;
    }
    public function editTesti($nama, $rate, $ket, $id_testi){
        $query = "UPDATE testimonial SET
                    nama_testi = ?,
                    rating = ?,
                    keterangan = ?
                    WHERE id_testimonial = ?";
        $hasil = $this->db->query($query, array($nama, $rate, $ket, $id_testi));
        return $hasil;
    }
}