<?php include './objects/Form.php'; ?>
<?php include './head.php'; ?>
<!-- Header Carousel -->
<header id="myCarousel" class="top-page carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/uhs/sickbay1900x1080.jpg');"></div>
            <div class="carousel-caption">
                <h2>Sickbay</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Caption 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Caption 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">
    <div class="row" id='main_content'>
        <div class='col-lg-9'>
            <section id='minutes'>
                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-md-8">
                        <h2>
                            <a href="#">Minutes</a>
                        </h2>
                        <hr>
                        <!-- First Blog Post -->
                        <h3>
                            <a href="#">28th Meeting</a>
                        </h3>
                        <p class="lead">
                            by <a href="index.php">Admin</a>
                        </p>
                        <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                        <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                        <hr>


                    </div>

                    <!-- Blog Sidebar Widgets Column -->
                    <div class="col-md-4">

                    </div>

                </div>
                <!-- /.row -->
            </section>
            <hr class="line">
            <section id='activities'>
                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-md-8">
                        <h2>
                            <a href="#">Minutes</a>
                        </h2>
                        <hr>
                        <!-- First Blog Post -->
                        <h3>
                            <a href="#">28th Meeting</a>
                        </h3>
                        <p class="lead">
                            by <a href="index.php">Admin</a>
                        </p>
                        <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                        <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                        <hr>


                    </div>

                    <!-- Blog Sidebar Widgets Column -->
                    <div class="col-md-4">

                    </div>

                </div>
                <!-- /.row -->
            </section>
            <hr class="line">
            <section id='signup'>
                <div class="row text-center">

                    <!-- Blog Entries Column -->
                    <div class="col-lg-12">
                        <h1>Sign Up</h1>
                        <hr>
                                        <?php
                $form = new Form();
                $form->addField("name", "Name", "text");
                $form->addField("email", "Email Address", "email");
                $form->addField("phone", "Phone Number", "text");
                $form->addField("pass1", "Password", "password");
                $form->addField("pass2", "Password", "password");
                $form->setActionValue("#");
                $form->setOnClick("return registerFM(this)");
                $form->setSubmit("Register");
                $form->addHint("hint");
                $form->displayNewForm();
                ?>
                        </div>
                </div>
                <!-- /.row -->
            </section>
        </div>
        <div class='col-lg-3'>
            <!-- Blog Categories Well -->
            <div class="well">
                <h4>News Around You</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <hr class="line">

    <!-- Footer -->
    <?php include '/foot.php'; ?>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
