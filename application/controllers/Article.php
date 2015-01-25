<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('article_model');
		$this->load->helper('url');
	}

	public function index()
    {
		$data['articles'] = $this->article_model->get_article();
		$data['title'] = '博文列表';

		$data['styles_dir'] = base_url('application/styles');
		$this->load->view('header', $data);
		$this->load->view('article', $data);
		$this->load->view('booter', $data);
	}

	public function show($art_id) {
		$data['article'] = $this->article_model->get_article($art_id);
		$data['styles_dir'] = base_url('application/styles');
		$this->load->view('header', $data);
		$this->load->view('article_show', $data);
		$this->load->view('booter', $data);
	}

}

