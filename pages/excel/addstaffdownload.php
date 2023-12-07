<?php 
include '/xampp/htdocs/project31/Connections/bis.php';


// Excel file name for download 
$fileName = "Add Staff Table" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array( 'Name', 'Degree', 'Department', 'Phone', 'Block'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $bis->query("SELECT * FROM p31_staff"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){  
        $lineData = array( $row['name_en'], $row['degree'], $row['dep'], $row['phone'], $row['block']); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
}        
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;

?>




header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=test_upload.csv');

$output = fopen("php://output", "w");

$output.='
    <!-- <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Degree</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">phone</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Block</th>
    </tr> -->

';

$output = fopen("php://output", "w");
$headingArray[] = "Sl No.";
$headingArray[] = "Name";
$headingArray[] = "Age";
fputcsv( $output , $headingArray );
$dataArray[] = "1";
$dataArray[] = "Ram Madhav";
$dataArray[] = "15";
fputcsv($output, $dataArray);
fclose($output);