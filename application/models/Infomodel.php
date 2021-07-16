<?php
class Infomodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAllKategori()
    {
        $this->db->order_by('nama','asc');
        return $this->db->get('bidang_usaha');
    }
    
    public function getLokerDetil($lid)
    {
        $this->db->select('lowongan.*');
        $this->db->select('nama as bidang_usaha');
        $this->db->where('id',$lid);
        return $this->db->get('lowongan')->row();
    }
    
    public function getLokerTerbaru($jum,$ex)
    {
        $this->db->where('status',1);
        $this->db->order_by('upload_time','desc');
        return $this->db->get('lowongan');
    }
}