<?php session_start();
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
                                        <form role="form" method="POST">
                                           
                                            <div class="form-group col-lg-6">
                                                <label>Mobile Name</label>
                                                <input type="text" class="form-control" name="mobile_name" placeholder="Mobile Name">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Mobile Image</label>
                                                <input type="file" class="form-control" name="mobile_img"/>
                                            </div>
																	
											<div class="form-group col-lg-6">
                                                <label>Realies Date</label>
                                                <input type="date" class="form-control" name="realies_date" placeholder="Realies Date">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Diamension</label>
                                                <input class="form-control" name="diamension" placeholder="Diamension">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>Weight</label>
                                                <input class="form-control" name="weight" placeholder="Weight">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Battery Capacity</label>
                                                <input class="form-control" name="battery_capacity" placeholder="Battery Capacity">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>Color</label>
                                                <input class="form-control" name="color" placeholder="Color">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Form Factory</label>
                                                <input class="form-control" name="form_factory" placeholder="Form Factory">
                                            </div>
																		
											<div class="form-group col-lg-6">
                                                <label>Removable Battery</label>
                                                <select name="removable_battery" class="form-control">
                                                  <option value="">--Select--</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">NO</option>
                                                </select>
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Screen Size</label>
                                                <input class="form-control" name="screen_size" placeholder="Screen Size">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>Touch Screen</label>
                                                <select name="touch_screen" class="form-control">
                                                  <option value="">--Select--</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">NO</option>
                                                </select>
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Resolution</label>
                                                <input class="form-control" name="resolution" placeholder="Resolution">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>Aspect Ratio</label>
                                                <input class="form-control" name="aspect_ratio" placeholder="Aspect Ratio">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>Processor</label>
                                                <input class="form-control" name="processor" placeholder="Processor">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>Ram</label>
                                                <input class="form-control" name="ram" placeholder=" Enter Ram size">
                                            </div>
								
										
											 <div class="form-group col-lg-6">
                                                <label>internal_storage</label>
                                                <input class="form-control" name="internal_storage" placeholder="internal_storage">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>exapandable_storage</label>
                                                <input class="form-control" name="exapandable_storage" placeholder="exapandable_storage">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>exapandable_storage_type</label>
                                                <input class="form-control" name="exapandable_storage_type" placeholder="exapandable_storage_type">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>exapandable_storage_upto</label>
                                                <input class="form-control" name="exapandable_storage_upto" placeholder="exapandable_storage_upto">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>processor_make</label>
                                                <input class="form-control" name="processor_make" placeholder="processor_make">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>rear_camera</label>
                                                <input class="form-control" name="rear_camera" placeholder="rear_camera">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>rear_autofocus</label>
                                                <input class="form-control" name="rear_autofocus" placeholder="rear_autofocus">
                                            </div>
																		
											<div class="form-group col-lg-6">
                                                <label>rear_flash</label>
                                                <input class="form-control" name="rear_flash" placeholder="rear_flash">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>front_camera</label>
                                                <input class="form-control" name="front_camera" placeholder="front_camera">
                                            </div>
											
											
											<div class="form-group col-lg-6">
                                                <label>front_autofocus</label>
                                                <input class="form-control" name="front_autofocus" placeholder="front_autofocus">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>front_flash</label>
                                                <input class="form-control" name="front_flash" placeholder="front_flash">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>operating_system</label>
                                                <input class="form-control" name="operating_system" placeholder="operating_system">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>os_updatable</label>
                                                <input class="form-control" name="os_updatable" placeholder="os_updatable">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>wifi</label>
                                                <!-- <input class="form-control" name="wifi" placeholder="wifi"> -->
                                                 <select name="wifi" class="form-control">
                                                  <option value="">--Select--</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">NO</option>
                                                </select>

                                            </div>
																
											 <div class="form-group col-lg-6">
                                                <label>gps</label>
                                                <input class="form-control" name="gps" placeholder="gps">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>blootooth</label>
                                                <!-- <input class="form-control" name="blootooth" placeholder="blootooth"> -->
                                                <select name="blootooth" class="form-control">
                                                  <option value="">--Select--</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">NO</option>
                                                </select>
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>headfone</label>
                                                <!-- <input class="form-control" name="headfone" placeholder="headfone"> -->
                                                <select name="headfone" class="form-control">
                                                  <option value="">--Select--</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">NO</option>
                                                </select>
                                            </div>
											
											
											
											<div class="form-group col-lg-6">
                                                <label>infrared</label>
                                                <input class="form-control" name="infrared" placeholder="infrared">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>fm</label>
                                                <!-- <input class="form-control" name="fm" placeholder="fm"> -->
                                                <select name="fm" class="form-control">
                                                  <option value="">--Select--</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">NO</option>
                                                </select>
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>no_of_sim</label>
                                                <input class="form-control" name="no_of_sim" placeholder="no_of_sim">
                                            </div>
																				
											 <div class="form-group col-lg-6">
                                                <label>fingesprint_sensor</label>
                                                <input class="form-control" name="fingesprint_sensor" placeholder="fingesprint_sensor">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>sim1_type</label>
                                                <input class="form-control" name="sim1_type" placeholder="sim1_type">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>sim1_gsmcdma</label>
                                                <input class="form-control" name="sim1_gsmcdma" placeholder="sim1_gsmcdma">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>sim1_3g</label>
                                                <input class="form-control" name="sim1_3g" placeholder="sim1_3g">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>sim1_4g</label>
                                                <input class="form-control" name="sim1_4g" placeholder="sim1_4g">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>sim2_type</label>
                                                <input class="form-control" name="sim2_type" placeholder="sim2_type">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>sim2_gsmcdma</label>
                                                <input class="form-control" name="sim2_gsmcdma" placeholder="sim2_gsmcdma">
                                            </div>
											
											<div class="form-group col-lg-6">
                                                <label>sim2_3g</label>
                                                <input class="form-control" name="sim2_3g" placeholder="sim2_3g">
                                            </div>
											
											 <div class="form-group col-lg-6">
                                                <label>smi2_4g</label>
                                                <input class="form-control" name="smi2_4g" placeholder="smi2_4g">
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
if(isset($_POST['mobile_add'])){
                                                      

    $mobile_name = $_POST['mobile_name'];
    $mobile_img = $_POST['mobile_img'];
    $realies_date = $_POST['realies_date'];
    $diamension = $_POST['diamension'];
    $weight = $_POST['weight'];
    $battery_capacity = $_POST['battery_capacity'];
    $color = $_POST['color'];
    $form_factory = $_POST['form_factory'];
    $removable_battery = $_POST['removable_battery'];
    $screen_size = $_POST['screen_size'];
    $touch_screen = $_POST['touch_screen'];
    $resolution = $_POST['resolution'];
    $aspect_ratio = $_POST['aspect_ratio'];
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $internal_storage = $_POST['internal_storage'];
    $exapandable_storage = $_POST['exapandable_storage'];
    $exapandable_storage_type = $_POST['exapandable_storage_type'];
    $exapandable_storage_upto = $_POST['exapandable_storage_upto'];
    $processor_make = $_POST['processor_make'];
    $rear_camera = $_POST['rear_camera'];
    $rear_autofocus = $_POST['rear_autofocus'];
    $rear_flash = $_POST['rear_flash'];
    $front_camera = $_POST['front_camera'];
    $front_autofocus = $_POST['front_autofocus'];
    $front_flash = $_POST['front_flash'];
    $operating_system = $_POST['operating_system'];
    $os_updatable = $_POST['os_updatable'];
    $wifi = $_POST['wifi'];
    $gps = $_POST['gps'];
    $blootooth = $_POST['blootooth'];
    $headfone = $_POST['headfone'];
    $infrared = $_POST['infrared'];
    $fm = $_POST['fm'];
    $no_of_sim = $_POST['no_of_sim'];
    $fingesprint_sensor = $_POST['fingesprint_sensor'];
    $sim1_type = $_POST['mobile_name'];
    $sim1_gsmcdma = $_POST['sim1_gsmcdma'];
    $sim1_3g = $_POST['sim1_3g'];
    $sim1_4g = $_POST['sim1_4g'];
    $sim2_type = $_POST['sim2_type'];
    $sim2_gsmcdma = $_POST['sim2_gsmcdma'];
    $sim2_3g = $_POST['sim2_3g'];
    $smi2_4g = $_POST['smi2_4g'];

    $query="INSERT INTO `product`( `mobile_name`, `mobile_img`, `realies_date`, `diamension`, `weight`, `battery_capacity`, `color`, `form_factory`, `removable_battery`, `screen_size`, `touch_screen`, `resolution`, `aspect_ratio`, `processor`, `ram`, `internal_storage`, `exapandable_storage`, `exapandable_storage_type`, `exapandable_storage_upto`, `processor_make`, `rear_camera`, `rear_autofocus`, `rear_flash`, `front_camera`, `front_autofocus`, `front_flash`, `operating_system`, `os_updatable`, `wifi`, `gps`, `blootooth`, `headfone`, `infrared`, `fm`, `no_of_sim`, `fingesprint_sensor`, `sim1_type`, `sim1_gsmcdma`, `sim1_3g`, `sim1_4g`, `sim2_type`, `sim2_gsmcdma`, `sim2_3g`, `smi2_4g`) VALUES ('$mobile_name','$mobile_img','$realies_date','$diamension','$weight','$battery_capacity','$color','$form_factory','$removable_battery','$screen_size','$touch_screen','$resolution','$aspect_ratio','$processor','$ram','$internal_storage','$exapandable_storage','$exapandable_storage_type','$exapandable_storage_upto','$processor_make','$rear_camera','$rear_autofocus','$rear_flash','$front_camera','$front_autofocus','$front_flash','$operating_system','$os_updatable','$wifi','$gps','$blootooth','$headfone','$infrared','$fm','$no_of_sim','$fingesprint_sensor','$sim1_type','$sim1_gsmcdma','$sim1_3g','$sim1_4g','$sim2_type','$sim2_gsmcdma','$sim2_3g','$smi2_4g')";

        if ($link->query($query) === TRUE) {?>
            <script type="text/javascript">
                alert('New record insert successfully..!');
            </script>
           <?php  
        } else {?>
            
            <script type="text/javascript">
                alert('Error to insert new record..!');
            </script>
      <?php /*echo $link->error; */ }

                                                             
}
$link->close();
?>