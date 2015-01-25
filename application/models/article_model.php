<?php
class article_model extends CI_Model {
	
	public function __construct(){
		$this->load->database();
	}

	/*
	 * param: (int)$art_id article id
	 */
	public function get_article($art_id = FALSE) {

		# return all articles if $art_id is FALSE
		if ($art_id === FALSE) {
			$query = $this->db->get('articles');
			return $query->result_array();
		}
		
		# return ont article where id is $art_id
		$query = $this->db->get_where('articles', array('id' => $art_id));
		return $query->row_array();
	}	
}
?>
