<?php
   
   include "connection.php";
   $select=mysqli_query($conn,"select * from tbl_insert");
   // $row1=mysqli_fetch_all($select);
   if(mysqli_num_rows($select)>0)
   {
    $row = mysqli_fetch_all($select,MYSQLI_ASSOC);
   //  echo json_encode(array('message'=>"Data Insert", 'status'=>false));
    print_r(json_encode($row));
   }

   
?>