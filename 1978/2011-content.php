<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-2011">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p class="content-title text-center title_font-2">We are Organic Food</p>
                <div class="title_block title_font">    
                    <h3 class="title_block"><a class="title_text" href="#">Latest from the blog</a></h3>
                </div>
            </div>
        </div>


        <section id="demos">
            <div class="row">
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="#">
                                            <img alt="Lorem ipsum dolor sit amet, consectetuer" class="img-responsive" src="images/8-home-default.jpg" width="370" height="250">
                                        </a>
                                    </div> 
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h3>
                                                <span class="smart-auth"><i class="fa fa-user"></i>Post by:  <span>FieldThemes</span></span>
                                                <span class="block_date_post"><i class="fa fa-calendar"></i>Aug  7, 2018</span>
                                                <span class="viewed"><i class="fa fa-eye"></i>3 Viewed</span>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium. At Nulla...
                                                </p>
                                            </div>
                                            <a href="#" class="r_more"><i class="fa fa-angle-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="#">
                                            <img alt="Lorem ipsum dolor sit amet, consectetuer" class="img-responsive" src="images/7-home-default.jpg" width="370" height="250">
                                        </a>
                                    </div> 
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h3>
                                                <span class="smart-auth"><i class="fa fa-user"></i>Post by:  <span>FieldThemes</span></span>
                                                <span class="block_date_post"><i class="fa fa-calendar"></i>Aug  7, 2018</span>
                                                <span class="viewed"><i class="fa fa-eye"></i>7 Viewed</span>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium. At Nulla...
                                                </p>
                                            </div>
                                            <a href="#" class="r_more"><i class="fa fa-angle-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="#">
                                            <img alt="Lorem ipsum dolor sit amet, consectetuer" class="img-responsive" src="images/6-home-default.jpg" width="370" height="250">
                                        </a>
                                    </div> 
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h3>
                                                <span class="smart-auth"><i class="fa fa-user"></i>Post by:  <span>FieldThemes</span></span>
                                                <span class="block_date_post"><i class="fa fa-calendar"></i>Aug  7, 2018</span>
                                                <span class="viewed"><i class="fa fa-eye"></i>4 Viewed</span>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium. At Nulla...
                                                </p>
                                            </div>
                                            <a href="#" class="r_more"><i class="fa fa-angle-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="#">
                                            <img alt="Lorem ipsum dolor sit amet, consectetuer" class="img-responsive" src="images/5-home-default.jpg" width="370" height="250">
                                        </a>
                                    </div> 
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h3>
                                                <span class="smart-auth"><i class="fa fa-user"></i>Post by:  <span>FieldThemes</span></span>
                                                <span class="block_date_post"><i class="fa fa-calendar"></i>Aug  7, 2018</span>
                                                <span class="viewed"><i class="fa fa-eye"></i>6 Viewed</span>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium. At Nulla...
                                                </p>
                                            </div>
                                            <a href="#" class="r_more"><i class="fa fa-angle-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="#">
                                            <img alt="Lorem ipsum dolor sit amet, consectetuer" class="img-responsive" src="images/4-home-default.jpg" width="370" height="250">
                                        </a>
                                    </div> 
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h3>
                                                <span class="smart-auth"><i class="fa fa-user"></i>Post by:  <span>FieldThemes</span></span>
                                                <span class="block_date_post"><i class="fa fa-calendar"></i>Aug  7, 2018</span>
                                                <span class="viewed"><i class="fa fa-eye"></i>1 Viewed</span>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium. At Nulla...
                                                </p>
                                            </div>
                                            <a href="#" class="r_more"><i class="fa fa-angle-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                        <a href="#">
                                            <img alt="Lorem ipsum dolor sit amet, consectetuer" class="img-responsive" src="images/3-home-default.jpg" width="370" height="250">
                                        </a>
                                    </div> 
                                    <div class="border_content">
                                        <div class="right_blog_home">
                                            <div class="content">
                                                <h3 class="sds_post_title"><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h3>
                                                <span class="smart-auth"><i class="fa fa-user"></i>Post by:  <span>FieldThemes</span></span>
                                                <span class="block_date_post"><i class="fa fa-calendar"></i>Aug  7, 2018</span>
                                                <span class="viewed"><i class="fa fa-eye"></i>1 Viewed</span>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium. At Nulla...
                                                </p>
                                            </div>
                                            <a href="#" class="r_more"><i class="fa fa-angle-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
