<?php
include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';
$student = new App\admin\student\Student;
$data = $student->view($_GET['id']);
?>
    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Update Your Information</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <form action="view/admin/student/update.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="roll" class="control-label">Student Id</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $data['roll']; ?>" required placeholder="Enter Your Roll" />
                                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" id="id" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Enter Your Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" id="name" required placeholder="Enter Your Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" id="email" required placeholder="Enter Your Email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="cols-md-4 control-label">Phone Number</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input type="phone" class="form-control" name="phone" value="<?php echo $data['phone']; ?>" id="phone" required placeholder="Enter your Phone Number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="department" id="" class="form-control">
                                            <option>Select One</option>
                                            <option <?php echo($data['department']=='CSE')?'selected':'';?> value="CSE">CSE</option>
                                            <option <?php echo($data['department']=='BBA')?'selected':'';?> value="BBA">BBA</option>
                                            <option <?php echo($data['department']=='EEE')?'selected':'';?> value="EEE">EEE</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Update" class="btn btn-success">
                                        <input type="reset" name="submit" value="Reset" class="btn btn-info">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>

    <?php
    include_once '../includes/footer.php';