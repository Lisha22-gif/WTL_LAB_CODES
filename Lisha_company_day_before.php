<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company Registration form</title>
</head>
<body>
<?php

$host = 'localhost';  
$user = 'root';  
$pass = 'root';  
// $conn = mysqli_connect($host, $user, $pass);  
// if(! $conn )  
{  
//   die('Could not connect: ' . mysqli_error());  
}  
echo '<br>Connected successfully<br>';  

// mysqli_select_db($conn,'companyday'); 
echo "<br>In Database Successfully<br>";


 echo "Adding Registration column<br>"; 
 $add_coldate = "alter table company add column Registartiondate date "; 

//  if(mysqli_query($conn,$add_coldate)) 
 {
 	echo "Column add Successfully<br>";
 }


$insertRecord  = 'insert into company values(103,"ABC","Mumbai","CSE","2022-06-10")';

//  if(mysqli_query($conn,$insertRecord))
 {
 	echo "<br>Record insert Successfully";
 }

$fetchrecord = "Select * from company";
// $result = mysqli_query($conn,$fetchrecord);
// while ($rows = mysqli_fetch_assoc($result)) 
// {
// 			echo "<br>".$rows['companyId'].$rows['companyName'].$rows['location'].$rows['Registartiondate'];
// }

echo "------------------------";
$fetchdatewise  = 'select * from company where Registartiondate < "2022-05-18" ';
// $result = mysqli_query($conn,$fetchdatewise);
// while ($rows = mysqli_fetch_assoc($result)) 
{
			// echo "<br>".$rows['companyId'].$rows['companyName'].$rows['location'].$rows['Registartiondate'];
}
?>

</body>
</html>