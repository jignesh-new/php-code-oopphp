<?php
   header('Content-Type:application/json');
   header('Acess-Control-Allow-Origin: *');
   header('Acess-Control-Allow-Methods: delete');
   include "connection.php";
 $data=json_decode(file_get_contents("php://input"),true);
 print_r($data);
   $id=$data['id'];
//    $fname=$data['fname'];
//    $lname=$data['lname'];
//    $email=$data['email'];
//    $pno=$data['pno'];
   $query="delete from tbl_insert where id='{$id}'";
   $select=mysqli_query($conn,$query);
   // print_r($query);
   // print_r($select);
   if($select)
   {
      echo json_encode(array('message'=>"Data Delete", 'status'=>true));

   }
   
  
   
?>