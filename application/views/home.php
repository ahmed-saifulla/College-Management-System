<!-- Including headers , metas from header.php file -->
<?php include('includes/header.php'); ?>


	<!-- MAin container START ---------------------------------------------- -->
	<div class="container">
		<div class="jumbotron">
			<h2 class="display-4">ADMIN & CO ADMIN LOGIN</h2>
			<hr>
			<div class="my-4">
				<div class="row">
					<div class="col-lg-4">
						<?php echo anchor('welcome/adminRegister','ADMIN REGISTER',['class'=>'btn btn-primary']);?>
					</div>
					<div class="col-lg-4">
						<?php echo anchor('welcome/login','ADMIN LOGIN',['class'=>'btn btn-primary']);?>
					</div>
				</div>
			</div>
		</div> 
	</div>


<!-- Including footer and html closing tags from footer.php file -->
<?php include('includes/footer.php'); ?>
