<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function getEmployees() {
        return $this->db->get('employees')->result();
    }

    public function addEmployee($data) {
        $this->db->insert('employees', $data);
    }

    public function editEmployee($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('employees', $data);
    }

    public function deleteEmployee($id) {
        $this->db->where('id', $id);
        $this->db->delete('employees');
    }

}
