<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php if($this->session->flashdata('status')):?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('status'); ?>
                </div>
                <?php endif; ?>

                <style>
                    body{
                    background-image: url(emp.jpg);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-attachment: fixed;
                    background-size: cover;
                    }
                    </style>

                <div class="card shadow">
                    <div class="card-header">
                    <h3><span class="badge badge-primary">Login Form</span></h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('login')?>" method="post">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" name="email_id" class="form-control" placeholder="Enter Email Address">

                                <small>
                                    <?php echo form_error("email_id")?>
                                </small>
             
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                
                                <small>
                                    <?php echo form_error('password')?>
                                </small>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="Submit" class="btn btn-success">Login Now</button>
                            </div>
                                  <div class="form-group">
    
                                    <p>Don't have an account? <a href="<?php echo base_url('register'); ?>">Register here</a></p>
                </div>

                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>