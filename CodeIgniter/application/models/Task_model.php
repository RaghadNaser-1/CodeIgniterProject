<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

    public function getTasksByEmployee($employeeId) {
        $this->db->where('employee_id', $employeeId);
        return $this->db->get('tasks')->result();
    }

    public function addTask($data) {
        $this->db->insert('tasks', $data);
    }

    public function updateTask($taskId, $data) {
        $this->db->where('id', $taskId);
        $this->db->update('tasks', $data);
    }

    public function deleteTask($taskId) {
        $this->db->where('id', $taskId);
        $this->db->delete('tasks');
    }

}
