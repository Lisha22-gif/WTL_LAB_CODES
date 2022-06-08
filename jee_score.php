<?php
$con = mysqli_connect("localhost","root","");
 
$createdb = "Create database WTL";
 mysqli_query($con,$createdb);
 
mysqli_select_db($con,"wtl");
 
 
 
 $create_table = "create table student(
        sid int PRIMARY KEY,
        sname varchar(30),
        semail varchar(30),
        smarks int,
        sjee int
        )";
 
    mysqli_query($con,$create_table);
   
if(isset($_POST["insert"])){
 
    $sid = $_POST["sid"];
    $sname = $_POST["sname"];
    $semail = $_POST["semail"];
    $smarks = $_POST["smarks"];
    $sjee = $_POST["sjee"];

    $insert_data = "insert into student
    VALUES ('$sid','$sname','$semail','$smarks','$sjee')";
    mysqli_query($con,$insert_data);
 
    include("Lisha_wtl_8.html");
}
 
if(isset($_POST["display"]))
{
    $res=mysqli_query($con,"select * from student");
    echo"<table border=1>";
        echo"<tr>";
        echo"<th>"; echo"ID"; echo"</th>";
        echo"<th>"; echo"NAME"; echo"</th>";
        echo"<th>"; echo"EMAIL"; echo"</th>";
        echo"<th>"; echo"12th Marks"; echo"</th>";
        echo"<th>"; echo"JEE"; echo"</th>";
        echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo"<tr>";
        echo"<td>"; echo $row["sid"]; echo"</td>";
        echo"<td>"; echo $row["sname"]; echo"</td>";
        echo"<td>"; echo $row["semail"]; echo"</td>";
        echo"<td>"; echo $row["smarks"]; echo"</td>";
        echo"<td>"; echo $row["sjee"]; echo"</td>";
        echo"</tr>";
    }
    echo"</table>";
}
?>

