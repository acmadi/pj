<?php if ( ! defined('BASEPATH')) exit('No direct script accessed allowed'); 
/*-------------------------------------------------------
 * Controller untuk menampilkan Search Suggestion
 *-------------------------------------------------------
 */   
class Autocomplete extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
    }
	
    function lookup(){
        $this->load->model('tr_do_model');
        $keyword=$this->input->post('term');
        $data['response']='false';
        $query=$this->tr_do_model->find($keyword);
        
        if(!empty($query)){
            $data['response']='true';
            $data['message']=array();
            foreach($query as $row){
                $data['message'][]=array(
                'id'=>$row['No_Do'],
                'value'=>$row['No_Do']
                );
            }
        }
        echo json_encode($data);
    }
    
    function lookpn(){
        $this->load->model('ms_pelanggan_model');
        $keyword=$this->input->post('term');
        $data['response']='false';
        $query=$this->ms_pelanggan_model->find($keyword);
        
        if(!empty($query)){
            $data['response']='true';
            $data['message']=array();
            foreach($query as $row){
                $data['message'][]=array(
                'id'=>$row['Kode'],
                'value'=>$row['Perusahaan']
                );
            }
        }
        echo json_encode($data);
    }
    
    function looksales(){
        $this->load->model('sales_model');
        $keyword=$this->input->post('term');
        $data['response']='false';
        $query=$this->sales_model->find($keyword);
        
        if(!empty($query)){
            $data['response']='true';
            $data['message']=array();
            foreach($query as $row){
                $data['message'][]=array(
                'id'=>$row['Kode'],
                'value'=>$row['Nama']
                );
            }
        }
        echo json_encode($data);
    }
	
	function lookgudang(){
        $this->load->model('ms_gudang_model');
        $keyword=$this->input->post('term');
        $data['response']='false';
        $query=$this->ms_gudang_model->find($keyword);
        
        if(!empty($query)){
            $data['response']='true';
            $data['message']=array();
            foreach($query as $row){
                $data['message'][]=array(
                'id'=>$row['Kode'],
                'value'=>$row['Nama']
                );
            }
        }
        echo json_encode($data);
    }
	
	function looksupplier(){
        $this->load->model('ms_supplier_model');
        $keyword=$this->input->post('term');
        $data['response']='false';
        $query=$this->ms_supplier_model->find($keyword);
        
        if(!empty($query)){
            $data['response']='true';
            $data['message']=array();
            foreach($query as $row){
                $data['message'][]=array(
                'id'=>$row['Kode'],
                'value'=>$row['Perusahaan']
                );
            }
        }
        echo json_encode($data);
    }
}