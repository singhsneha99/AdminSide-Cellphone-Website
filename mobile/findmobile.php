<?php include 'header.php';?>
  <div class="brands-area" style="background-color: #ccc;">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <div class="brand-wrapper">
                        <form method="get" action="" id="formid">
                            
                            <input type="text" name="os" value="<?php if (isset($_GET['os'])) echo $_GET['os'] ?>" placeholder="Search OS" style="color: black;" onchange='submitDetailsForm()'>
                            <input type="text" name="ram" value="<?php if (isset($_GET['ram'])) echo $_GET['ram'] ?>" placeholder="Search RAM" style="color: black;" onchange='submitDetailsForm()'>
                            <input type="text" name="internam_memory" value="<?php if (isset($_GET['internam_memory'])) echo $_GET['internam_memory'] ?>" placeholder="Search ROM" style="color: black;" onchange='submitDetailsForm()'>
                             <input type="text" name="front_camera" value="<?php if (isset($_GET['front_camera'])) echo $_GET['front_camera'] ?>" placeholder="Search Camera" style="color: black;" onchange='submitDetailsForm()'>
                            <a href="findmobile.php?os=&ram=&internam_memory=&front_camera="><button type="button" class="btn btn-default">reset</button></a>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row" >
            <?php
                            $os = $_GET['os'];
                            $ram = $_GET['ram'];
                            $internam_memory = $_GET['internam_memory'];
                             $front_camera = $_GET['front_camera'];
                            $abcd = array('os' => $os,'ram'=>$ram,'internam_memory'=>$internam_memory,'front_camera'=>$front_camera,);
                            $filer = array_filter($abcd);
                           // $xyz = implode('ram =', $abcd);
                           


            $abcdd = [];
            $abcdef = '';
            foreach($filer as $key => $fv)
            {
                $abcdd[$key] = $fv;
                $abcdef .= $key." = '".$fv."' or ";
            }

            $newvalue = substr($abcdef, 0, -4);
            if(count($filer) != '')
            {
                                $sql1 = "SELECT * from product where ".$newvalue;
                            $result = mysqli_query($link, $sql1);
            }
            else
            {
                               $sql1 = "SELECT * from product";
                            $result = mysqli_query($link, $sql1);

            }
            


                         // echo   $sql1 = "SELECT * from product where '$xyz'";
                         //    $result = mysqli_query($link, $sql1);
                            $count = 1;
                            while ($res = mysqli_fetch_array($result)) {
                                ?>
                <div class="col-md-4">
                    <div class="single-product-widget">
                       
                        <div class="single-wid-product">
                            <a href="single-product.php?id=<?php echo $res['id']; ?>"><img src="../mobile_admin/<?=$res['mobile_img']?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php?id=<?php echo $res['id']; ?>"><?php echo $res['mobile_name']; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $res['price']; ?></ins> <del>$425.00</del>
                            </div>                            
                        </div>
                     
                    </div>
                </div>
                            <?php   }   ?>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <?php include 'footer.php';  ?>

    <script language="javascript" type="text/javascript">
    function submitDetailsForm() {
       $("#formid").submit();
    }
</script>