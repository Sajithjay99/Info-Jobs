<?php
require_once 'dbh.inc.php';?>

<?php 
$query = "SELECT position , location,salary FROM job_vacancies";

$result_set= mysqli_query($conn,$query);

if($result_set){
    // echo mysqli_num_rows($result_set) . "Records found.<hr>";
    // echo"<br>";
$table = '<table>';
$table .= '<tr>
            <th>Position</th><th>Location</th><th>Salary</th>';

    while($record = mysqli_fetch_assoc($result_set)){
    $table .='<tr>';
    $table .='<td>'.$record['position'].'</td>';
    $table .='<td>'.$record['location'].'</td>';
    $table .='<td>'.$record['salary'].'</td>';
    $table .='</tr>';


   
}

$table.='</table>';   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertquery</title>
   <style>
    table{margin-left: auto;
  margin-right: auto;border-collapse:collapse;}
    td,th{border: 1px solid black; padding: 15px;}


   </style>
</head>
<body>
<style>
body {
  background-image: url('../images/homepageimg13.png');
}
</style>
<?php 
include "header2.php";

?>
<br><br><br><br><br><br><br>
<h1 style="text-align:center">Our Job Vacancies</h1>
<br>
<?php echo $table; ?>

<br><br><br><br><br><br>

<?php 
include "footer2.php";


