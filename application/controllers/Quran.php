<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Quran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mquran');
        $this->mquran = new MQuran();
    }

    public function index() {
        $this->search_terms();
    }

    public function db() {
        echo DBUSE . '<br/>';
        if (! defined('PDO::ATTR_DRIVER_NAME')) {
            echo 'PDO unavailable';
        } elseif (defined('PDO::ATTR_DRIVER_NAME')) {
            echo 'PDO available';
        }
        phpinfo();
    }

    public function surah($sura_id, $aya_id = FALSE) {
        $data['sura'] = $this->mquran->get_surah($sura_id, $aya_id);
        $this->load->template('quran/quran_sura_view', $data);
    }

    public function sura_test($sura_id, $aya_id = FALSE) {
        $data['sura'] = $this->mquran->get_one_surah($sura_id, $aya_id);
        $this->load->template('quran/quran_sura_test_view', $data);
    }

    public function search_terms() {
        $this->load->template('quran/search_quran_view');
    }

    public function result() {
        $data['title'] = "test";
        $post = $this->input->post(NULL, TRUE);
        $search_bool = $this->input->post('search_bool');
        
        if (! empty($post)) {
            // If Indonesia
            if ($post['search'] == 'Search') {
                if ($search_bool) {
                    // $search_bool;
                    $data['search'] = ($this->input->post('search_bool', TRUE));
                    $session_sess = search_sess(trim($data['search']));
                    $data['search_min'] = ($this->input->post('search_bool_min', TRUE));
                    $arr = explode(' ', trim($session_sess));
                    $sum = escp_db($session_sess);
                    $data['terms'] = keyword($session_sess);
                    // var_dump($sum);exit;
                    $data['show'] = $this->mquran->searchQuranBool($sum);
                }
            }
        }
        
        // $search = $data['search'];
        $this->load->template('quran/search_quran_result', $data);
    }

    public function hadits_details($doic) {
        $data['docid'] = $doic;
        $this->load->view("hadits_details", $data);
    }

    public function test() {
        $string = "matahari barat";
        $arr = explode(' ', trim($string));
        // $words = array():
        foreach ($arr as $v) {
            echo '+' . $v . ' ';
            // print_r($v);
            // if (strlen($v)>0){
            // $words[] = $v;
            // }
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

