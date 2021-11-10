<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody id="fetchdata">
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  // alert("hello"); 
  function loaddata()
  {
    $.ajax(
    {
     url:'http://localhost:8080/oopphp/api.php',
     type:'post',
     success:function(data){
         console.log(data);
         if(data.status==false)
            {
                $('#fetchdata').append('<tr><td><h3>'+data.message+'</h3></td></tr>');
            }
            else
            {
                $.each(data,function(key,value)
                {
                    $('#fetchdata').append('<tr>'
                    +'<td>'+value.fname+'</td>'+'<td>'+value.lname+'</td>'+'<td>'+value.email+'</td>'+'<td>'+value.pno+'</td>'+'<td><button class="delete-btn" data-id="'+value.id+'">Delete</button></td>'+
                    '</tr>');
                });
                
                
                
            }

        // $("#table-container").html(data);
     }
    });
  }
  loaddata();
    $(document).on("click",".delete-btn",function(){
      if(confirm("Are you sure Delete?"))
      {
     var id=$(this).data("id");
       var obj={id:id};
       var myjson=JSON.stringify(obj);
       var row=this;
      }
       $.ajax({

      
        url:"http://localhost:8080/oopphp/deleteapi.php",
        type:"post",
        data:myjson,
        dataType: "json",
        success:function(data)
        {
          
          loaddata();
         
          
         
        }
       });
      });
});
</script>

