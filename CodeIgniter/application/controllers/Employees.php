<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
    }
	
    public function index() {
        $this->load->model('employee_model');
        $data['employees'] = $this->employee_model->getEmployees();
        $this->load->view('employees/index', $data);
    }

    public function add() {
        // Add new employee logic here
    }

	public function edit($id) {
		$this->load->model('employee_model');
		$this->load->model('task_model');
		$data['employee'] = $this->employee_model->getEmployee($id);
		$data['tasks'] = $this->task_model->getTasksByEmployee($id);
		$this->load->view('employees/edit', $data);
	}
	

    public function delete($id) {
        // Delete employee logic here
    }

}
