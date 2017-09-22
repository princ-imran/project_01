<?php
include_once '../includes/header.php';
?>


    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>New user register here</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <form action="view/admin/student/store.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="roll" class="control-label">Student Id</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="roll" id="roll" required placeholder="Enter Your Roll" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Enter Your Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Enter Your Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Enter Your Email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="cols-md-4 control-label">Phone Number</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input type="phone" class="form-control" name="phone" id="phone" required placeholder="Enter your Phone Number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="department" id="" class="form-control">
                                            <option>Select One</option>
                                            <option value="CSE">CSE</option>
                                            <option value="BBA">BBA</option>
                                            <option value="EEE">EEE</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Register" class="btn btn-success">
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
        <!-- /.row -->
    </div>





    <?php
include_once '../includes/footer.php';
?>