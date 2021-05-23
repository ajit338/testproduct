<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
           <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form  name="frm"  id="form" >

  <div class="container">
  
 
   
   
  
   
   <hr>
   <center>
 <h2>Test</h2>
</center>
     <h2><center> </center></h2>
    
    <hr>
	
	<div class="form-group row">
	<div class="col-sm-2">
	</div>
    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Question Bank Name</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Question Bank Name" name="bank_name">
    </div>
  </div>
  
  
	<div class="form-group row">
	<div class="col-sm-2">
	</div>
    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Exam Name</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Exam Name" name="exam_name" >
    </div>
  </div>
	
	
	
	<div class="form-group row">
	<div class="col-sm-2">
	</div>
    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Class</b></label>
    <div class="col-sm-6">
      <select  name="Class" class="form-control" >
	  <option value="1">1</option>
	   <option value="2">2</option> 
	   <option value="2">3</option>
	 </select>
    </div>
  </div>
	
	
	<div class="form-group row">
	<div class="col-sm-2">
	</div>
    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Subject</b></label>
    <div class="col-sm-6">
      <select name="Subject" class="form-control" >
	    <option value="english">english</option>
	
	 </select>
    </div>
  </div>
	
	
	<div class="form-group row">
	<div class="col-sm-2">
	</div>
    <label for="inputPassword" class="col-sm-2 col-form-label"><b>Enter Number</b></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Last Name" name="numberinput"  id="user" >
    </div>
  </div>
	
	
	
	
	

	
	
  
  
 
	
    <hr>
  <center> <input type="submit" class="btn btn-primary btn-lg" value="submit"
								name="submit"></button></center>
    <input id="txt_Search" type="text" onchange="Call()" />
  </div>
  
 
</form>
<script>
function Call()
{
     var user=$("#txt_Search").val();
alert( user ); 
for (i = 0; i < user; i++) {
  text += "The number is " + i + "<br>";
}
}

</script>
<script>
function myFunction()
{  var user=$("#user").val();
alert( "Krishna" );

}

</script>
<script>
function validateForm(form) {

    var bank_name = form.bank_name;
    var exam_name = form.exam_name;

    if (isNotEmpty(bank_name)) {
        if(isNotEmpty(exam_name)) {
            return true;
        {
    {
    return false;
}

function isNotEmpty(field) {

    var fieldData = field.value;

    if (fieldData.length == 0 || fieldData == "" || fieldData == fieldData) {

        field.className = "FieldError"; //Classs to highlight error
        alert("Please correct the errors in order to continue.");
        return false;
    } else {

        field.className = "FieldOk"; //Resets field back to default
        return true; //Submits form
    }
}

</script>
</html>
