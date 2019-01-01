<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class List_of_candidate extends MY_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('admin/candidate/candidate_model');

	}
	function index()
	{
		$data['candidates'] = $this->candidate_model->get_candidate();
		/*echo "<pre>";
		print_r($data);
		die();*/
		$this->load->view('admin/candidate/listing_of_candidate_view.php',$data);

	}
	   public function createXLS() {
		// create file name
        $fileName = 'data-'.time().'.xlsx';  
		// load excel library
        $this->load->library('excel');
        $this->load->helper('download');
        $candidates = $this->candidate_model->get_candidate();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'First Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Middle Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Last Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Mobile Number');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Landline Number');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Permanent Address');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Present Address');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'State');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'City');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', '10th School Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', '10th Marks');
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', '10th Board');
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', '12th School Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', '12th Marks');
        $objPHPExcel->getActiveSheet()->SetCellValue('P1', '12th Board');

        $objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'College');
        $objPHPExcel->getActiveSheet()->SetCellValue('R1', 'University');
        $objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Graduation Marks');
        $objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Experience');       
        $objPHPExcel->getActiveSheet()->SetCellValue('U1', 'Gender');       
        // set Row
        $rowCount = 2;
        foreach ($candidates as $element) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $element['first_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $element['middle_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $element['last_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['email']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $element['mobile_no']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $element['landline_no']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $element['address_1']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $element['address_2']);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $element['state_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $element['city_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $element['10th_school_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $element['10th_marks']);
            $objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $element['10th_board']);
            $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $element['12th_school_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $element['12th_marks']);
            $objPHPExcel->getActiveSheet()->SetCellValue('P' . $rowCount, $element['12th_board']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Q' . $rowCount, $element['graduation_college']);
            $objPHPExcel->getActiveSheet()->SetCellValue('R' . $rowCount, $element['graduation_university']);
            $objPHPExcel->getActiveSheet()->SetCellValue('S' . $rowCount, $element['graduation_marks']);
            $objPHPExcel->getActiveSheet()->SetCellValue('T' . $rowCount, $element['experience_year'].' years '.$element['experience_month'].' month');
            $objPHPExcel->getActiveSheet()->SetCellValue('U' . $rowCount, $element['gender']);
            $rowCount++;
        }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('files/excel/'.$fileName);
        force_download('files/excel/'.$fileName, NULL);
		// download file
        // header("Content-Type: application/vnd.ms-excel");
               
    }
    function view($candidate_id)
    {
    	$data['candidate_dtls'] = $this->candidate_model->get_candidate_detls($candidate_id);
    	/*echo "<pre>";
    	print_r($candidate_dtls);
    	die();*/
    	$this->load->view('admin/candidate/candidate_view',$data);
    }
}