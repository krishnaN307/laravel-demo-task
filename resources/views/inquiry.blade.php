<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <section class="main-wrapper">
        <div class="header bg-red">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Ourservices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>
        </div>
        <div class="container p-40">
            <div class="row">
                <div class="col-8">
                    <div class="profile-section d-flex">
                        <div class="profile-img">
                            <img class="profile-image" src="{{asset('images/avtar.png')}}"/>
                        </div>
                        <div class="profile-content">
                            <h3>Final Step - Tell us what you’re moving</h3>
                            <span>Not 100% sure what you’re moving yet? Changing items later is easy!</span>
                        </div>
                    </div>
                    <div class="content-wrapper booking-detail m-40">
                        <h3>Your Booking Details</h3>
                        <div class="booking-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="fullname" placeholder="First Name & Last Name">
                                        <label for="fullname">First Name & Last Name</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone number">
                                        <label for="phone">Phone number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper address-detail m-40">
                        <h3>Pickup Address & Contact Details</h3>
                        <div class="address-form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="postcode" placeholder="Search Postcode">
                                        <label for="postcode">Search Postcode</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
                                        <label for="addressLine1">Address Line 1</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
                                        <label for="addressLine2">Address Line 2</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                        <label for="city">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="country" placeholder="Country">
                                        <label for="country">Country</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contactNamePickup" placeholder="Contact Name at Pickup">
                                        <label for="contactNamePickup">Contact Name at Pickup</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pickupPhone" placeholder="Pickup Contact Number">
                                        <label for="pickupPhone">Pickup Contact Number</label>
                                    </div>
                                </div>
                                <div class="check-box-wrapper pt-3">
                                    <div class="useContact">
                                        <input type="checkbox" name="useMyContact"/>
                                        <span>Use my contact details</span>
                                    </div>
                                    <div class="pt-2">
                                        <p>It is your responsibility to make this person aware that AnyVan and a driver will contact them during the course of the job. By clicking ‘Book Now’ you are authorising AnyVan to share essential booking information with this person and a driver.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper address-detail m-40">
                        <h3>Delivery Address & Contact Details</h3>
                        <div class="address-form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="postcode" placeholder="Search Postcode">
                                        <label for="postcode">Search Postcode</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
                                        <label for="addressLine1">Address Line 1</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
                                        <label for="addressLine2">Address Line 2</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                        <label for="city">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="country" placeholder="Country">
                                        <label for="country">Country</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contactNamePickup" placeholder="Contact Name at Pickup">
                                        <label for="contactNamePickup">Contact Name at Pickup</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pickupPhone" placeholder="Pickup Contact Number">
                                        <label for="pickupPhone">Pickup Contact Number</label>
                                    </div>
                                </div>
                                <div class="check-box-wrapper pt-3">
                                    <div class="useContact">
                                        <input type="checkbox" name="useMyContact"/>
                                        <span>Use my contact details</span>
                                    </div>
                                    <div class="pt-2">
                                        <p>It is your responsibility to make this person aware that AnyVan and a driver will contact them during the course of the job. By clicking ‘Book Now’ you are authorising AnyVan to share essential booking information with this person and a driver.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper m-40">
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-danger next-btn">Next</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="map-wrapper">
                        <div id="googleMap">
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=300&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:352px;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:352px;height:300px;}.gmap_iframe {width:352px!important;height:300px!important;}</style></div>
                        </div>
                        <div class="map-content-wrapper">
                            <div class="content pb-3">
                                <p>Your Reference</p>
                                <span>14446780</span>
                            </div>
                            <div class="content pb-3">
                                <p>Job Type - Furniture & Appliances</p>
                                <span>Armchair Two Seater Sofa Double WardrobeFloors</span>
                            </div>
                            <div class="content pb-3">
                                <p>Your Reference</p>
                                <span>Ground to 1st</span>
                            </div>
                            <div class="content pb-3">
                                <p>Pickup</p>
                                <span>Tue 13 Jun</span>
                            </div>
                            <div class="content pb-3">
                                <p>Locations</p>
                                <span>London N22 to Barking IG11</span>
                            </div>
                        </div>
                    </div>
                    <div class="extra-detail mt-4">
                        <p>YOU ARE COVERED WITH OUR COMPREHENSIVE PUBLIC, LIABILITY AND GOODS & TRANSIT INSURANCE.</p>
                        <p>FOR MORE INFORMATION REFER TO OUR TERMS AND CONDITIONS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>