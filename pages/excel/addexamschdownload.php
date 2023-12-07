<?php 
include '/xampp/htdocs/project31/Connections/bis.php';


// Excel file name for download 
$fileName = "Exam Schedule Table" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('Day', 'Date', 'Period', 'Subject', 'Number', 'Schedule Code', 'Subject Code', 'Exam Type'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $bis->query("SELECT * FROM exam_schedule, courses"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){  
        $lineData = array( $row['day'], $row['exam_date'], $row['period'], $row['CourseName'], $row['total_no'], $row['SchID'], $row['CourseCode'], $row['examtypes']); 
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