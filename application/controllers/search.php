<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('mhadits');
	}

	public function index() {
		$this->search_terms();
	}

	public function db(){
		echo DBUSE;
	}

	public function search_terms() {
		$this->load->view("header");
		$this->load->view('search_view');
		$this->load->view("footer");
	}

	public function result() {
		$search_bool = $this->input->post('search_bool');
		$search_bool_arab = $this->input->post('search_bool_arab');
		$search_bool_arab_gundul = $this->input->post('search_bool_arab_gundul');
		$this->load->library('pagination');
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('hadits/search');
		$config['total_rows'] = $totalItems=100;
		$config['per_page'] = $itemsPerPage=30;
		$config['uri_segment'] = 3;
		
		
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$post = $this->input->post();
		echo "<blockquote><small>";
		print_r($post);//exit;
		echo "</small></blockquote>";
		
		if (isset($post['search_no'])) {
			if ($post['search_no']) {
			}
			$search_no = $post['search_no'];
		}
		$search_bool_min = $this->input->post('search_bool_min');
		$search_bool_min_arab = $this->input->post('search_bool_min_arab');
		$search_like = $this->input->post('search_like');
		$search_bab_kitab = $this->input->post('search_bab_kitab');
		$search_like_arab = $this->input->post('search_like_arab');
		$search_like_exact = $this->input->post('search_like_exact');
		$search_like_exact_arab = $this->input->post('search_like_exact_arab');
		
		$imam_id = 0;
		table_use2("fts");
		if (isset($post['imam_id'])) {
			if($post['imam_id'][0] !=0 && is_array($post['imam_id'])) {
				$imams = implode(",", $post['imam_id']);
				$imam_id = $imams;
			}
		}
		
		if (!empty($post)) {
			// If Indonesia
			if ($post['search'] == 'Search') {
				if ($search_bool) {
					// $search_bool;
					$data['search'] = ($this->input->post('search_bool', TRUE));
					$session_sess = search_sess(trim($data['search']));
					$data['search2'] = ($this->input->post('search_bool_min', TRUE));
					$arr = explode(' ', trim($session_sess));
					$sum = '';
					foreach ($arr as $v) {
						if (use_dbs() == "sqlite") {
							$sum .= '' . $v . '* ';
						} else {
							$sum .= '+' . $v . '* ';
						}						
					}

					//return $sum;
					//echo $sum;exit;
					//$plus = str_replace(' ', '+', $post);
					if ($search_bool_min) {
						$arr2 = explode(' ', trim($data['search2']));
						$sum2 = '';
						foreach ($arr2 as $v) {
							$sum2 .= '-' . $v . '* ';
						}
						$data['terms'] = $data['search'];
						$data['show'] = $this->mhadits->searchHaditsBool($sum, $sum2, $imam_id , $page);
					} else {
						$data['terms'] = $data['search'];
						$data['show'] = $this->mhadits->searchHaditsBool($sum,$sum2="", $imam_id, $page);
					}
				} elseif ($search_like) {
					//echo $search_like;
					$data['search'] = strtolower($this->input->post('search_like', TRUE));
					$data['terms'] = trim($data['search']);
					$data['show'] = $this->mhadits->searchHaditsLike($data['search'],$imam_id);
				} elseif ($search_like_exact) {
					//echo $search_like;
					$data['search'] = strtolower($this->input->post('search_like_exact', TRUE));
					$data['terms'] = trim($data['search']);
					$data['show'] = $this->mhadits->searchHaditsLikeExact($data['search'],$imam_id);
				} elseif ($search_no) {
					table_use2("content");
					$data['search'] = $search_no;
					$data['imam_id'] = $imam_id;
					$data['terms'] = trim($data['search']);
					$data['show'] = $this->mhadits->searchHaditsNo($data['imam_id'], $data['search']);
				} elseif ($search_bab_kitab) {
					$data['search'] = strtolower($this->input->post('search_bab_kitab', TRUE));
					$data['terms'] = trim($data['search']);
					$data['show'] = $this->mhadits->searchBabKitab($data['search'],$imam_id);
				}
			} else {
				// arab
				if ($search_bool_arab) {
					// $search_bool;
					$data['search'] = ($this->input->post('search_bool_arab', TRUE));
					$session_sess = search_sess($data['search']);
					$data['search2'] = ($this->input->post('search_bool_min_arab', TRUE));
					$arr = explode(' ', trim($session_sess));
					$sum = '';
					foreach ($arr as $v) {
						$sum .= '' . $v . '* ';
					}
					if ($search_bool_min_arab) {
						$arr2 = explode(' ', trim($data['search2']));
						$sum2 = '';
						foreach ($arr2 as $v) {
							$sum2 .= '-' . $v . ' ';
						}
						$data['terms'] = $data['search'];
						$data['show'] = $this->mhadits->searchHaditsBoolArab($sum, $sum2,$imam_id, $page);
					} else {
						$data['terms'] = $data['search'];
						$data['show'] = $this->mhadits->searchHaditsBoolArab($sum,$sum2="",$imam_id,$page);
					}
				} elseif ($search_bool_arab_gundul) {
					// $search_bool;
					$data['search'] = ($this->input->post('search_bool_arab_gundul', TRUE));
					$session_sess = search_sess($data['search']);
					$data['search2'] = ($this->input->post('search_bool_min_arab_gundul', TRUE));;
					$arr = explode(' ', trim($session_sess));
					$sum = '';
					foreach ($arr as $v) {
						$sum .= '' . $v . ' ';
					}
					if ($search_bool_min_arab) {
						$arr2 = explode(' ', trim($data['search2']));
						$sum2 = '';
						foreach ($arr2 as $v) {
							$sum2 .= '-' . $v . ' ';
						}
						$data['terms'] = $data['search'];
						$data['show'] = $this->mhadits->searchHaditsBoolArabGundul($sum, $sum2,$imam_id);
					} else {
						$data['terms'] = $data['search'];
						$data['show'] = $this->mhadits->searchHaditsBoolArabGundul($sum,$sum2="",$imam_id);
					}
				} elseif ($search_like_arab) {
					//echo $search_like;
					$data['search'] = strtolower($this->input->post('search_like_arab', TRUE));
					$data['terms'] = trim($data['search']);
					$data['show'] = $this->mhadits->searchHaditsLikeArab($data['search'],$imam_id);
				} elseif ($search_like_exact_arab) {
					//echo $search_like;
					$data['search'] = strtolower($this->input->post('search_like_exact_arab', TRUE));
					$data['terms'] = trim($data['search']);
					$data['show'] = $this->mhadits->searchHaditsLikeExactArab($data['search'],$imam_id);
				}
			}
		}
		//exit;
		//$search = $data['search'];
		$this->load->view("header", $data);
		$this->load->view('search_result', $data);
		$this->load->view("footer", $data);
	}

	public function test() {
		$string = "matahari barat";
		$arr = explode(' ', trim($string));
		//$words = array():
		foreach ($arr as $v) {
			echo '+' . $v . ' ';
			//print_r($v);
			//if (strlen($v)>0){
			//$words[] = $v;
			//}
		}
	}

	public function match() {
		$subject = "abcdef";
		$pattern = '/^def/';
		preg_match($pattern, substr($subject, 3), $matches, PREG_OFFSET_CAPTURE);
		print_r($matches);
		// The "i" after the pattern delimiter indicates a case-insensitive search
		if (preg_match("/php/i", "PhP is the web scripting language of choice.")) {
			echo "A match was found.";
		} else {
			echo "A match was not found.";
		}
	}

	function get_version() {
		echo APPPATH;
		echo CI_VERSION; // echoes something like 1.7.1
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */