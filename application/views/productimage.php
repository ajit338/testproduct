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
									<center> <h3>Product images</h3></center>
									<hr>
									<br/>
								<div class="card-body">
														
									
										
											<?php
										if($blogedit)
										{
											foreach($blogedit as $row)
											{
												?>
										

									<div class="row">
										<div class="col-md-6 col-lg-4">
											<img src="<?php echo base_url();?>uploads/<?php echo $row->images;?>" alt="" width="150px;" height="150px;" />
										</div>	
									
										
									</div><?php

									}
								}
							?>

									<div class="card-action">
								<center>
<a href="<?= base_url('Authors') ;?>" class="btn btn-success btn-round ml-auto" >Back</a>

							</center>
									
								</div>
								<br/>
								</div>
								
							
							
							</div>
						</div>
					</div>