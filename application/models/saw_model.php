<?php
    class Saw_model extends CI_Model{

        function __construct(){
            parent::__construct();
        }

        function get_list()
        {
            $q = $this->db->query("
                SELECT saw_h.*,gudang.Nama
    			FROM saw_h
    			LEFT OUTER JOIN gudang
    			ON saw_h.Kd_gudang = gudang.Kode");
            return $q->result();
        }

        function get_detail($id){
            $q = $this->db->query("SELECT saw_d.*,
                barang.Nama, barang.Ukuran, barang.Satuan1
                FROM saw_d
                LEFT OUTER JOIN barang
                ON saw_d.Kd_Brg = barang.Kode
                WHERE No_Saw = '$id'");
            return $q->result();
        }

        function insert($data,$kode)
        {
            $rr=$this->db->query("select * from saw_h where No_Saw = '$kode'");
            if($rr->num_rows() ==  0)
            {
                $q=$this->db->insert('saw_h', $data);
                return "ok";
            }else
            {
                return "gagal";
            }
        }
        
        function insert_det($datadet)
        {
            $this->db->insert('saw_d', $datadet);
            
        }
        

        function update($data, $kode)
        {
            $this->db->where('No_Saw', $kode);
            $this->db->update('saw_h', $data);
            return "ok";
        }

        //model untuk delete
        function delete($kode)
        {
            $this->db->where('No_Saw',$kode);
            $this->db->delete('saw_h');
            return "ok";
        }
        function delete_det($kode)
        {
            $this->db->where('No_Saw',$kode);
            $this->db->delete('saw_d');
            //return "ok";
        }
    }