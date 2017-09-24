<?php
include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';
$student = new App\admin\student\Student;
$students = $student->index();

?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div style="position: fixed; z-index: 111; right: 50px">
                <?php                 
               if(isset($_SESSION['store'])){
                   echo "<div class='alert alert-success'>" .$_SESSION['store']. "</div>";
                   session_unset();
               }
                if(isset($_SESSION['delete'])){
                    echo "<div class='alert alert-success'>" .$_SESSION['delete']. "</div>";
                    session_unset();
                }
                
                if(isset($_SESSION['update'])){
                    echo "<div class='alert alert-success'>" .$_SESSION['update']. "</div>";
                    session_unset();
                }
               ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Roll</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sl=0;
                                    foreach($students as $data){
                                    $sl++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $sl; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['roll'];?>
                                            </td>
                                            <td>
                                                <?php echo $data['name'];?>
                                            </td>
                                            <td>
                                                <?php echo $data['email'];?>
                                            </td>
                                            <td>
                                                <?php echo $data['phone'];?>
                                            </td>
                                            <td><?php echo $data['department'];?></td>
                                            <td><a href="view/admin/student/view.php?id=<?php echo $data['id'];?>">View</a> / <a href="view/admin/student/edit.php?id=<?php echo $data['id'];?>">Edit</a> / <a href="view/admin/student/delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <?php
include_once '../includes/footer.php';
?>