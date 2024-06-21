<?php
require_once 'dbh.inc.php';?>

<?php 
$query = "SELECT js_fName , js_lName,js_email FROM job_seeker";

$result_set= mysqli_query($conn,$query);

if($result_set){
    
$table = '<table>';
$table .= '<tr>
            <th>First Name</th><th>Last Name</th><th>Email</th>';

    while($record = mysqli_fetch_assoc($result_set)){
    $table .='<tr>';
    $table .='<td>'.$record['js_fName'].'</td>';
    $table .='<td>'.$record['js_lName'].'</td>';
    $table .='<td>'.$record['js_email'].'</td>';
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
  background-image: url('../images/homepageimg12.png');
}
</style>
<?php 
include "mainheader.php";

?>
<br><br><br><br><br><br><br>
<h1 style="text-align:center">Our Registered Job seekers</h1>
<br>
<?php echo $table; ?>

<br><br><br><br><br><br>

<?php 
include "footer.php";


