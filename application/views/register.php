<!-- Including headers , metas from header.php file -->
<?php include('includes/header.php'); ?>

<!-- Using form helper , on submit action page adminSignup-->
<?php echo form_open('welcome/adminSignUp', ['class'=>'form-horizontal']); ?>
    

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
        <h2 class="display-5 my-4" style="text-align: center;">ADMIN REGISTER</h2>
        <hr>
        
        <div class="row">
            <div class="col-md-6">
                <form action="" class="form-group">
                    <label for="" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                        <?php echo form_input(['name' => 'username' , 'class' => 'form-control', 'placeholder' => 'Username']);?>
                    </div>
                
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('username');?>
            </div>
        </div>

        

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
           
                    <label for="" class="col-md-3 control-label">Gender</label>
                    <div class="col-md-9">
                        <select class="col-lg-9 form-control " name="gender">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
               
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('gender');?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                
                    <label for="" class="col-md-3 control-label">Role</label>
                    <div class="col-md-9">
                        <select class="col-lg-9 form-control " name="role_id">
                            <option value="">Select</option>
                            <?php
                             if(count($roles)){
                                foreach ($roles as $role) {
                                    echo "<option value='".$role->role_id."'>".$role->role_name."</option>";
                                 }
                             }
                            ?>
                        </select>
                    </div>
           
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('role_id');?>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                
                    <label for="" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <?php echo form_input(['name' => 'password' , 'class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']);?>
                    </div>
              
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('password');?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
            
                    <label for="" class="col-md-3 control-label">Confirm Password</label>
                    <div class="col-md-9">
                        <?php echo form_input(['name' => 'confirmPassword' , 'class' => 'form-control', 'placeholder' => 'Retype Password', 'type' => 'password']);?>
                    </div>
                </form>
            </div>

            <div class="col-md-6 text-danger">
                <?php echo form_error('confirmPassword');?>
            </div>
        </div>
        

                <button  type="submit" class="btn btn-primary my-4"> Register </button>

                <?php echo anchor('welcome','BACK',['class'=>'btn btn-primary']);?>
		
	</div>


    <?php echo form_close(); ?>

<!-- Including footer and html closing tags from footer.php file -->
<?php include('includes/footer.php'); ?>
