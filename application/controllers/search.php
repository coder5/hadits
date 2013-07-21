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
        $post = $this->input->post();
        print_r($post);//exit;
        $imam_id = 0;
		if ($post['search_no']) {		
			$search_no = $post['search_no'];
			if($post['imam_id'] !=0) {
				$imam_id = $post['imam_id'];
			}
		}
        $search_bool_min = $this->input->post('search_bool_min');
        $search_bool_min_arab = $this->input->post('search_bool_min_arab');
        $search_like = $this->input->post('search_like');
        $search_like_arab = $this->input->post('search_like_arab');
        $search_like_exact = $this->input->post('search_like_exact');
        $search_like_exact_arab = $this->input->post('search_like_exact_arab');
        if (!empty($post)) {
            // If Indonesia
            if ($post['search'] == 'Submit') {
                if ($search_bool) {
                    // $search_bool;
                    $data['search'] = ($this->input->post('search_bool', TRUE));
                    $data['search2'] = ($this->input->post('search_bool_min', TRUE));
                    $arr = explode(' ', trim($data['search']));
                    $sum = '';
                    foreach ($arr as $v) {
                        $sum .= '' . $v . ' ';
                    }

                    //return $sum;
                    //echo $sum;exit;
                    //$plus = str_replace(' ', '+', $post);
                    if ($search_bool_min) {
                        $arr2 = explode(' ', trim($data['search2']));
                        $sum2 = '';
                        foreach ($arr2 as $v) {
                            $sum2 .= '-' . $v . ' ';
                        }
                        $data['terms'] = $data['search'];
                        $data['show'] = $this->mhadits->searchHaditsBool($sum, $sum2, $imam_id);
                    } else {
                        $data['terms'] = $data['search'];
                        $data['show'] = $this->mhadits->searchHaditsBool($sum,$sum2="", $imam_id);
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
                    $data['search'] = $search_no;
                    $data['imam_id'] = $post['imam_id'];
                    $data['terms'] = trim($data['search']);
                    $data['show'] = $this->mhadits->searchHaditsNo($data['imam_id'], $data['search']);
                }
            } else {
                if ($search_bool_arab) {
                    // $search_bool;
                    $data['search'] = ($this->input->post('search_bool_arab', TRUE));
                    $data['search2'] = ($this->input->post('search_bool_min_arab', TRUE));
                    $arr = explode(' ', trim($data['search']));
                    $sum = '';
                    foreach ($arr as $v) {
                        $sum .= '+' . $v . ' ';
                    }
                    if ($search_bool_min_arab) {
                        $arr2 = explode(' ', trim($data['search2']));
                        $sum2 = '';
                        foreach ($arr2 as $v) {
                            $sum2 .= '-' . $v . ' ';
                        }
                        $data['terms'] = $data['search'];
                        $data['show'] = $this->mhadits->searchHaditsBoolArab($sum, $sum2,$imam_id);
                    } else {
                        $data['terms'] = $data['search'];
                        $data['show'] = $this->mhadits->searchHaditsBoolArab($sum,$sum2="",$imam_id);
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