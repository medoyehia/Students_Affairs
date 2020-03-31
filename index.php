<?php
    include 'init.php';
?>
<!-- Start Model SigIN -->
    <div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header colcard">
                    <h5 class="modal-title">SigIn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="comment_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col col-sm-12">
                                <input type="text" name="email" id="name" class="form-control input"  placeholder="Enter Your Email" required="required">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col col-sm-12">
                                <input type="password" name="pass" id="name" class="form-control input"  placeholder="Enter Your Email" required="required">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col col-sm-12">
                                <button type="submit" name="post" id="post" class="btn btn-info col-sm-12 center-block"><i class="fas fa-user-plus"></i>
                                    Insert  
                                </button>                               
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- End Model SigIn -->
<!-- Start Model SigIN -->
    <div id="mymodal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header colcard">
                    <h5 class="modal-title">SigUp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="student">
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Username :<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-10">
                                <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Enter your Username" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Password :<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                              <input type="password" name="password" class="form-control" placeholder="Enter Your National Id" required="required" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Email :<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter your Email" required="required">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Phone :<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                                <input type="text" name="phone" class="form-control" id="inputAddress" placeholder="Phone" required="required" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Student Code:<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                                <input type="text" name="scode" class="form-control" autocomplete="off" placeholder="Student Code">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Address :<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Study level:<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                                <select name="fun" class="form-control">
                                      <option>Select Level</option>
                                      <option  value="1">First level</option>
                                      <option value="2">Secound level</option>
                                      <option value="3">Third level</option>
                                      <option value="4">Fourth level</option>
                                      <option value="0">Nothing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-sm-2 text-success">Gander :<span class="text-danger">*</span></div>
                            <div class="form-group col-md-9 col-sm-12">
                                <select name="gender" id="inputState" class="form-control">
                                  <option>Select Gander</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row"> 
                            <div class="form-group col-md-3 col-sm-2 text-success">Profile picture:<span class="text-danger">*</span></div>
                           <div class="form-group col-md-9 col-sm-11">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">CHOOSE_IMAGE</label>
                            </div>
                        </div>
                        <div class="col col-sm-12">
                            <button type="submit" name="post" id="post" class="btn btn-info col-sm-12 center-block"><i class="fas fa-user-plus"></i>
                                    Insert  
                            </button>                               
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- End Model SigIn -->
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
        <button class="btn btn-danger btn-lg">Read More <i class="fa fa-angle-double-right"></i> </button>
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
            <div class="col-md"> <img class="websites" src="Layout/Image/student.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="logos" src="Layout/Image/arts.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="markting" src="Layout/Image/student2.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="grahic" src="Layout/Image/fm.jpg" width="310" height="250" alt="..."> </div>
        </div>
        <div class="row">
            <div class="col-md"> <img class="grahic" src="Layout/Image/dd.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="markting" src="Layout/Image/mn.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="videos"  src="Layout/Image/mm.jpg" width="310" height="250" alt="..."> </div>
            <div class="col-md"> <img class="logos" src="Layout/Image/kfs.jpg" width="310" height="250" alt="..."> </div>
        </div>
    </div>
</div>
<!-- End Gallery -->
<!-- Start Latest Posts -->
<div class="latest-posts">
    <div class="container">
        <h2 class="h1 text-center">Latest Posts</h2>
        <p class="discription">Welcome in the First Website Faculty of Arts KFS Unvirsity Welcome in the First Website Faculty of Arts KFS Unvirsity! 
        </p>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Layout/Image/mn.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title text-info">Programming</h4>
                    <h6 class="card-subtitle mb-2 text-muted"> March 24 2020</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Layout/Image/fm.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title text-info">Programming</h4>
                    <h6 class="card-subtitle mb-2 text-muted"> March 24 2020</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Layout/Image/kf2.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title text-info">Programming</h4>
                    <h6 class="card-subtitle mb-2 text-muted"> March 24 2020</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Layout/Image/footbal.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title text-info">Programming</h4>
                    <h6 class="card-subtitle mb-2 text-muted"> March 24 2020</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Layout/Image/ang.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title text-info">Programming</h4>
                    <h6 class="card-subtitle mb-2 text-muted"> March 24 2020</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="Layout/Image/spots.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title text-info">Programming</h4>
                    <h6 class="card-subtitle mb-2 text-muted"> March 24 2020</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-danger">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Latest Posts -->















<!-- Start Gallery -->

<?php
    include $tpl.'footer.php';
?>
