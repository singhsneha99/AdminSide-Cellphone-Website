<?php
session_start();
include 'connection.php';
include 'header.php';
?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" method="POST" enctype="multipart/form-data">

                                <div class="form-group col-lg-6">
                                    <label>Mobile Name</label>
                                    <input type="text" class="form-control" name="mobile_name" placeholder="Mobile Name">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Mobile Image</label>
                                    <input type="file" class="form-control" name="mobile_img"/>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Operating Systeam</label>
                                    <input type="text" class="form-control" name="os" placeholder="Operating Systeam">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>CPU</label>
                                    <input class="form-control" name="cpu" placeholder="CPU">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Dimension</label>
                                    <input class="form-control" name="dimension" placeholder="Dimension">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>SIM</label>
                                    <input class="form-control" name="sim" placeholder="SIM">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>2G</label>
                                    <input class="form-control" name="2g" placeholder="2G">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>3G</label>
                                    <input class="form-control" name="3g" placeholder="3G">
                                </div>


                                <div class="form-group col-lg-6">
                                    <label>4G</label>
                                    <input class="form-control" name="4g" placeholder="4G">
                                </div>


                                <div class="form-group col-lg-6">
                                    <label>Card Slot</label>
                                    <input class="form-control" name="card_slot" placeholder="Card Slot">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>RAM</label>

                                    <select class="form-control" name="ram">
                                        <option  value="">RAM</option>
                                        <?php
                                        $sqlram = "select * from ram";
                                        $resultram = mysqli_query($link, $sqlram);
                                        while ($ramdata = @mysqli_fetch_array($resultram)) {
                                            ?>
                                            <option value="<?php echo $ramdata['unit']; ?>" >
                                            <?php echo $ramdata['unit']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Internal Memory</label>
<!--                                    <input class="form-control" name="internam_memory" placeholder="Internal Memory">-->
                                    <select class="form-control" name="internam_memory">
                                        <option  value="">Internal Memory</option>
                                        <?php
                                        $sqlrom = "select * from rom";
                                        $resultrom = mysqli_query($link, $sqlrom);
                                        while ($romdata = @mysqli_fetch_array($resultrom)) {
                                            ?>
                                            <option value="<?php echo $romdata['unit']; ?>" >
                                            <?php echo $romdata['unit']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>External Memory</label>
                                    <input class="form-control" name="external_memory" placeholder="External Memory">
                                </div>										


                                <div class="form-group col-lg-6">
                                    <label>Front Camera</label>
<!--                                    <input class="form-control" name="front_camera" placeholder="Front Camera">-->
                                        <select class="form-control" name="front_camera">
                                        <option  value="">Front Camera</option>
                                        <?php
                                        $sqlcam = "select * from camera";
                                        $resultcam = mysqli_query($link, $sqlcam);
                                        while ($camdata = @mysqli_fetch_array($resultcam)) {
                                            ?>
                                            <option value="<?php echo $camdata['unit']; ?>" >
                                            <?php echo $camdata['unit']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Rear Camera</label>
                                    <input class="form-control" name="rear_camera" placeholder="Rear Camera">
                                    
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Resolution	</label>
                                    <input class="form-control" name="resolution" placeholder="Resolution">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Protection</label>
                                    <input class="form-control" name="protection" placeholder="Protection">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Sensor</label>
                                    <input class="form-control" name="sensor" placeholder="Sensor">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Battery Capacity</label>
                                    <input class="form-control" name="battery_power" placeholder="Battery Capacity">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Color</label>
                                    <input class="form-control" name="color" placeholder="Color">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Price</label>
                                    <input class="form-control" name="price" placeholder="Price">
                                </div>

                                <div class="form-group col-lg-6 clearfix">

                                </div>



                                <button type="submit" name="mobile_add" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
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
<!-- /#page-wrapper -->

<?php include 'footer.php'; ?>
<?php
if (isset($_POST['mobile_add'])) {

    $target_dir = "Uploads/";
    $target_adhar_img = $target_dir . basename($_FILES["mobile_img"]["name"]);
    $FileType = pathinfo($target_adhar_img, PATHINFO_EXTENSION);
    $rand = md5(uniqid() . rand());
    $post_image = $rand . "." . $FileType;
    $target_adhar_img = $target_dir . $post_image;
    if (move_uploaded_file($_FILES["mobile_img"]["tmp_name"], $target_adhar_img)) {
        $target_adhar_img = $target_adhar_img;
    } else {
        $target_adhar_img = "";
    }

    $mobile_name = $_POST['mobile_name'];

    $os = $_POST['os'];
    $dimension = $_POST['dimension'];
    $cpu = $_POST['cpu'];
    $sim = $_POST['sim'];

    $twog = $_POST['2g'];
    $threeg = $_POST['3g'];
    $fourg = $_POST['4g'];

    $card_slot = $_POST['card_slot'];
    $ram = $_POST['ram'];
    $internam_memory = $_POST['internam_memory'];
    $external_memory = $_POST['external_memory'];

    $front_camera = $_POST['front_camera'];
    $rear_camera = $_POST['rear_camera'];
    $resolution = $_POST['resolution'];
    $protection = $_POST['protection'];

    $sensor = $_POST['sensor'];
    $battery_power = $_POST['battery_power'];
    $color = $_POST['color'];

    echo $query = "INSERT INTO `product`
			( `mobile_name`, 
			`mobile_img`, 
			`os`, 
			`cpu`, 
			`sim`, 
			`dimension`,
			`2g`,
			`3g`, 
			`4g`, 
			`card_slot`, 
			`ram`,
			`internam_memory`, 
			`external_memory`,
			`front_camera`, 
			`rear_camera`, 
			`resolution`,
			`protection`,
			`sensor`,
			`battery_power`,
			`price`,
			`color`) VALUES 
				('$mobile_name',
				'$target_adhar_img',
				'$os',
				'$cpu',
				'$sim',
				'$dimension',
				'$twog',
				'$threeg',
				'$fourg',
				'$card_slot',
				'$ram',
				'$internam_memory',
				'$external_memory',
				'$front_camera',
				'$rear_camera',
				'$resolution',
				'$protection',
				'$sensor',
				'$battery_power',
				'$price',
				'$color')";

    if ($link->query($query) === TRUE) {
        ?>
        <script type="text/javascript">
            alert('New record insert successfully..!');
        </script>
        <?php } else {
        ?>

        <script type="text/javascript">
            alert('Error to insert new record..!');
        </script>
    <?php
        /* echo $link->error; */
    }
}
$link->close();
?>