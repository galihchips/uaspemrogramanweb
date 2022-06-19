<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelResidence extends Model
{
    function __construct() {
        $this->db = db_connect();
    }
    function showdata(){
        $builder = $this->db->table("residence as r");
        $builder->select('r.*, a.name as area_name, c.name as category_name');
        $builder->join('area as a', 'r.area_id = a.id');
        $builder->join('category as c', 'r.category_id = c.id');
        $data = $builder->get()->getResult();
        return $data;
    }
    function savedata($data){
        return $this->db->table('residence')->insert($data);
    }
    function deletedata($id){
        return $this->db->table('residence')->delete(['id' => $id]);
    }
    function get($id){
        return $this->db->table('residence')->getWhere(['id' => $id]);
    }
    function editdata($id, $data){
        return $this->db->table('residence')->update($data, ['id' => $id]);
    }
    
}
