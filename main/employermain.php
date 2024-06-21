<?php
require_once 'dbh.inc.php';?>

<?php 
$query = "SELECT company_name , address,email FROM employer";

$result_set= mysqli_query($conn,$query);

if($result_set){
    // echo mysqli_num_rows($result_set) . "Records found.<hr>";
    // echo"<br>";
$table = '<table>';
$table .= '<tr>
            <th>Company Name</th>
            <th>Adress</th>
            <th>Email</th>
            ';

    while($record = mysqli_fetch_assoc($result_set)){
    $table .='<tr>';
    $table .='<td>'.$record['company_name'].'</td>';
    $table .='<td>'.$record['address'].'</td>';
    $table .='<td>'.$record['email'].'</td>';
   
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
  background-image: url('../images/homepageimg7.png');
}
</style>
<?php 
include "mainheader.php";

?>
<br><br><br><br><br><br><br>
<h1 style="text-align:center">Our Registered Employers</h1>
<br>
<?php echo $table; ?>

<br><br><br><br><br><br>

<?php 
include "footer.php";


