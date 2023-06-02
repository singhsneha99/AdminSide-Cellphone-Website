<?php
session_start();
include 'connection.php';
include 'header.php';
$id = $_GET['id'];

$sql1 = "SELECT * FROM product Where id = '$id'";
$result = mysqli_query($link, $sql1);
$data = mysqli_fetch_array($result);
?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mobile Details</h1>
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
                    <table class="table table-hover">

                        <tbody>
                            <tr>
                                <th>Mobile Name</th>
                                <td><?= $data['mobile_name']; ?></td>
                            </tr>
                            <tr>
                                <th>Operating Systeam</th>
                                <td><?= $data['os']; ?></td>
                            </tr>
                            <tr>
                                <th>CPU</th>
                                <td><?= $data['cpu']; ?></td>
                            </tr>
                            <tr>
                                <th>Dimension</th>
                                <td><?= $data['dimension']; ?></td>
                            </tr>
                            <tr>
                                <th>SIM</th>
                                <td><?= $data['sim']; ?></td>
                            </tr>
                            <tr>
                                <th>2G</th>
                                <td><?= $data['2g']; ?></td>
                            </tr>
                            <tr>
                                <th>3G</th>
                                <td><?= $data['3g']; ?></td>
                            </tr>
                            <tr>
                                <th>4G</th>
                                <td><?= $data['4g']; ?></td>
                            </tr>
                            <tr>
                                <th>Card Slot</th>
                                <td><?= $data['card_slot']; ?></td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td><?= $data['ram']; ?></td>
                            </tr>
                            <tr>
                                <th>Internal Memory</th>
                                <td><?= $data['internam_memory']; ?></td>
                            </tr>
                            <tr>
                                <th>External Memory</th>
                                <td><?= $data['external_memory']; ?></td>
                            </tr>
                            <tr>
                                <th>Front Camera</th>
                                <td><?= $data['front_camera']; ?></td>
                            </tr>
                            <tr>
                                <th>Rear Camera</th>
                                <td><?= $data['rear_camera']; ?></td>
                            </tr>
                            <tr>
                                <th>Resolution</th>
                                <td><?= $data['resolution']; ?></td>
                            </tr>
                            <tr>
                                <th>Sensor</th>
                                <td><?= $data['sensor']; ?></td>
                            </tr>
                             <tr>
                                <th>Battery Capacity</th>
                                <td><?= $data['battery_power']; ?></td>
                            </tr>
                             <tr>
                                <th>Color</th>
                                <td><?= $data['color']; ?></td>
                            </tr>
                             <tr>
                                <th>Price</th>
                                <td><?= $data['price']; ?></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="<?= $data['mobile_img'] ?>" style="height:200px;widht:200px;"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><a href="viewmobile.php"><button class="btn btn-danger">Back</button></a></td>
                            </tr>
                        </tbody>
                    </table>
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
