<?php include APPPATH."views/templates/header.php";?>
<?php  $navbar = (isset($_SESSION['auth'])) ? include APPPATH."views/templates/navbar_in.php" : header("location:".base_url("user"));?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<span class="fa fa-user"></span> User
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						Content
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php include APPPATH."views/templates/footer.php"; ?>