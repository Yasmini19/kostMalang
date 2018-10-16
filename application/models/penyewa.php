<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewa extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function cari($key){
    	//$query = $connection->query("SELECT * FROM kost a WHERE id_kost=$_GET[key]");
    	$this->db->query('SELECT * FROM kost a WHERE id_kost=$_GET[key]');
    	
    }
}
?>