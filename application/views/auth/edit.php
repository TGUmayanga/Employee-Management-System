
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

            <div class="card shadow">
                <div class="card-header">
                    <h5>Register
                    <a href="<?php echo base_url("adminpag")?>"> <class class="btn btn-danger float-right">BACK</class></a>
                    </h5>
                </div>
                <div class="card-body">
                 <form action="<?php echo base_url('add/update/'.$users->id) ?>" method="POST">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Frist Name</label>
                                <input type="text" name="first_name" value="<?= $users->first_name ?>" class="form-control">
                                <small><?php echo form_error('first_name'); ?></small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" value="<?= $users->last_name ?>" class="form-control">
                                <small><?php echo form_error('last_name'); ?></small>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" name="email" value="<?= $users->email ?>"class="form-control">
                                <small><?php echo form_error('email'); ?></small>
                            </div>
                        </div>

                        

                      
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary px-5">Update</button>
                        </div>

                    </div>
                    </form>
                </div>

            </div>
            </div>
        </div>
    </div>
</div>
