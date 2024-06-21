<?php
require_once 'dbh.inc.php';?>

<?php 
$position ='Tour guide';
$location='Hikkaduwa';
$total_vacancies='02';
$salary='35000';


$query="INSERT INTO job_vacancies(position,location,total_vacancies,salary)
        VALUES('{$position}','{$location}','{$total_vacancies}','{$salary}')";

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