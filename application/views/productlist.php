<!DOCTYPE html>
<html>
    <head>
        <title>Product Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <style>#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}</style>

    </head>

    <body>
        <div class="container">
            <br/>
               <br/>
                
         <center>   <h3 class="title is-3">Product List</h3></center><br/>   <br/>
 <form action="">
<div class="row">
                                        <div class="col-md-6 col-lg-2">
                                        </div> 
                                    <div class="col-md-6 col-lg-2">
                                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                                            <br/>
                                        </div>
                                        
                                           <div class="col-md-6 col-lg-2">
                                        <!--    <br/> <input type="submit" value="Submit">
                                              <input type="submit" class="btn btn-success btn-round ml-auto" name="submit" value="Submit">!-->
</form> 
 
                                              </div>

                                                   <div class="col-md-6 col-lg-2">
                                            <br/>
   <a href="<?= base_url('Upload_Files') ;?>" class="btn btn-primary btn-round ml-auto" >Add Product</a>
                                              </div>
                                    </div>



            <div class="column">
                <table  class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Short Descriprtion</th>
                             <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($authors as $author): ?>
                            <tr><?php  ?>
                                <td><?= $author->id ?></td>
                                <td><?= $author->product_name ?></td>
                                <td><?= $author->product_price ?></td>
                                <td><?= $author->product_short_description    ?></td>
                                <td>
                                    <a href="<?= base_url('Authors/product_images/'.$author->P_id) ?>" id="userSmodel"  class="btn btn-primary">View Image
                                                        </a>
                                </td>
                                <td>
                                  
                                                            <a href="<?= base_url('Authors/product_fetch/'.$author->P_id) ?>" id="userSmodel"  class="btn btn-primary">Edit
                                                        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    
                                                            <a href="<?php echo base_url('Authors/delete/'
                                                         .$author->P_id ); ?>" onclick="return confirm('Are you sure you want to delete this product?')"  class="btn btn-success">Delete</a>
                                                        </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p><?php echo $links; ?></p>
            </div>
        </div>
    </body>
</html>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  
  //filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script type="text/javascript">
jQuery('#submit').click(function()
{
    alert("hello");
    var name = jQuery('#name').val();
    var price = jQuery('#Price').val();
    
    jQuery.ajax({
            type : "POST",
            url  : "AddIncentive/getdata",      
            data : {name:categoryname},
            dataType: "json",
            success: function(json){
            //alert(json.id);
            var content = '';
   jQuery.each(json, function(i, v){
       
      // alert( v.name);
      content += '<div class="table-responsive"><table id="add-row" class="display table table-striped table-hover"><thead><tr><th>ID</th><th>Vendors Name</th><th>Vendors Email</th><th>Moblie</th><th>address</th><th>area</th><th>city</th></tr></thead><tbody><tr><td>'+v.id+'</td><td>'+v.name+ '</td><td>'+v.email+ '</td><td>'+v.mobile+ '</td><td>'+v.address+ '</td><td>'+v.area+ '</td><td>'+v.city+ '</td></tr></tbody></table></div>';
   });
   /* like this the results won't cummulate */
   $("#searchh").append(content);
}
            
                        //   var markup =""
            
            
        });
        //return false;

});
</script>