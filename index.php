<?php
    include 'init.php';
?>
<!-- Start Slider -->
<div class="slider">
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <h1 class="text">Welcome <br> The Student Affairs, College of Arts<span>KFS University!</span></h1>
            <div class="overlay"></div>
            <div class="carousel-item carousel-one active"></div>
            <div class="carousel-item carousel-two"></div>
            <div class="carousel-item carousel-three"></div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
    </div>
</div>
<!-- End Slider -->

<!-- Start Features -->
<div class="features text-center">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <i class="fa fa-home fa-4x icon"></i>
            <h3>Faculty News</h3>
            <p>Welcome in the First Website <br> Faculty of Arts KFS Unvirsity </p>
        </div>
         <div class="col-sm-6 col-lg-3">
            <i class="fa fa-cogs fa-4x  icon"></i>
            <h3>Requests</h3>
            <p>Welcome in the First Website <br> Faculty of Arts KFS Unvirsity </p>
        </div>
         <div class="col-sm-6 col-lg-3">
            <i class="fa fa-user-plus fa-4x  icon"></i>
            <h3>Settings</h3>
            <p>Welcome in the First Website <br> Faculty of Arts KFS Unvirsity </p>
        </div>
         <div class="col-sm-6 col-lg-3">
            <i class="fa fa-wrench fa-4x icon"></i>
            <h3>Contact us</h3>
            <p>Welcome in the First Website <br> Faculty of Arts KFS Unvirsity </p>
        </div>
    </div> 
    </div>
</div>
<!-- Start Features -->

<!-- Start Overview -->
<div class="overview text-center">
    <div class="container">
        <h2 class="h1">Faculty Overview</h2>
        <p>Welcome in the First Website Faculty of Arts KFS Unvirsity Welcome in the First Website Faculty of Arts KFS Unvirsity! </p>
        <h4>Let's Start Today</h4>
        <button class="btn btn-danger btn-lg">View More <i class="fa fa-angle-double-right"></i> </button>
    </div>
</div>
<!-- End Overview -->

<!-- Start Gallery -->
<div class="featured-work text-center">
    <div class="container">
        <h2>Faculty Gallery</h2>
        <p>Welcome in the First Website Faculty of Arts KFS Unvirsity Welcome in the First Website Faculty of Arts KFS Unvirsity!</p>
        <ul class="list-unstyled row">
            <li data-class="all" class="col-md active">All</li>
            <li data-class=".websites" class="col-md">Websites</li>
            <li data-class=".logos" class="col-md">Logos</li>
            <li data-class=".grahic" class="col-md">Grahic</li>
            <li data-class=".markting" class="col-md">Markting</li>
            <li data-class=".videos" class="col-md">Videos</li>
        </ul>
    </div>
    <div class="shuffle-image">
        <div class="row">
            <div class="col-md"> <img class="websites" src="Layout/Image/image.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="logos" src="Layout/Image/image2.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="markting" src="Layout/Image/image3.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="grahic" src="Layout/Image/imag4.jpg" width="310" height="250" alt="..."> </div>
        </div>
        <div class="row">
            <div class="col-md"> <img class="grahic" src="Layout/Image/image.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="markting" src="Layout/Image/image2.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="videos"  src="Layout/Image/image3.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="logos" src="Layout/Image/imag4.jpg" width="310" height="250" alt="..."> </div>
        </div>
        <div class="row">
            <div class="col-md"> <img class="videos" src="Layout/Image/image.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="grahic" src="Layout/Image/image2.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="websites" src="Layout/Image/image3.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="markting" src="Layout/Image/imag4.jpg" width="310" height="250" alt="..."> </div>
        </div>
    </div>
</div>
<!-- End Gallery -->


















<!-- Start Gallery -->

<?php
    include $tpl.'footer.php';
?>
