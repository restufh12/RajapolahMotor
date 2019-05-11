
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <h2>List Mobil Ready</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Car grid start-->
<div class="car-grid content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs"> Car Grid</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                    <option>Price: High to low</option>
                                    <option>Price: Low to high</option>
                                    <option>Sells: High to low</option>
                                    <option>Sells: Low to high</option>
                                </select>
                                <a href="<?php echo base_url('CList_Mobil/list');?>" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="<?php echo base_url('CList_Mobil/grid');?>" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block heading end -->
                
                <!-- Car grid start -->
                <div class="row">

                    <?php for ($i=0; $i < 12; $i++) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Car box start-->
                            <div class="thumbnail car-box clearfix">
                                <div class="car-box-thumbnail">
                                    <img src="<?php echo base_url('assets/frontend/img/grid/car-2.jpg');?>" alt="car-2">
                                    <div class="listing-for">
                                        <span class="for">For Sale</span>
                                    </div>

                                    <div class="listing-price">
                                        <span class="del"><del>$1250.00</del></span>
                                        <br/>
                                        <span>$1000.00</span>
                                    </div>
                                </div>
                                <!-- detail -->
                                <div class="caption detail">
                                    <!-- Header -->
                                    <header class="clearfix">
                                        <h5 class="title">
                                            <a href="car-details.html">Ferrari Red Car</a>
                                        </h5>
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">New Car</a> /
                                            </li>
                                            <li>
                                                <a href="#">Automatic</a> /
                                            </li>
                                            <li>
                                                <a href="#">Sports</a>
                                            </li>
                                        </ul>
                                    </header>
                                    <!-- paragraph -->
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                    <!-- Facilities List -->
                                    <div class="facilities-area">
                                        <ul class="facilities-list clearfix">
                                            <li>
                                                <i class="flaticon-gasoline-pump"></i>
                                                <span>Gasoline</span>
                                            </li>
                                            <li>
                                                <i class="flaticon-automatic-flash-symbol"></i>
                                                <span>Automatic</span>
                                            </li>
                                            <li>
                                                <i class="flaticon-road-with-broken-line"></i>
                                                <span>12000</span>
                                            </li>
                                            <li>
                                                <i class="flaticon-racing-flag"></i>
                                                <span>Sports Car </span>
                                            </li>
                                            <li>
                                                <i class="flaticon-transport"></i>
                                                <span>5 Gears</span>
                                            </li>
                                            <li>
                                                <i class="flaticon-time"></i>
                                                <span>2017</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Car box end-->
                        </div>
                    <?php } ?>

                </div>
                <!-- Car grid end-->

                <!-- Page navigation start-->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Page navigation end-->
            </div>
        </div>
    </div>
</div>
<!-- Car grid end-->

