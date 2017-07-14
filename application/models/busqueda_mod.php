<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Busqueda_mod extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function buscar($data){
    	$this->db->select('u.nombre,u.correo, cm.compra, cm.folio');
        $this->db->from('usuarios AS u');
        $this->db->join('compras AS cm', 'cm.idusuario = u.id');

        if(isset($data['nombre']) && $data['nombre'] != ''){
        	$this->db->like('u.nombre',$data['nombre']);
        }
        if(isset($data['correo']) && $data['correo'] != ''){
        	$this->db->like('u.correo',$data['correo']);
        }
        if(isset($data['compra']) && $data['compra'] != ''){
        	$this->db->like('cm.compra',$data['compra']);
    	}
        if(isset($data['folio']) && $data['folio'] != ''){
        	$this->db->like('cm.folio',$data['folio']);
    	}

        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
        else{
        	return 0;
        }
    }
}