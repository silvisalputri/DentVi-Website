<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFaq extends CI_Model
{
	
	public function getFaq($id_faq = null)
    {
        $this->db->select('*');
        $this->db->from('faq');
        if ($id_faq != null) {
            $this->db->where('id_faq', $id_faq);
        }
        $hasil = $this->db->get();
        return $hasil;
    }
    public function addFaq($pertanyaan, $jawaban){
        $query = "INSERT INTO faq (pertanyaan, jawaban) VALUES (?,?)";
        $hasil = $this->db->query($query, array($pertanyaan, $jawaban));
        
        return $hasil;
    }
    public function deleteFaq($id){
        $hasil = $this->db->query('DELETE FROM faq WHERE id_faq = ?', $id);
        return $hasil;
    }
    public function editFaq($pertanyaan, $jawaban, $id){
        $query = "UPDATE faq SET
                    pertanyaan = ?,
                    jawaban = ?
                    WHERE id_faq = ?";
        $hasil = $this->db->query($query, array($pertanyaan, $jawaban, $id));
        return $hasil;
    }
}