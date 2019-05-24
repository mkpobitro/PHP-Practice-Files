<?php 
  include ('header.php');
?>
    <!--main site-content-->
    <main class="site-content">
      <!-- =========================
        single blog section
        ========================== -->
      <section id="blog" class="home-section text-center">
        <div class="heading-blog home-section text-centerz">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="section-heading-right">
                  <h2><strong>Single Blog</strong></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="blog_container blog_container_deatils_leftbar" id="blog-post">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-content">
                <article>
                  <!-- slider -->
                  <div class="img-holder">
                    <div id="myCarousel0" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel0" data-slide-to="0"
                          class="active"></li>
                        <li data-target="#myCarousel0" data-slide-to="1"></li>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="images/blog/1.jpg" alt="images">
                        </div>
                        <div class="item">
                          <img src="images/blog/2.jpg" alt="images">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end of slider-->
                  <div class="post-meta clear-fix">
                    <div class="post-date">
                      <ul>
                        <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                          <span>Date : </span>
                          5 Jan
                        </li>
                        <li><span><i class="fa fa-user" aria-hidden="true"></i></span>
                          <span>Author :</span>Saif
                        </li>
                        <li><span><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                          <span>Comments :</span>15
                          Comments
                        </li>
                      </ul>
                    </div>
                    <div class="post-title">
                      <h2>Construction Management</h2>
                    </div>
                  </div>
                  <br>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since, when
                    unknown
                    printer took a galley of type and scrambled it to make a type.Lorem Ipsum
                    has been
                    the industry's standard dummy text ever since, when unknown printer took a
                    galley of
                    type and scrambled it to make a type.Lorem Ipsum has been the industry's
                    standard
                    dummy text ever since, when unknown printer took a galley of type and
                    scrambled it
                    to make a type.Lorem Ipsum has been the industry's standard dummy text ever
                    since,
                    when unknown printer took a galley of type and scrambled it to make a type.
                  </p>
                  <!-- shear button -->
                  <div class="row shear_area">
                    <div class="col-lg-12">
                      <div class="shear">
                        <h6>Share :</h6>
                        <div class="social_button">
                          <ul>
                            <li><a href="#" class="tran3s"><i
                              class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="tran3s"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="tran3s"><i
                              class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="tran3s"><i
                              class="fa fa-linkedin"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end of shear button -->
                  <!-- comment area -->
                  <div class="comments_area clear-fix">
                    <h4>comments list</h4>
                    <div class="col-md-12 single_comment clear-fix reply_comment">
                      <img src="images/blog/15.jpg" alt="images" class="float-left">
                      <div class="comment float-left">
                        <a href="#" class="tran3s reply">Reply</a>
                        <h6>Rio Arora</h6>
                        <span>5 january 2017 at 11:30 pm</span>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever
                          since, when
                          unknown printer took a galley of type and scrambled it to make a
                          type.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-12 single_comment clear-fix reply_comment wow fadeInDown">
                      <img src="images/blog/16.jpg" alt="images" class="float-left">
                      <div class="comment float-left">
                        <a href="#" class="tran3s reply">Reply</a>
                        <h6>Deo Clark</h6>
                        <span>5 january 2017 at 11:30 pm</span>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever
                          since, when
                          unknown printer took a galley of type and scrambled it to make a
                          type.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- End of comment -->
                  <!-- comment-box -->
                  <div class="comment-box clear-fix">
                    <div>
                      <div>
                        <div class="comment-box-title">
                          <div>
                            <h4>Type Your comments</h4>
                          </div>
                        </div>
                        <form action="#">
                          <div class="comment-box-field row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInDown">
                              <div class="comment-box-half">
                                <input type="text" placeholder="Name">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInDown">
                              <div class="comment-box-half">
                                <input type="email" placeholder="Email">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown">
                              <div class="comment-box-full">
                                <textarea placeholder="Comment"></textarea>
                              </div>
                            </div>
                          </div>
                          <button class="tran3s theme-button">Comment</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <!-- =========================
                Blog Sidebar right
                ========================== -->
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 blog_content_left blog_sidebar">
                <form action="#">
                  <div class="search_item_holder">
                    <input type="text" placeholder="search">
                    <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </form>
                <div class="category_list">
                  <h4>Categories</h4>
                  <ul>
                    <li><a href="#" class="tran3s">Construction Management</a></li>
                    <li><a href="#" class="tran3s">Work Planing</a></li>
                    <li><a href="#" class="tran3s">Home Building</a></li>
                    <li><a href="#" class="tran3s">Interior Design</a></li>
                    <li><a href="#" class="tran3s">Architecture</a></li>
                    <li><a href="#" class="tran3s">Renovation</a></li>
                  </ul>
                </div>
                <div class="recent_blog">
                  <h4>Recent blog</h4>
                  <div class="recent_blog_single_item clear-fix">
                    <div class="img-content float-left">
                      <img src="images/blog/r1.jpg" alt="image">
                    </div>
                    <div class="text float-left">
                      <a href="#">Lorem Ipsum has been the industry's standard</a>
                      <span>Jan 5 2017</span>
                    </div>
                  </div>
                  <div class="recent_blog_single_item clear-fix">
                    <div class="img-content float-left">
                      <img src="images/blog/r2.jpg" alt="image">
                    </div>
                    <div class="text float-left">
                      <a href="#">Lorem Ipsum has been the industry's standard</a>
                      <span>Jan 5 2017</span>
                    </div>
                  </div>
                  <div class="recent_blog_single_item clear-fix">
                    <div class="img-content float-left">
                      <img src="images/blog/r3.jpg" alt="image">
                    </div>
                    <div class="text float-left">
                      <a href="#">Lorem Ipsum has been the industry's standard</a>
                      <span>Jan 5 2017</span>
                    </div>
                  </div>
                </div>
                <!-- end recent_blog -->
                <div class="tags_widget">
                  <h4>Tags</h4>
                  <ul>
                    <li><a href="#" class="hvr-bounce-to-right-two">Planing</a></li>
                    <li><a href="#" class="hvr-bounce-to-right-two">Fixing</a></li>
                    <li><a href="#" class="hvr-bounce-to-right-two">Design</a></li>
                    <li><a href="#" class="hvr-bounce-to-right-two">Tips</a></li>
                    <li><a href="#" class="hvr-bounce-to-right-two">Architecture</a></li>
                    <li><a href="#" class="hvr-bounce-to-right-two">Building</a></li>
                    <li><a href="#" class="hvr-bounce-to-right-two">Constructin</a></li>
                  </ul>
                </div>
                <!-- End tags_widget -->
              </div>
              <!-- End blog_sidebar right -->
            </div>
          </div>
        </div>
      </section>
      <!-- End blog section -->
      <!--toper -->
      <div class="toper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="page-scroll marginbot-30">
                <a href="#blog" id="totop" class="btn btn-circle">
                <i class="fa fa-angle-double-up animated"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End toper -->
<?php 
      include ('footer.php');
?>
      