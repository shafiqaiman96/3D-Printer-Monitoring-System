<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *  ======================================= 
 *  Author     : Shafiq Aiman 
 *  Uni        : UNIKL MFI 
 *  Email      : abeapiq.aa@gmail.com
 * 
 *  ======================================= 
 */
require_once APPPATH . "/third_party/Classes/PHPExcel.php";
class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}
?>