<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
      parent::__construct();
      //load chart_model from model
      $this->load->model('chart_model');
    }
 
    function index(){
      $data = $this->chart_model->get_ten_humid_in()->result();
      $x['data'] = json_encode($data);
       // print_r(reset($x));
      $this->load->view('welcome_message',$x);
    }

    public function tempin(){
      $data = $this->chart_model->get_ten_temp_in()->result();
      $a['data'] = json_encode($data);
      print_r(reset($a));
    }

    public function tempout(){
      $data2 = $this->chart_model->get_ten_temp_out()->result();
	  $b['data2'] = json_encode($data2);
	  // $this->load->view('welcome_message',$x);
      print_r(reset($b));
  	}

  	public function humidin(){
      $data3 = $this->chart_model->get_ten_humid_in()->result();
	  $c['data3'] = json_encode($data3);
      print_r(reset($c));
    }

    public function humidout(){
      $data4 = $this->chart_model->get_ten_humid_out()->result();
  	  $d['data4'] = json_encode($data4);
      print_r(reset($d));
    }


  //   function graph(){
  //   	$data = $this->chart_model->get_ten_data()->result();
  //     	$last['data'] = json_encode($data);
		// print_r($last);
  //   }
}