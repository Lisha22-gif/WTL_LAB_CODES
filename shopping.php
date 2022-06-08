<?php
$con = mysqli_connect("localhost","root","");

//  $createdb = "Create database SHOPAPP";
//  mysqli_query($con,$createdb);

mysqli_select_db($con,"shopapp");
if(isset($_POST["insert"])){

    $itid = $_POST["itid"];
    $itname = $_POST["itname"];
    $itquan = $_POST["itquan"];
    

      $create_table = "create table items(
          itid int PRIMARY KEY,
          itname varchar(30),
          itquan int
       )";

     mysqli_query($con,$create_table);

    $insert_data = "insert into items
    VALUES ('$itid','$itname','$itquan')";
    mysqli_query($con,$insert_data);

    include("shopping.html");
}

if(isset($_POST["display"]))
{
    $res=mysqli_query($con,"select * from items");
    echo"<table border=1>";
        echo"<tr>";
        echo"<th>"; echo"Item ID"; echo"</th>";
        echo"<th>"; echo"Item NAME"; echo"</th>";
        echo"<th>"; echo"Item Quantity"; echo"</th>";
        echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo"<tr>";
        echo"<td>"; echo $row["itid"]; echo"</td>";
        echo"<td>"; echo $row["itname"]; echo"</td>";
        echo"<td>"; echo $row["itquan"]; echo"</td>";
        echo"</tr>";
    }
    print_r()"</table>"; 
}



?>

