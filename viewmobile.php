<?php
session_start();
include 'connection.php';
include 'header.php';
?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mobile List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Mobile Name</th>
                                    <th>Operating Systeam</th>
                                    <th>Ram</th>
                                    <th>Internal storage</th>
                                    <th>External Storage</th>
                                    <th>Details</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM product";
                                $result = $link->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td style="text-align: center;"><?php echo $row['mobile_name']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['os']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['ram']; ?></td>
                                            <td class="center" style="text-align: center;"><?php echo $row['internam_memory']; ?></td>
                                            <td class="center" style="text-align: center;"><?php echo $row['external_memory']; ?></td>
                                            <td class="center" style="text-align: center;"><a href="mobile.php?id=<?= $row['id']; ?>"><button class="btn btn-info">Details</button></a></td>

                                            <td class="center" style="text-align: center;"><a href="block.php?id=<?= $row['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
                                        </tr>
    <?php }
}
?> 
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
