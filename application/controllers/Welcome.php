<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}

	public function adminRegister()
	{
		$this->load->model('queries');
		$roles = $this->queries->getRoles();
		// print_r($roles);
		// exit();

		$this->load->view('register', ['roles' => $roles]);
	}

	public function adminSignUp()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmPassword', 'Password Confirmation', 'required');

		if($this->form_validation->run()){
			
			$data = $this->input->post();

			$data['password'] = sha1($data['password']);

			$this->load->model('queries');

			if($this->queries->insertAdmin($data)){
				$this->session->set_flashdata('message', 'Admin Data Saved successfully');
			}
			else{
				$this->session->set_flashdata('message', 'Admin Data Not Saved');
			}
			return redirect('welcome/adminRegister');
		}
		else{
			$this->adminRegister();
		}
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function adminLogin(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if($this->form_validation->run()){
			
			$data = $this->input->post();

			$this->load->model('queries');
			$userData = $this->queries->loginAdmin($data);

			if($userData){
				$sessionData = [
					'user_id' => $userData->user_id,
					'username' => $userData->username,
					'username' => $userData->email,
					'username' => $userData->role_id
				];

				$this->session->set_userdata($sessionData);
				return redirect('admin/dashboard');
			}
			else{
				$this->session->set_flashdata('message', 'Incorrect Username / Password');
				return redirect('welcome/login');
			}
		}
		else{
			$this->login();
		}

	}

}
