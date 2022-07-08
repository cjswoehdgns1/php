<?php
require '../vendor/autoload.php';
require './env.php';
require './func.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$server_inputFileName=$_FILES['inputFileName']['tmp_name'];

$pc_FileName = $_FILES['inputFileName']['name'];
$file_type= pathinfo($pc_FileName, PATHINFO_EXTENSION);

if ($file_type =='xls') {
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
} elseif ($file_type =='xlsx') {
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
} else {
    echo '처리할 수 있는 엑셀 파일이 아닙니다';
    exit;
}

$spreadsheet = $reader->load($server_inputFileName);
$spreadData = $spreadsheet-> getActiveSheet()->toArray();

$_RTN = [];

foreach ($spreadData as $spreadRow) {
    foreach ($spreadRow as $spreadCell) {
        array_push($_RTN, (string)$spreadCell);
    }
}

// echo json_encode($_RTN);

//    확장자에 따른 설정 구분
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xml();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Ods();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Slk();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Gnumeric();
//    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();

/**
 * 임시 
 * 
 */ 



$data = json_encode(['b_no' => $_RTN]);

$RTN = json_decode(getAuthCheck_businessman($data, $serviceKey))->data;
echo json_encode($RTN);
?>