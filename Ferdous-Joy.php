<?php
session_start();
if($_SESSION['log']){

}else{
 header("location: login.php");
}
require_once('includes/web-head.php');
require_once('database-connection.php');

?>



    <! --==Menu part start==-- >

    <nav class="navbar navbar-expand-md menu_head" id="navbar-example2">
        <div class="container just_menu">
            <a class="navbar-brand" href="#"><img src="images/ferdous.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fas fa-align-justify"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav nav-pills ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_part">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#filter_part">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services_part_1">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog_part">blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact_part">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- ==Menu part end== -->

    <!-- ==Banner part start== -->

    <section id="home" class="banner">
        <div class="banner_area">
            <div class="banner_caption container">
                <div class="container text-left">
                    <div class="row justify-content-start">
                        <div class="col-md-16 col-sm-6">
                          <?php
                          $query2 = "SELECT * FROM banner";
                          $res= mysqli_query($database_connection, $query2);
                          foreach($res as $joy){
                          ?>
                          <div class="banner_text">
                              <h3><?=$joy['firsthead']?><span><?=$joy['firstheadspan']?></span</h3>
                              <div class="caption_inner">
                                  <div class="ah-headline">
                                      <span class="static_text"> <?=$joy['secondhead']?></span>
                                      <span class="ah-words-wrapper">
                                          <b class="is-visible"> <?=$joy['secondheadspan']?> </</b>

                                      </span>
                                  </div>
                              </div>
                              <a href="#">Read More</a>
                              <a href="#">Buy Now</a>
                          </div>
                          <?php
                          }

                          ?>

                        </div>
                    </div>
                </div>
                <a href="#about_part" class="mouse_icon hidden-sm"><span class="wheel"></span></a>
            </div>
        </div>
    </section>

    <!-- ==Banner part end== -->

    <!-- ==About part start== -->

    <section id="about_part">
        <div class="container text-center">
            <div class="row justify-content-center">
              <?php
              $banner_info="SELECT * FROM about";
                          $connect_all=mysqli_query($database_connection, $banner_info);
                           foreach($connect_all as $single){
                              ?>
                              <div class="col-lg-6 col-md-6">
                                  <h5> <?=$single['subhead']?> </h5>
                                  <h2>   <?=$single['title']?>  </h2>
                              </div>
                          </div>
                          <div class="about_details">
                              <div class="row">
                                  <div class="col-lg-4 col-md-4">
                                      <img src="evt-pic/<?=$single['pic']?>" class="img-fluid w-100" alt="">

                                  </div>
                                  <div class="col-lg-8 col-md-8 text-left">
                                      <p>  <?=$single['mytext']?></p>
                                      <div class="progerssbar">
                                          <h4>design</h4>
                                          <div id="bar1" class="barfiller">
                                              <span class="tip"></span>
                                              <span class="fill" data-percentage="80"></span>
                                          </div>
                                          <h4>html</h4>
                                          <div id="bar2" class="barfiller">
                                              <span class="tip"></span>
                                              <span class="fill" data-percentage="90"></span>
                                          </div>
                                          <h4>php</h4>
                                          <div id="bar3" class="barfiller">
                                              <span class="tip"></span>
                                              <span class="fill" data-percentage="75"></span>
                                          </div>
                                          <h4>wordpress</h4>
                                          <div id="bar4" class="barfiller">
                                              <span class="tip"></span>
                                              <span class="fill" data-percentage="65"></span>
                                          </div>
                                          <h4>javascript</h4>
                                          <div id="bar5" class="barfiller">
                                              <span class="tip"></span>
                                              <span class="fill" data-percentage="50"></span>
                                          </div>
                                          <div class="butn d-none d-sm-block">
                                              <a href=""><i class="fas fa-thumbs-up"></i> hire me</a>
                                              <a href=""><i class="fas fa-download"></i> download cv</a>
                                          </div>
                                          <div class="butn_2 d-block d-sm-none">
                                              <a href=""><i class="fas fa-thumbs-up"></i> hire me</a>
                                              <a href=""><i class="fas fa-download"></i> download cv</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

<?php
}
               ?>

        </div>
    </section>

    <!-- ==About part end== -->

    <!-- ==Filteriz part start== -->

    <section id="filter_part">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="filter_head">
                        <h5>Super creative</h5>
                        <h2>Our Latest Works</h2>
                    </div>
                </div>
                <div class="text-left">
                    <ul class="simplefilter">
                        <li class="fltr-controls active" data-filter="all">All</li>
                        <li class="fltr-controls" data-filter="1">Photography</li>
                        <li class="fltr-controls" data-filter="2">Illustration</li>
                        <li class="fltr-controls" data-filter="3">Branding</li>
                        <li class="fltr-controls" data-filter="4">Web-Design</li>
                    </ul>
                </div>
            </div>
            <div class="row p-0 m-0 filtr-container">
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="1, 2">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f1.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f1.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="2, 3">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f2.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f2.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="1">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f3.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f3.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="4">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f4.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f4.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="1, 3">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f5.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f5.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="2">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f6.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f6.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="1">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f7.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f7.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="1, 3">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f8.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f8.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 p-0 m-0 filtr-item" data-category="1">
                    <div class="filtr_item">
                        <img class="img_1" src="images/f9.jpg" alt="">
                        <div class="overly">
                            <a class="venobox" href="images/f9.jpg"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==Filteriz part End== -->

    <!-- ==Services part strat== -->

    <section id="services_part_1">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="all_item">
                        <h5>Support 24/7</h5>
                        <h2>our services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services_part_2">
        <div class="container">
            <div class="row">
              <?php
              $banner_info="SELECT * FROM service";
                          $connect_all=mysqli_query($database_connection, $banner_info);
                           foreach($connect_all as $joy){
                              ?>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                  <div class="services_item">
                                      <div class="services_img">
                                          <img class="img-fluid" src="service-pic/<?=$joy['pic']?>" alt="">
                                      </div>
                                      <div class="service_text">
                                          <h4><?=$joy['title']?></h4>
                                          <p><?=$joy['contend']?></p>
                                      </div>
                                  </div>
                              </div>

<?php
}
 ?>



            </div>
        </div>
    </section>
    <!-- ==Services part end== -->

    <!-- ==Counter part strat== -->
    <section id="counter_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <i class="fab fa-accusoft"></i>
                        <h3 class="counter">5000</h3>
                        <h5>Total Project</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <i class="fab fa-gripfire"></i>
                        <h3 class="counter">100</h3>
                        <h5>Total Project</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <i class="fas fa-hockey-puck"></i>
                        <h3 class="counter">2000</h3>
                        <h5>Total Project</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <i class="fas fa-users"></i>
                        <h3 class="counter">3000</h3>
                        <h5>Total Project</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==Counter part end== -->

    <!-- ==Latest blog start== -->

    <section id="blog_part">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="blog_head">
                        <h5>WHAT YOU THINK</h5>
                        <h2>LATEST BLOGS</h2>
                    </div>
                </div>
            </div>

            <div class="row">
              <?php
              $query2 = "SELECT * FROM blog";
              $res= mysqli_query($database_connection, $query2);
              foreach($res as $joy){
              ?>


                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="blog_inner text-left">
                        <div class="blog_img">
                            <img src="blog-pic/<?=$joy['pic']?>" alt="">
                            <a class="venobox" href="blog-pic/<?=$joy['pic']?>"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="blog_text">
                            <h5><?=$joy['name']?></h5>
                            <p><?=$joy['contend']?></p>
                            <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
<?php
 }

 ?>


                </div>
        </div>
    </section>

    <!-- ==Latest blog end== -->

    <!-- ==Testimonial part start== -->

    <section id="testimonial" class="testimonial_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="slide_testimonials">
                      <?php
                      $query2 = "SELECT * FROM testimonial";
                      $res= mysqli_query($database_connection, $query2);
                      foreach($res as $joy){
                      ?>


                        <div class="single_testimonial text-center">
                            <div class="testimonial_content">
                                <i class="fa fa-quote-left"></i>
                                <p> <?=$joy['contend']?> </p>
                            </div>
                            <div class="testimonial_info">
                                <div class="testimonial_image">
                                    <img src="test-pic/<?=$joy['pic']?>" alt="">
                                </div>
                                <h5> <?=$joy['name']?>  </h5>
                                <h4> <?=$joy['position']?> </h4>
                            </div>
                        </div>
                        <?php
                         }

                         ?>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==Testimonial part end== -->

    <!-- ==Team part strat== -->

    <section id="our_team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="team_part">
                        <h5>Super Active</h5>
                        <h2>our team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
              <?php
              $query2 = "SELECT * FROM team";
              $res= mysqli_query($database_connection, $query2);
              foreach($res as $joy){
              ?>
              <div class="col-lg-3 col-md-6">
                  <div class="team_item">
                      <div class="team_item_1">
                          <div class="team_img">
                              <img class="img-fluid" src="team-pic/<?=$joy['pic']?>" alt="">
                          </div>
                      </div>

                      <div class="team_text">
                          <h4> <?=$joy['name']?>  </h4>
                          <p><?=$joy['contend']?> </p>
                          <i class="fab fa-facebook-f"></i>
                          <i class="fab fa-twitter"></i>
                          <i class="fab fa-linkedin-in"></i>
                          <i class="fab fa-pinterest-p"></i>
                      </div>
                  </div>
              </div>

              <?php
            }
             ?>


            </div>
        </div>
    </section>

    <!-- ==Team part end== -->

    <!-- ==Client part start== -->

    <section class="client_part">
        <div class="container text-center">
            <div class="row justify-content-center" id="ball">
                <div class="">
                    <img src="images/client_logo_1.png" class="img-fluid" alt="">
                </div>
                <div class="">
                    <img src="images/client_logo_2.png" class="img-fluid" alt="">
                </div>
                <div class="">
                    <img src="images/client_logo_3.png" class="img-fluid" alt="">
                </div>
                <div class="">
                    <img src="images/client_logo_1.png" class="img-fluid" alt="">
                </div>
                <div class="">
                    <img src="images/client_logo_2.png" class="img-fluid" alt="">
                </div>
                <div class="">
                    <img src="images/client_logo_3.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- ==Client part end== -->

    <!-- ==Pricing part start== -->

    <section id="pricing_part">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="price_head">
                        <h5>Select your Price</h5>
                        <h2>best pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">

              <?php
              $query2 = "SELECT * FROM price where status=1 ";
              $res= mysqli_query($database_connection, $query2);
              foreach($res as $joy){
              ?>

                <div class="col-lg-4">
                    <div class="price_rectangle">
                        <h3> <?=$joy['title']?> </h3>
                        <h1> <?=$joy['price']?> </h1>
                        <h6> <?=$joy['length']?> </h6>
                        <div class="list_text">
                            <ul>
                                <li><?=$joy['list']?></li>
                                <li><?=$joy['list']?></li>
                                <li><?=$joy['list']?></li>
                                <li><?=$joy['list']?></li>
                                <li><?=$joy['list']?></li>
                                <li><?=$joy['list']?></li>


                            </ul>
                        </div>
                        <a href="">TAKE THIS PLAN</a>
                    </div>
                </div>
<?php

}
 ?>

 <?php
 $query2 = "SELECT * FROM price where status=2";
 $res= mysqli_query($database_connection, $query2);
 foreach($res as $joy){
 ?>

   <div class="col-lg-4">
       <div class="price_rectangle middle_rectangle">
           <h3> <?=$joy['title']?> </h3>
           <h1> <?=$joy['price']?> </h1>
           <h6> <?=$joy['length']?> </h6>
           <div class="list_text">
               <ul>
                   <li><?=$joy['list']?></li>
                   <li><?=$joy['list']?></li>
                   <li><?=$joy['list']?></li>
                   <li><?=$joy['list']?></li>
                   <li><?=$joy['list']?></li>
                   <li><?=$joy['list']?></li>


               </ul>
           </div>
           <a href="">TAKE THIS PLAN</a>
       </div>
   </div>
<?php

}
?>

<?php
$query2 = "SELECT * FROM price where status=3";
$res= mysqli_query($database_connection, $query2);
foreach($res as $joy){
?>

  <div class="col-lg-4">
      <div class="price_rectangle">
          <h3> <?=$joy['title']?> </h3>
          <h1> <?=$joy['price']?> </h1>
          <h6> <?=$joy['length']?> </h6>
          <div class="list_text">
              <ul>
                  <li><?=$joy['list']?></li>
                  <li><?=$joy['list']?></li>
                  <li><?=$joy['list']?></li>
                  <li><?=$joy['list']?></li>
                  <li><?=$joy['list']?></li>
                  <li><?=$joy['list']?></li>


              </ul>
          </div>
          <a href="">TAKE THIS PLAN</a>
      </div>
  </div>
<?php

}
?>

            </div>
        </div>
    </section>

    <!-- ==Pricing part end== -->

    <!-- ==Contact part start== -->

    <section class="contact_section" id="contact_part">
        <div class="contact" style="background-image: url(images/banner-1.jpeg)">
            <div class="col-lg-6 col-md-8 m-auto">
              <?php
              $query2 = "SELECT * FROM contact";
              $res= mysqli_query($database_connection, $query2);
              foreach($res as $joy){
              ?>
              <div class="contact_headline">
                  <h5> <?=$joy['head']?> </h5>
                  <h2><?=$joy['title']?> </h2>
                  <p> <?=$joy['contend']?></p>
              </div>

<?php
}
 ?>

            </div>
        </div>
        <div class="container">
            <div class="row contact_main">
                <div class="col-lg-6">
                  <?php
                  if(isset($_SESSION['msg'])){

                    ?>
                    <div class="alert alert-success" role="alert">
                    Message has sent successfully!
                    </div>
                    <?php
                        }
                        unset($_SESSION['msg']);
                   ?>

                    <form method="post" action="msg-post.php">

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control form_control" id="exampleInputPassword1" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control form_control" id="exampleInputPassword1" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control form_control" id="exampleInputPassword1" placeholder="Phone" name="phn">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control  form_control" name="msg" id="exa form_controlmpleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn_contact">Send message <i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694484722!2d90.3671072226942!3d23.747050044458557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C+Dhaka+1205!5e0!3m2!1sen!2sbd!4v1536353125281" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==Contact part end== -->


    <!-- ==Footer part start== -->

    <section class="footer_section">
        <div class="container">
            <div class="row">
              <?php
              $query2 = "SELECT * FROM footer";
              $res= mysqli_query($database_connection, $query2);
              foreach($res as $joy)
              {
              ?>
              <div class="col-lg-3">
                  <div class="footer_first">
                      <div class="footer_logo">
                          <img src="foot-pic/<?=$joy['pic']?>" alt="">

                      </div>
                      <div class="footer_first_text">
                          <p> <?=$joy['logotext']?> </p>
                      </div>
                      <div class="social_site">
                          <i class="fab fa-facebook-f"></i>
                          <i class="fab fa-behance"></i>
                          <i class="fab fa-linkedin-in"></i>
                          <i class="fab fa-twitter"></i>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="footer_second_part">
                      <div class="footer_second_text">
                          <h4> <?=$joy['contactTitle']?></h4>
                          <p><?=$joy['adreess']?></p>
                          <p><?=$joy['email']?><br><?=$joy['phn']?></p>


                      </div>
                  </div>
              </div>
              <div class="col-lg-3 m-auto">
                  <div class="footer_second_part">
                      <div class="footer_second_text link_part">
                          <h4> <?=$joy['linktitle']?> </h4>
                          <ul>
                              <li><a href=""> <?=$joy['link2']?></a></li>
                              <li><a href=""> <?=$joy['link1']?></a></li>
                              <li><a href=""><?=$joy['link2']?></a></li>
                              <li><a href=""><?=$joy['link1']?></a></li>
                              <li><a href=""><?=$joy['link2']?></a></li>
                              <li><a href=""><?=$joy['link1']?></a></li>
                          </ul>
                      </div>
                  </div>
              </div>


              <?php
            }
             ?>

                <div class="col-lg-3">
                    <div class="footer_second_part third">
                        <div class="footer_second_text">
                            <h4>instagram</h4>
                            <div class="ins-img"><img src="images/smal.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img"><img src="images/foot1.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img"><img src="images/foot2.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img"><img src="images/foot3.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img"><img src="images/foot1.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img"><img src="images/foot2.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img"><img src="images/foot3.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img d-sm-none d-md-block"><img src="images/foot1.jpeg" class="img-fluid" alt=""></div>
                            <div class="ins-img d-none d-md-block"><img src="images/foot2.jpeg" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright">
        <div class="container text-center">
            <div class="row ">
                <div class="col-lg-10 m-auto">
                    <div class="madename">
                        <h6><strong> @ ThemeMadeBy: Kazi Ferdous Hasan Joy</strong></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==Footer part end== -->

    <!-- back to top button start -->
    <div class="back_to_top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!-- back to top button end -->

    <?php
    require_once('includes/web-footer.php');
    ?>
