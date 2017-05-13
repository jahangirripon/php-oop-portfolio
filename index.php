<?php

    require 'class/View.php';
    $obj_view = new View();
    $query_result = $obj_view->select_all_published_about_info();
    $query_result1 = $obj_view->select_all_published_mission_info();
    $query_result2 = $obj_view->select_all_published_vision_info();
    $query_result3 = $obj_view->select_all_published_about_info();
    $query_result4 = $obj_view->select_all_published_about_info();

?>



<?php
    include 'includes/header.php';
?>
        <section id="hero" data-type="background" data-speed="10">
            <article>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/frontend/img/logo-badge.png" class="logo">
                        </div>
                        <div class="col-sm-7 hero-text">
                            <h1>Welcome to my portfolio</h1>
                            <?php while ($about_info = mysqli_fetch_assoc($query_result)) { ?>
                            <p><?php echo $about_info['info_description'];?></p>
                              <?php } ?>
                        </div>


                    </div>
                </div>
            </article>
        </section>
        <!-- BOOST UR INCOME
        ==================================  -->
        <section id="boost-income">
            <div class="container">
                <div class="section-header">
                    <img src="assets/frontend/img/icon-boost.png" alt="chart">
                    <h2>About Me</h2>
                    <?php while ($about_info = mysqli_fetch_assoc($query_result3)) { ?>
                    <p class="lead"><?php echo $about_info['info_description'];?></p>
                <?php } ?>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Mission</h3>
                        <?php while ($about_info = mysqli_fetch_assoc($query_result1)) { ?>
                    <p class="lead"><?php echo $about_info['info_description'];?></p>
                        <?php } ?>
                    </div>
                    <div class="col-sm-6">
                        <h3>Vision</h3>
                        <?php while ($about_info = mysqli_fetch_assoc($query_result2)) { ?>
                    <p class="lead"><?php echo $about_info['info_description'];?></p>
                <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Features
        ==================================-->
        <section id="course-features">
            <div class="container">
                <div class="section-header">
                    <img src="assets/frontend/img/icon-rocket.png">
                    <h3>What will you get?</h3>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <i class="ci ci-facebook"></i>
                        <h4>Lifetime access to 80+ lectures</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-watch"></i>
                        <h4>10+ hours of HD video content</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-calender"></i>
                        <h4>30-day money back guarantee</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-community"></i>
                        <h4>Access to a community of like-minded students</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-instructor"></i>
                        <h4>Direct access to the instructor</h4>
                    </div>
                    <div class="col-sm-2">
                        <i class="ci ci-devices"></i>
                        <h4>Accessible content on your mobile devices</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Features
        ==================================-->
        <section id="project-features">
            <div class="container">
                <h2>All I care about</h2>
                
                <div class="row">
                    <div class="col-sm-4">
                        <img src="assets/frontend/img/icon-design.png">
                        <h3>Modern design</h3>
                        <p>
                            You get to work with a modern, professional quality design & layout.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/frontend/img/icon-code.png">
                        <h3>Quality Coding</h3>
                        <p>
                            You’ll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/frontend/img/icon-cms.png">
                        <h3>Easy-to-use CMS</h3>
                        <p>
                            Allow your clients to easily update their websites by converting your static 
                            websites to dynamic websites, using WordPress.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video
        ==================================-->
        <section id="video">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2>The Bezel-less Smartphone: Xiaomi Mi Mix!</h2>
                        <div>
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/m7plA1ALkQw" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instructor
        ==================================-->
        <section id="instructor">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Jahangir Ripon</h2>
                            </div>
                            <div class="col-lg-4">
                                <a href="http://twitter.com" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                                <a href="http://facebook.com" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                                <a href="http://youtube.com" target="_blank" class="badge social youtube"><i class="fa fa-youtube"></i></a>

                            </div>
                        </div>
                        <?php while ($about_info = mysqli_fetch_assoc($query_result4)) { ?>
                    <p class="lead"><?php echo $about_info['info_description'];?></p>
                        <?php } ?>
                    </div>	
                </div>

                <hr>
            </div>
        </section>
        <?php
    include 'includes/footer.php';
?>