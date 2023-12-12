<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <?php if($this->session->flashdata('status')):?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('status'); ?>
                    </div>
                <?php endif; ?>

                <div class="card">
                    <div class="card-header">
                        <h5>Admin Page</h5>
                    </div>
                    <div class="card-body">
                        <h6>You are in Admin home Page</h6>
                        <table class="table table-bordered"> <!-- Fix: table-bordered instead of table-borderd -->
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $row): ?>
                                    <tr>
                                        <td><?php echo $row->id; ?></td>
                                        <td><?php echo $row->first_name; ?></td>
                                        <td><?php echo $row->last_name; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td>
                                            <a href="<?php echo base_url("add/edit/".$row->id) ?>" class="btn btn-success btn-sm">Edit</a> <!-- Fix: btn-sm instead of btm-sm -->
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url("add/delete/".$row->id)?>" class="btn btn-danger btn-sm">Delete</a> <!-- Fix: btn-sm instead of btm-sm -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
