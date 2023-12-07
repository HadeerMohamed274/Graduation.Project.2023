<?php 
include '/xampp/htdocs/project31/Connections/bis.php';


// Excel file name for download 
$fileName = "Staff Absence Table" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array( 'Name', 'Nationa ID','Degree', 'Department', 'Phone'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $bis->query("SELECT * FROM p31_staff WHERE attendance=0"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){  
        $lineData = array( $row['name_en'], $row['nid'], $row['degree'], $row['dep'], $row['phone']); 
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