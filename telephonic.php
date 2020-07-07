<title>Telephonic Counselling</title>
<style>
<?php include_once 'assets/css/telephonic.css';?>
</style>
<?php include_once 'layout/head.php';?>
<?php include_once 'layout/header.php';?>
<div class="container-fluid head-image" style="padding:0px">
	<div class="head-image-content">
	<h2>Telephonic Counselling</h2>
	</div>	
</div>	

<section class="after-image">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<ul>
			<li><a href="#">You are Here&nbsp;&#x27FA;</a></li>
			<li><a href="index.php">&#x27A4; &nbsp;Home</a></li>
			<li><a href="index.php">&#x27A4; &nbsp;Telephonic Counselling</a></li>
			</ul>
			</div>
		</div>
	</div>
</section>	
<div class="container">
	<div class="col-sm-12 telephonic">
	<div class="row">
	<div class="col-sm-3">
	</div>
		<div class="col-sm-6">
		<div class="form">
				<h2>Telephonic Counselling</h2>
					 <form action="/action_page.php">
					<div class="row">	
					<div class="form-group col-sm-6">
						<label for="email">Name:</label>
						  <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
						</div>
						<div class="form-group col-sm-6">
						<label for="email">E-mail:</label>
						  <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="email">
						</div>
					</div>	
					<div class="row">
						<div class="form-group col-sm-6">
						<label for="email">Mobile No:</label>
						  <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile">
						</div>
						<div class="form-group col-sm-6">
						<label for="email">Country of Residance:</label>
							<select class="form-control" name="qualificationlevel">
									<option>Country of Residance</option>
									<option>India</option>
									<option>Bangladesh</option>
									<option>Srilanka</option>
									<option>Nepal</option>
								</select>
						</div>
					</div>
					<div class="row">	
						<div class="form-group col-sm-6">
						<label for="email">City of Residance:</label>
							<select class="form-control" name="qualificationlevel">
									<option>City of Residance</option>
									<option>Noida</option>
									<option>Gurgaon</option>
									<option>Alwar</option>
									<option>Faridabad</option>
									
								</select>
							
						</div>
										
						<div class="form-group col-sm-6">
						<label for="email">Country interested to travel:</label>
							<select class="form-control" name="qualificationlevel">
									<option>Country interested to travel</option>
									<option>New Zealand</option>
									<option>USA</option>
									<option>Australia</option>
									<option>France</option>
								</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
						<label for="email">Best time to call:</label>
							 <input type="mobile" class="form-control" id="mobile" placeholder="dd/mm/yyyy" name="mobile">
						</div>
						<div class="form-group col-sm-6">	
						<label for="myfile">Select a file:</label>
						<input type="file" id="myfile" name="myfile"><br><br>
						</div>
					</div>		
						<div class="form-group">
						<label for="email">Message:</label>
						<textarea class="form-control" cols="120" name="Meassage" placeholder="Type Message Here.." style="height:100px"></textarea>
						</div>	
						<input type="submit" name="contact_submit" value="Submit" class="btn-banner">
						</form>
						</div>
			</div>
		</div>
	</div>
</div>	
<?php include_once 'layout/footer.php';?>