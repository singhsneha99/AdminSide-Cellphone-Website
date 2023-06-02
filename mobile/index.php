<?php include 'header.php';?>
<div class="slider-area">
        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                        <?php
                            $sql1 = "SELECT * from product";

                            $result = mysqli_query($link, $sql1);
                            $count = 1;
                            while ($res = mysqli_fetch_array($result)) {
                                ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../mobile_admin/<?=$res['mobile_img']?>" alt="" style="width:200px;height:200px;">
                                    <div class="product-hover">
                                       <a href="single-product.php?id=<?php echo $res['id']; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="c"><?php echo $res['mobile_name']; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo @$res['price']; ?></ins> 
                                </div> 
                            </div>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <?php
                            $sql1 = "SELECT * from product";

                            $result = mysqli_query($link, $sql1);
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