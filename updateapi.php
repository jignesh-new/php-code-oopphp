<?php
   header('Content-Type:application/json');
   header('Acess-Control-Allow-Origin: *');
   header('Acess-Control-Allow-Methods: POST');
   include "connection.php";
 $data=json_decode(file_get_contents("php://input"),true);
 print_r($data);
   $id=$data['id'];
   $fname=$data['fname'];
   $lname=$data['lname'];
   $email=$data['email'];
   $pno=$data['pno'];
   $query="update tbl_insert set fname='{$fname}',lname='{$lname}',email='{$email}',pno='{$pno}' where id='{$id}'";
   $select=mysqli_query($conn,$query);
   // print_r($query);
   // print_r($select);
   if($select)
   {
      echo "update Data";

   }
   
  
   
?>