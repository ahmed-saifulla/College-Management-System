<!-- Including headers , metas from header.php file -->
<?php include('includes/header.php'); ?>

<!-- Using form helper , on submit action page adminSignup-->
<?php echo form_open('welcome/adminLogin', ['class'=>'form-horizontal']); ?>
    

	<!-- MAin container START ---------------------------------------------- -->
	<div class="container">

    <!-- Alert box to show registration success or not -->
    <?php if($message = $this->session->flashdata('message')): ?>
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <h2 class="display-5 my-4" style="text-align: center;">ADMIN LOGIN</h2>
        <hr>
        

        <div class="row">
            <div class="col-md-6">
              
                    <label for="" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <?php echo form_input(['name' => 'email' , 'class' => 'form-control', 'placeholder' => 'Email']);?>
                    </div>
                
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('email');?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                
                    <label for="" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <?php echo form_password(['name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password']);?>
                    </div>
              
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('password');?>
            </div>
        </div>

        

                <button  type="submit" class="btn btn-primary my-4"> Login </button>

                <?php echo anchor('welcome','BACK',['class'=>'btn btn-primary']);?>
		
	</div>


    <?php echo form_close(); ?>

<!-- Including footer and html closing tags from footer.php file -->
<?php include('includes/footer.php'); ?>
