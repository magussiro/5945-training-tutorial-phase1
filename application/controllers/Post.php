<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$this->load->model("PostModel");
		$results = $this->PostModel->find_all();
		$this->load->view('post_index',Array("results" => $results ));
	}

	public function new_(){
		$this->load->view('post_edit',
			Array(
				"userName" =>"",
				"userEmail" =>"",
				"content" =>""
			)
		);
	}
	
	public function create(){
		$userName = $this->input->post("UserName");
		$userEmail = $this->input->post("UserEmail");
		$content = $this->input->post("Content");

		if(empty($userName) || empty($content)){
			$this->load->view('post_edit',
				Array(
					"userName" => $userName,
					"userEmail" => $userEmail,
					"content" => $content,
					"error" => "使用者名稱或內文未填"
				)
			);
			return true;
		}
		$this->load->model("PostModel");
		$this->PostModel->insert($userName,$userEmail,$content);
		redirect(site_url("/post/index"));

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */