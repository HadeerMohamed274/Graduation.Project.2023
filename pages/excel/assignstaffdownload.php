<?php 
include '/xampp/htdocs/project31/Connections/bis.php';


// Excel file name for download 
$fileName = "Assign Staff Table" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array( 'Code' ,'English Name','Arabic Name', 'National ID', 'Phone', 'Attendance', 'Floor', 'Building'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $bis->query("SELECT * FROM `p31_staff` WHERE floor IS NOT NULL"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){  
        $lineData = array( $row['code'], $row['name_en'], $row['name_ar'], $row['nid'], $row['phone'], $row['attendance'], $row['floor'], $row['building_no']); 
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