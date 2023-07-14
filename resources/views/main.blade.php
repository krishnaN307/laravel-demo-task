<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Task</title>
     <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</head>
<body>
    <div class="main-wrapper">
        <section class="header bg-red">
            <!-- Header Section -->
            <div class="container d-flex">
                <div class="logo-wrapper">
                    <img src="{{asset('images/Group 2.svg')}}"/>
                </div>
                <div class="left-menu d-flex">
                    <input type="checkbox" id="menu-toggle">
                    <label for="menu-toggle" class="menu-icon">&#9776;</label>
                    <ul class="menu nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Other Services</a>
                        </li>
                    </ul>
                </div>
                <div class="right-menu d-flex">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link phone-no" href="#">
                                <i class="fa fa-phone fa-thin"></i>
                                0208 090 6151
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-user fa-light"></i>
                                Log In
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="get-qoute-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h3>We’ll help you save money on your move, so you can focus on settling in.</h3>
                            <p>The preferred choice in the UK for delivery, removals, and transportation services.</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="moving" placeholder="What are you moving?">
                                        <label for="moving">What are you moving?</label>
                                    </div>
                                </div>
                                <div class="col-6 p-need">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pickUp" placeholder="Pick Up Location">
                                        <label for="pickUp">Pick Up Location</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="dropOff" placeholder="Drop Off Location">
                                        <label for="dropOff">Drop Off Location</label>
                                    </div>
                                </div>
                                <div class="qoute-btn pt-3">
                                    <button>Get Qoute Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="move-image col-md-6 col-12">
                            <img src="{{asset('images/Image 1.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="get-price-section">
                <div class="container">
                    <div class="listing-tab">
                        <ul class="pb-3 d-flex">
                            <li>Featured in:</li>
                            <li><img src="{{asset('images/Image 2.png')}}"/></li>
                        </ul>
                    </div>
                    <div class="get-price row">
                        <div class="col-md-6 col-12">
                            <h3>We make it easy to move Get Quote Now</h3>
                            <ul>
                                <li>
                                    <img src="{{asset('images/Image_10.png')}}"/>
                                    Get prices straightaway
                                </li>
                                <li>
                                    <img src="{{asset('images/Image_10.png')}}"/>
                                    Choose date and time
                                </li>
                                <li>
                                    <img src="{{asset('images/Image_10.png')}}"/>
                                    Track your driver
                                </li>
                            </ul>
                            <button>Get Prices Now</button>
                        </div>
                        <div class="computer-section col-md-6 col-12">
                            <img src="{{asset('images/Group69.svg')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-section">
                <div class="container">
                    <h3>We love what we do</h3>
                    <div class="row">
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>Home Removals</p>
                                </div>
                            </div>
                        </div>
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>Storage</p>
                                </div>
                            </div>
                        </div>
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>Furniture & Large Items Delivery</p>
                                </div>
                            </div>
                        </div>
                    {{-- </div>
                    <div class="row pt-4"> --}}
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>eBay Delfa-inverse</p>
                                </div>
                            </div>
                        </div>
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>Man & Van Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>European Moves</p>
                                </div>
                            </div>
                        </div>
                    {{-- </div>
                    <div class="row pt-4"> --}}
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>Motorbikes</p>
                                </div>
                            </div>
                        </div>
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>European Moves</p>
                                </div>
                            </div>
                        </div>
                        <div class="todo-img col-md-4 col-6 col-sm-4">
                            <div class="background">
                                <div class="transbox">
                                  <p>Storage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="free-move-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                            <h3>Free moves for good deeds</h3>
                            <p>We’ve been asked to help move some amazing charity causes over the past 13 years and offering free moves for good deeds is an aspect of Rescue Removals that means a lot to us.</p>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <img src="{{asset('images/Image9.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-section">
                <img src="{{asset('images/brand.png')}}"/>
            </div>
            <div class="storage-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12 col-sm-6">
                            <h3>Low Cost Storage</h3>
                            <p>We collect, store and deliver making storing your items hassle free and low cost. With over 40 facilities, we cover the whole of the UK.</p>
                            <ul>
                                <li>
                                    <img src="{{asset('images/Image_10.png')}}"/>
                                    Excellent Prices
                                </li>
                                <li>
                                    <img src="{{asset('images/Image_10.png')}}"/>
                                    Compensation Cover
                                </li>
                                <li>
                                    <img src="{{asset('images/Image_10.png')}}"/>
                                    No Minimum Terms
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-12 col-sm-6">
                            <img src="{{asset('images/low_cost_storage.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="footer-wrapper">Footer</div>
        </section>
    </div>
</body>
</html>