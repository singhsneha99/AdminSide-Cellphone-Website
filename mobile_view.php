<?php session_start();
include 'connection.php';
include 'header.php';
?>



            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Manager</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DataTables Advanced Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Mobile Name</th>
                                                <th>Processor</th>
                                                <th>Ram</th>
                                                <th>Internal storage</th>
                                                <th>External Storage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sql = "SELECT `mobile_name`,`battery_capacity`, `processor`, `ram`, `internal_storage`, `exapandable_storage` FROM `product`";
                                            $result = $link->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['mobile_name']; ?></td>
                                                <td><?php echo $row['battery_capacity']; ?></td>
                                                <td><?php echo $row['processor']; ?></td>
                                                <td class="center"><?php echo $row['ram']; ?></td>
                                                <td class="center"><?php echo $row['internal_storage']; ?></td>
                                            </tr>
                                          <?php }
                                          } ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                              
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
               
            </div>
            <!-- /#page-wrapper -->



<?php include 'footer.php'; ?>
