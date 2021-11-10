<?php
 header("Content-Type:application/json");
 header("Acess-Control-Allow-origin:*");
 include "connection.php";
 $data=json_decode(file_get_contents("php://input"),true);
 $sid=$data['sid'];
//  print_r($sid);
$select=mysqli_query($conn,"select * from tbl_insert where id='{$sid}' ");

   
if(mysqli_num_rows($select)>0)
{
    $row = mysqli_fetch_all($select,MYSQLI_ASSOC);

 print_r(json_encode($row));
}
?>