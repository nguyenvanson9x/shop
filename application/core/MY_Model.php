<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class MY_Model extends CI_Model {
    var $table = '';
    var $key = 'id';
    var $order = '';
    var $select = '';
    var $image = '';
    /*
    * Insert new row to database
    * $data: your data
    */
    function create($data = array()) {
        if ($this->db->insert($this->table, $data))
            return TRUE;
        return FALSE;
    }
    
    /*
    * Update table by id
    * $id: key of table
    * $data: your data
    */
    function update($id, $data) {
        if (!$id)
            return FALSE;
        $where = array();
        $where[$this->key] = $id;
        $this->update_rule($where, $data);
        return false;
    }
    
    /*
    * Update table with rule
    */
    function update_rule($where, $data) {
        if (!$where)
            return FALSE;
        $this->db->where($where);
        $this->db->update($this->table, $data);
        return TRUE;
    }
    
    /*
    * Delete row by id
    */
    function delete($id) {
        if (!$id)
            return FALSE;
        if (is_numeric($id))
            $where = array($this->key => $id);
        else
            $where = $this->key . " IN (".$id.") ";
        $this->del_rule($where);
        return TRUE;
    }
    
    /*
    * Delete row with rule
    */
    function del_rule($where) {
        if (!$where)
            return FALSE;
        $this->db->where($where);
        $this->db->delete($this->table);
        return TRUE;
    }
    
    /*
    * Excute query
    */
    function query($sql) {
        $rows = $this->db->query($sql);
        return $rows->result();
    }
    
    /*
    * Get row's info by id
    */
    function get_info($id, $field = '') {
        if (!$id)
            return FALSE;
        $where = array();
        $where[$this->key] = $id;
        
        return $this->get_info_rule($where, $field);
    }
    
    /*
    * get row's info by rule
    */
    function get_info_rule($where = array(), $field = '') {
        if ($field)
            $this->db->select($field);
            
        $this->db->where($where);
        $query = $this->db->get($this->table);
        
        if ($query->num_rows())
            return $query->row();
        return FALSE;
    }
    
    /*
    * Count total rows
    */
    function get_total($input = array()) {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }
    
    /*
    * Get sum of field
    */
    function get_sum($field, $where = array()) {
        $this->db->select_sum($field);
        $this->db->where($where);
        $this->db->from($this->table);
        
        $row = $this->db->get()->row();
        
        foreach ($row as $f => $v)
            $sum = $v;
            
        return $sum;
    }
    
    /*
    * Get a row
    */
    function get_row($input = array()) {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    
    /*
    * Get list
    */
    function get_list($input = array()) {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    /*
    * 
    */
    protected function get_list_set_input($input = array()) {
        if (isset($input['where']) && $input['where'])
            $this->db->where($input['where']);
            
        if (isset($input['like']) && $input['like'])
            $this->db->like($input['like'][0], $input['like'][1]);
        
        if (isset($input['order'][0]) && isset($input['order'][1]))
            $this->db->order_by($input['order'][0], $input['order'][1]);
        else {
            $order = ($this->order == '') ? array($this->table . '.' . $this->key, 'desc') : $this->order;
            $this->db->order_by($order[0], $order[1]);
        }    
        
        if (isset($input['limit'][0]) && isset($input['limit'][1]))
            $this->db->limit($input['limit'][0], $input['limit'][1]);
    }
    
    /*
    * Check if data exists
    */
    function check_exists($where = array()) {
        $this->db->where($where);
        $query = $this->db->get($this->table);
        
        if ($query->num_rows() > 0)
            return TRUE;
        return FALSE;
    }
}