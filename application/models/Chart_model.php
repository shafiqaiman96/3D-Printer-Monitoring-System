<?php
class Chart_model extends CI_Model{
 
  //get data from database
  function get_data(){
      $this->db->select('temperature, humidity, dateandtime');
      $result = $this->db->get('temperaturedata');
      return $result;
  }

  function get_ten_temp_in(){
      $this->db->select('temperature, dateandtime');
      $this->db->where("sensor= 'Inside'");
      $this->db->order_by('dateandtime', 'desc');
      $this->db->limit(10);
      $result = $this->db->get('temperaturedata');
      return $result;
  }
  function get_ten_temp_out(){
      $this->db->select('temperature, dateandtime');
      $this->db->where("sensor= 'Outside'");
      $this->db->order_by('dateandtime', 'desc');
      $this->db->limit(10);
      $result = $this->db->get('temperaturedata');
      return $result;
  }

  function get_ten_humid_in(){
      $this->db->select('humidity, dateandtime');
      $this->db->where("sensor= 'Inside'");
      $this->db->order_by('dateandtime', 'desc');
      $this->db->limit(10);
      $result = $this->db->get('temperaturedata');
      return $result;
  }
  function get_ten_humid_out(){
      $this->db->select('humidity, dateandtime');
      $this->db->where("sensor= 'Outside'");
      $this->db->order_by('dateandtime', 'desc');
      $this->db->limit(10);
      $result = $this->db->get('temperaturedata');
      return $result;
  }

}