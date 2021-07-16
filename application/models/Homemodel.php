<?php
class Homemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAllkeahlian()
    {
        $this->db->order_by('nama','asc');
        return $this->db->get('keahlian');
    }
    
    public function getAllLoker($page,$off)
    {
        $this->db->where('status',1);
        $this->db->order_by('tanggal_akhir','desc');
        return $this->db->get('lowongan',$page,$off);
    }
    
    public function countAllLoker()
    {
        $this->db->where('status',1);
        return $this->db->count_all_results('lowongan');
    }
    
    public function getkeahlianDetil($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('keahlian')->row();
    }
    
    public function getAllLokerBykeahlian($id,$page,$off)
    {
        $this->db->where('status',1);
        $this->db->where('id',$id);
        $this->db->order_by('tanggal_akhir','desc');
        return $this->db->get('lowongan',$page,$off);
    }
    
    public function countAllLokerkeahlian($id)
    {
        $this->db->where('status',1);
        $this->db->where('id',$id);
        return $this->db->count_all_results('lowongan');
    }
}