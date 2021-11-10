
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<br>
<div class="offset-md-4 col-md-4" style="
    background-color: aliceblue;
    padding: 40px;
">
<form action="" method="post" id="insertform">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control"  name="fname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" name="lname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone No</label>
    <input type="text" class="form-control" name="pno">
  </div>
  <input type="submit" class="btn btn-primary" id="savebtn" name="submit">
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){

$(document).on("click","#savebtn",function(e){
    e .preventDefault();
var arr= $("#insertform").serializeArray();
// console.log(arr);
var obj = {

  fname:"jignesh",
  lname:"mistry",
  email:"jignesh@gmail.com",
  pno:9898989898
};

for(var a= 0; a < arr.lenth; a++)
{
 obj[arr[a].name]=arr[a].value;
}
console.log(obj);
// echo object_create(arr);
// console.log(obj1);
var jason=JSON.stringify(arr);
$.ajax({     
url:"http://localhost:8080/oopphp/deleteapi.php",
type:"post",
data:jason,
dataType: "json",
success:function(data)
{ 
}
});
}); 
 });
</script>