<?php $this->load->view('layout/header');?>
<!--::banner part start::-->
    <section class="banner_part" style="background-image: url('<?php echo base_url();?>assets/img/banner_bg1.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-5">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">        
                            <h1>Our <span>Blog</span></h1>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!--::banner part start::-->
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                        foreach ($blog as $key => $value) {
                        ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url();?>assets/img/blog/<?php echo $value->gambar; ?>" alt="">
                                <a href="<?php echo base_url();?>assets/#" class="blog_item_date">
                                    <h3><?php echo $value->tanggal; ?></h3>
                                    <p><?php echo $value->bulan; ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url();?>assets/<?php echo base_url();?>assets/<?php echo $value->gambar; ?>">
                                    <h2><?php echo $value->judul; ?></h2>
                                </a>
                                <p><?php echo $value->deskripsi; ?></p>
                            </div>
                        </article>
                        <?php } ?>

                        <!-- <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url();?>assets/img/blog/single_blog_2.png" alt="">
                                <a href="<?php echo base_url();?>assets/#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url();?>assets/single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url();?>assets/img/blog/single_blog_3.png" alt="">
                                <a href="<?php echo base_url();?>assets/#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url();?>assets/single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url();?>assets/img/blog/single_blog_4.png" alt="">
                                <a href="<?php echo base_url();?>assets/#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url();?>assets/single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url();?>assets/img/blog/single_blog_5.png" alt="">
                                <a href="<?php echo base_url();?>assets/#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url();?>assets/single-blog.html">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="<?php echo base_url();?>assets/#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article> -->
                    </div>
                </div>
                
                       

                        <!-- <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="<?php echo base_url();?>assets/#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#" class="d-flex">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="<?php echo base_url();?>assets/img/post/post_1.png" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo base_url();?>assets/single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?php echo base_url();?>assets/img/post/post_2.png" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo base_url();?>assets/single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?php echo base_url();?>assets/img/post/post_3.png" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo base_url();?>assets/single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="<?php echo base_url();?>assets/img/post/post_4.png" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo base_url();?>assets/single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">project</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">love</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">technology</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">travel</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">restaurant</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">life style</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">design</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">illustration</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">
                                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">
                                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">
                                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">
                                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">
                                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>assets/#">
                                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <div class="form-wrap" id="mc_embed_signup">
                                <form target="_blank"
                                    action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                                    <button class="btn_2 btn-default text-uppercase">SUBSCRIBE</button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </aside> -->
                   
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <?php $this->load->view('layout/footer');?>