<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Task_model');
    }

    public function add($employeeId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form submission, process the new task
            $data = array(
                'employee_id' => $employeeId,
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'description' => $this->input->post('description')
            );
            $this->Task_model->addTask($data);
            redirect('employees/edit/'.$employeeId);
        } else {
            // Display the add task form
            $data['employeeId'] = $employeeId;
            $this->load->view('tasks/add', $data);
        }
    }

    public function update($taskId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form submission, update the task
            $data = array(
                'title' => $this->input->post('title'),
                'date' => $this->input->post('date'),
                'description' => $this->input->post('description')
            );
            $this->Task_model->updateTask($taskId, $data);
            redirect('employees/edit/'.$this->Task_model->getTask($taskId)->employee_id);
        } else {
            // Display the update task form
            $data['task'] = $this->Task_model->getTask($taskId);
            $this->load->view('tasks/edit', $data);
        }
    }

    public function delete($taskId) {
        // Delete the task
        $employeeId = $this->Task_model->getTask($taskId)->employee_id;
        $this->Task_model->deleteTask($taskId);
        redirect('employees/edit/'.$employeeId);
    }
}
