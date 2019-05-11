

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

<!-- Car list start-->
<div class="car-list content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Block heading Start-->
                <div class="block-heading">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="hidden-xs">Car Listing</span>
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
                                <a href="<?php echo base_url('CList_Mobil/list');?>" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="<?php echo base_url('CList_Mobil/grid');?>" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block heading end -->
                <div class="clearfix"></div>

                <!-- Car list start -->

                <?php for ($i=0; $i < 9; $i++) { ?>
                    <div class="car-list-box car-list-box-2 clearfix wow fadeInUp delay-03s">
                        <div class=" row-table row-flush">
                            <div class="col-lg-4  col-md-5 col-sm-12 col-xs-12 car-pic">
                                <div class="car-box-thumbnail">
                                    <img src="<?php echo base_url('assets/frontend/img/lists/car-1.jpg');?>" alt="car-1" class="img-responsive">
                                    <div class="listing-for">
                                        <span class="for">For Sale</span>
                                    </div>

                                    <div class="listing-price">
                                        <span class="del"><del>$1250.00</del></span>
                                        <br/>
                                        <span>$1000.00</span>
                                    </div>
                                    <div class="carbox-overlap-wrapper">
                                        <h2>Fiat Punto Red</h2>
                                        <h4>$54,000</h4>

                                        <div class="overlap-btns-area">
                                            <a href="car-details.html" class="overlap-btn">
                                                <i class="fa fa-link"></i>
                                            </a>
                                            <a class="overlap-btn property-video" data-toggle="modal" data-target="#carVideo">
                                                <i class="fa fa-video-camera"></i>
                                            </a>
                                            <div class="car-magnify-gallery">
                                                <a href="img/grid/car-1.jpg" class="overlap-btn">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                                <a href="img/grid/car-2.jpg" class="hidden"></a>
                                                <a href="img/grid/car-3.jpg" class="hidden"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Detail Body -->
                            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 detail">
                                <!-- Header -->
                                <header>
                                    <!-- Title -->
                                    <h3 class="title">
                                        <a href="car-details.html">Fiat Punto Red</a>
                                    </h3>
                                    <!-- Custom List -->
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
                                <div class="clearfix"></div>
                                <!-- paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.Vestibulum vel mauris et odio lobortis
                                    laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna.</p>
                                <!-- Facilities List -->
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
                <?php } ?>
                

                <!-- Car list end-->

                <!-- Page navigation Start-->
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
                <!-- Page navigation End-->
            </div>
        </div>
    </div>
</div>
<!-- Car list end-->


<!-- Car Viedo Modal -->
<div class="modal car-modal fade" id="carVideo" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carModalLabel">
                    Find Your Dream Car
                </h5>
                <p>
                    123 Kathal St. Tampa City,
                </p>
                <span class="ratings">
                    <i class="fa fa-star s1 active" data-score="1"></i>
                    <i class="fa fa-star s2 active" data-score="2"></i>
                    <i class="fa fa-star s3 active" data-score="3"></i>
                    <i class="fa fa-star s4 active" data-score="4"></i>
                    <i class="fa fa-star s5 active" data-score="5"></i>
                </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row modal-raw">
                    <div class="col-lg-5 modal-left">
                        <div class="modal-left-content">
                            <div class="bs-example" data-example-id="carousel-with-captions">
                                <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item">
                                            <img src="img/grid/car-1.jpg" alt="best-properties">
                                        </div>
                                        <div class="item">
                                            <img src="img/grid/car-1.jpg" alt="best-properties">
                                        </div>
                                        <div class="item active">
                                            <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <a class="control control-prev" href="#properties-carousel" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="control control-next" href="#properties-carousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="description">
                                <h3>Description</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <div class="features">
                                    <ul class="bullets">
                                        <li>Cruise Control</li>
                                        <li>Airbags</li>
                                        <li>Air Conditioning</li>
                                        <li>Alarm System</li>
                                        <li>Audio Interface</li>
                                        <li>CDR Audio</li>
                                        <li>Seat Heating</li>
                                        <li>ParkAssist</li>
                                    </ul>
                                </div>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Model</dt>
                                    <dd>Maxima</dd>
                                    <dt>Condition</dt>
                                    <dd>Brand New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <section>
                                <h3>Last Review</h3>
                                <div class="ratings" data-rating="5">
                                    <span>
                                        <i class="fa fa-star s1 active" data-score="1"></i>
                                        <i class="fa fa-star s2 active" data-score="2"></i>
                                        <i class="fa fa-star s3 active" data-score="3"></i>
                                        <i class="fa fa-star s4 active" data-score="4"></i>
                                        <i class="fa fa-star s5 active" data-score="5"></i>
                                    </span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                            </section>
                            <a href="car-details.html" class="btn button-sm button-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>