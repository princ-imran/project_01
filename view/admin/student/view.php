<?php 
include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';
$student = new App\admin\Student\student();
$data = $student->view($_GET['id']);
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Student Profile</h3>
                    </div>
                    <div class="panel-body">
                        <table width="80%" style="margin-left:95px;" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead class="aaa">
                                <tr>
                                    <td>Roll</td>
                                    <td>
                                        <?php echo $data['roll']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <?php echo $data['name']; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <?php echo $data['email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone </td>
                                    <td>
                                        <?php echo $data['phone']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Department </td>
                                    <td>
                                        <?php echo $data['department']; ?>
                                    </td>
                                </tr>                                
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../includes/footer.php';?>