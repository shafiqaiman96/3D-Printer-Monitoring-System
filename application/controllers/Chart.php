<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart extends CI_Controller{

  public function index()
  {
    $result = $this->db->select('temperature, humidity, dateandtime, sensor')
      //->where("sensor= 'Inside'")
      ->get('temperaturedata');
    $data = array('condition' => $result);
    $this->load->view('history', $data);
  }

  public function excel() {
   $this->load->model('Chart_model', 'export');
   $this->load->library('excel');
   $this->excel->setActiveSheetIndex(0);
   $this->excel->getActiveSheet()->SetCellValue('A1', 'Time');
   $this->excel->getActiveSheet()->SetCellValue('B1', 'Sensor');
   $this->excel->getActiveSheet()->SetCellValue('C1', 'Temperature');
   $this->excel->getActiveSheet()->SetCellValue('D1', 'Humidity');

   $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14);
   $this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
   $this->excel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle('B1')->getFont()->setSize(14);
   $this->excel->getActiveSheet()->getStyle('B1')->getFill()->getStartColor()->setARGB('#333');
   $this->excel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle('C1')->getFont()->setSize(14);
   $this->excel->getActiveSheet()->getStyle('C1')->getFill()->getStartColor()->setARGB('#333');
   $this->excel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
   $this->excel->getActiveSheet()->getStyle('D1')->getFont()->setSize(14);
   $this->excel->getActiveSheet()->getStyle('D1')->getFill()->getStartColor()->setARGB('#333');

   for($col = ord('A'); $col <= ord('E'); $col++){ 
    $this->excel->getActiveSheet()->getStyle(chr($col))->getFont()->setSize(12);
    $this->excel->getActiveSheet()->getStyle(chr($col))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); }
    $rs = $this->db->get('temperaturedata');
    $exceldata="";
    foreach ($rs->result_array() as $row) {
      $exceldata[] = $row;
    }
    $this->excel->getActiveSheet()->fromArray($exceldata, null, 'A3');
    $this->excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $this->excel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $this->excel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $this->excel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $filename='history('.date("d-m-Y").').xls';
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
    $objWriter->save('php://output');


  }
}