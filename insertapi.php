<?php
   header('Content-Type:application/json');
   header('Acess-Control-Allow-Origin: *');
   header('Acess-Control-Allow-Methods: POST');
   include "connection.php";
 $data=json_decode(file_get_contents("php://input"),true);
// print_r("<pre>");
// print_r($data);
// exit();
   $fname=$data['fname'];
   $lname=$data['lname'];
   $email=$data['email'];
   $pno=$data['pno'];
   $query="insert into tbl_insert (fname,lname,email,pno)values('{$fname}','{$lname}','{$email}','{$pno}')";
   $select=mysqli_query($conn,$query);
   // print_r($query);
   // print_r($select);
   // var json=json_encode($select);
   // console.log(json);
   if($select)
   {
      echo json_encode(array('message'=>"Data Insert", 'status'=>true));

   }
   
  
   
?>