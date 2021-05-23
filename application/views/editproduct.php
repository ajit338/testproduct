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
    <title>Product Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>			<div class="card">
	<br/>
									<center> <h3>Edit Product</h3></center>
									<hr>
									<br/>
								<div class="card-body">
									<form  name="frm" action="<?= base_url('Authors/update');?>" method="POST" id="updateSModal">							
									
										
											<?php
										if($blogedit)
										{
											foreach($blogedit as $row)
											{
												?>
										

									<div class="row">
										<div class="col-md-6 col-lg-4">
											<label for="usr">&nbsp;&nbsp;&nbsp;Product Name:</label>
											 
										
											<input type="text" class="form-control" name="name" placeholder="Enter Product Name" id="name"  value="<?php echo $row->product_name;?>">
										</div>	
									<div class="col-md-6 col-lg-4">
											  <label for="usr">&nbsp;&nbsp;&nbsp;SKU Code:</label>
											 
										
											<input type="text" class="form-control" name="Code" placeholder="Enter SKU Code" id="name"   value="<?php echo $row->sku_code	;?>">
											<input type="hidden" name="P_id" value="<?php echo $row->P_id	;?>">
											<br/>
										</div>
										<div class="col-md-6 col-lg-4">
											 <label for="usr">&nbsp;&nbsp;&nbsp;Short Description:</label>
										
											<input type="text" class="form-control" name="Description" placeholder="Enter Short Description" id="number"  value="<?php echo $row->product_short_description;?>">
											<br/>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-4"><label for="usr">&nbsp;&nbsp;&nbsp; Description:</label>
										
											<input type="text" class="form-control" name="fullDescription" placeholder="Enter  Description" id="number"  value="<?php echo $row->product_descriprtion;?>" required>
										</div>
										
											<div class="col-md-6 col-lg-4">
                                        	     
											 <label for="usr">&nbsp;&nbsp;&nbsp;Price:</label>
											
											<input type="text" class="form-control" name="Price"  placeholder="Enter Price" id="Price"  value="<?php echo $row->product_price	;?>" >
											<br/>
											
										</div><div class="col-md-6 col-lg-4">
										
        <label>Choose Files</label>
        <input type="file" class="form-control" name="file" multiple/>
    
										</div>
                                     </div>
                                     
									
									<div class="row">	
										
										<div class="col-md-6 col-lg-2">
										</div>
										<div class="col-md-6 col-lg-4">
                                        	     	<?php  $status=$row->Status;?>
											 <label for="usr">Status:</label>
											<select name="status" class="form-control">
                                           <option value="1">Active</option>
												<option value="2">Inactive</option>
											
											</select>
											
											<br/>
											
										</div>
									</div>
								</div><div class="card-action">
								<center><input type="submit" class="btn btn-success btn-round ml-auto" id="update" 
								name="update"></center>
									
								</div>
								<br/>
								</div>
								
							</form>
							<?php

									}
								}
							?>

							</div>
						</div>
					</div>