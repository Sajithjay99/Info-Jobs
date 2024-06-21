<?php
require_once 'dbh.inc.php';?>

<?php 
$company_name ='Pankaja Book Shop';
$contact_person='Pankaja';
$address='pannala';
$city='Kottpannalaawa';
$email='pankaja20@gmail.com';
$mobile='0778946521';

$query="INSERT INTO employer(company_name,contact_person,address,city,email,mobile)
        VALUES('{$company_name}','{$contact_person}','{$address}','{$city}','{$email}','{$mobile}')";

       $result= mysqli_query($conn,$query);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinsertquery</title>
    
</head>
<body>




 


            
            
        



</body>
</html>
<?php mysqli_close($conn); ?>