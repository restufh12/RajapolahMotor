

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact us body Start-->
<div class="contact-us-body content-area-6">
    <div class="container">
        <div class="main-title">
            <h1>Contact with us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc..</p></p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <!-- Contact form start-->
                <div class="contact-form hidden2-mb-30">
                    <div class="row">
                        <form action="https://storage.googleapis.com/themevessel-auto-car/index.html" method="GET">
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="name" class="input-text" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="input-text" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="phone" class="input-text" id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message">
                                    <textarea id="message" class="input-text" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact form end-->
            </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
                <!-- Contact-details start -->
                <div class="contact-details">
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4>Office Address</h4>
                            <p>20/F Green Road, Dhanmondi, Dhaka</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4>Phone Number</h4>
                            <p>
                                <a href="tel:0477-0477-8556-552">office: 0477 8556 552</a>
                            </p>
                            <p>
                                <a href="tel:+55-417-634-7071">Mobile: +55 417 634 7071</a>
                            </p>
                        </div>
                    </div>
                    <div class="media mb-0">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4>Email Address</h4>
                            <p>
                                <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                            </p>
                            <p>
                                <a href="www.sohelrana.me" target="_blank">www.sohelrana.me</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Contact details end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact us body End-->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="map" class="contact-map">
        </div>
    </div>
</div>
<!-- Google map end -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                        "<div class='map-properties contact-map-content'>" +
                        "<div class='map-content'>" +
                        "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                        "<ul class='map-properties-list'> " +
                        "<li><i class='fa fa-phone'></i>  +0477 8556 552</li> " +
                        "<li><i class='fa fa-envelope'></i>  sales@realhouse.com</li> " +
                        "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                        "</ul>" +
                        "</div>" +
                        "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>
