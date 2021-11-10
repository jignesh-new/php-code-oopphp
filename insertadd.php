<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="file">File:</label>
      <input type="file" class="form-control" id="file" name="image">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
<?php
  include "connection.php";
  $name=$_POST['name'];
  $img_name=$_FILES['image']['name'];
  $img_tname=$_FILES['image']['tmp_name'];
  print_r("<pre>");
  print_r($img_name);
  print_r($img_tname);
$move=move_uploaded_file($img_tname,'images/'.md5($img_name).".jpg");
print_r("<pre>");
print_r($move);


?>