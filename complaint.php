
	<?php include_once 'layout/head.php';?>
		<title>Feedback-Complaints</title>
		<style><?php include 'assets/css/complaint.css';?></style>
	<body>
	<?php include_once 'layout/header.php';?>
		<div class="top-banner">
			<img src="assets/images/complaint-top.jpg">
			<h2>Feedback-Complaints</h2>
		</div>
		<section class="after-image">
				<div class="container">
				<div class="row">
				<div class="col-sm-12">
				<ul>
				<li><a href="#">You are Here&nbsp;&#x27FA;</a></li>
				<li><a href="index.php">&#x27A4; &nbsp;Home</a></li>
				<li><a href="index.php">&#x27A4; &nbsp;Loyal Immigration & Foreign Education Services Complaints</a></li>
				</ul>
				</div>
				</div>
				</div>
				</section>
				<div class="container">
				<div class="row">
				<div class="col-lg-4 d-none d-lg-block"></div>
					<div class="col-lg-4 col-xs-12 col-sm-12">
						<div class="form">
						<form action="/action_page.php">
							<div class="form-group">
							 <label for="name">Your Name:</label>
							 <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
							</div>
							<div class="form-group">
							 <label for="email">Your Email id:</label>
							 <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group">
							 <label for="mobile">Mobile No:</label>
							 <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile">
							</div>
							<div class="form-group">
							 <label for="complaint">Complaint Regarding:</label>
								<select class="form-control" name="Complaint Regarding">
									<option>Select</option>
									<option>Sales Team</option>
									<option>Visa Process Team</option>
									<option>Accounts Department</option>
								</select>
							</div>
							<div class="form-group">
							 <label for="mess">Message:</label>
								<textarea class="form-control" cols="70" name="Meassage"></textarea>
							</div>
							<input type="submit" name="contact_submit" value="Send Complaint" class="btn-banner">
							 </form>
							</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
	<?php include_once 'layout/footer.php';?>
</html>