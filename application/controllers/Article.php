<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
    {
        $data['title'] = "Mblog";
		$this->load->view('article', $data);
	}
}

