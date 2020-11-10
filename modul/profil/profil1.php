<div class="card col-sm-8 float-sm-right">
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="profile-img">
                            <img src="img/logo.jpg" alt="">
                            <form id="form-upload" action="action" method="POST" enctype="multipart/form-data">
                                <div class="file1 btn btn-sm btn-primary">
                                    <i class="fa fa-camera"></i>
                                    <input type="file" name="user_photo" id="user_photo" >
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="profile-head">
                                    <h5>
                                        <?=@$vname?>
                                    </h5>
                                    <h6>
                                        <?=@$vprofesi?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="editbtn">
                            <a class="fa fa-cogs" href="?page=profil&id=<?php echo $id_user; ?>&why=edit"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>User</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p><?=@$vusername?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p><?=@$vname?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p><?=@$vemail?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p><?=@$vphone_number?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p><?=@$vprofesi?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
  </div>