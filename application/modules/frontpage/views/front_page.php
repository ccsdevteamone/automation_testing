<?php
include APPPATH."views/templates/header.php";
?>
<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ccs-navbar-collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href=".">
				<img alt="Brand" src="<?php echo base_url('assets/theme_one/img/logo.png'); ?>" class="ccs-logo">
			</a>
			<p class="navbar-text ccs-navbar-text">
				<!--<strong class="text-primary">Automation Testing System</strong>-->
			</p>
		</div>
		<div class="collapse navbar-collapse" id="ccs-navbar-collapse">

			<ul class="nav navbar-nav">
				<li>
					<a href="#">
						<strong class="text-primary">
							<i class="fa fa-dashboard"></i> Dashboard
						</strong>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="text-primary">
							<i class="fa fa-sitemap"></i> Projects
						</strong>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="text-primary">
							<i class="fa fa-paperclip"></i> Tests
						</strong>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="text-primary">
							<i class="fa fa-newspaper-o"></i> Issues
						</strong>
					</a>
				</li>
				<li>
					<a href="#">
						<strong class="text-primary">
							<i class="fa fa-users"></i> Collaborators
						</strong>
					</a>
				</li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown" has-tooltip="yes" data-placement="bottom" title="Create new test...">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-plus text-primary"></i>
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">New Project</a></li>
						<li><a href="#">New Test</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">New Issue</a></li>
						<li><a href="#">New Collaborator</a></li>
					</ul>
				</li>
				<li class="dropdown" has-tooltip="yes" data-placement="bottom" title="View profile...">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-user text-primary"></i>
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">
							<span>Signed in as<span><br>
							<strong>ccsronron</strong>
						</li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Signout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- navbar -->

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


<?php
include APPPATH."views/templates/footer.php";
?>