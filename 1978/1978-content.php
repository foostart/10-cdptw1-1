<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1978">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="content-title text-center title_font-2">We are Organic Food</p>
                <div class="title_block title_font">    
                    <h3 class="title_block"><a class="title_text" href="#">Latest from the blog</a></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
           <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                      
                                        <a href="#">
                                            <img alt="" class="img-responsive" src="images/3-home-default.jpg" >
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
        </div>

         <div class="swiper-slide">
            <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                      
                                        <a href="#">
                                            <img alt="" class="img-responsive" src="images/4-home-default.jpg" >
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
        </div>

           <div class="swiper-slide">
            <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                      
                                        <a href="#">
                                            <img alt="" class="img-responsive" src="images/5-home-default.jpg" >
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
        </div>


         <div class="swiper-slide">
            <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                      
                                        <a href="#">
                                            <img alt="" class="img-responsive" src="images/6-home-default.jpg" >
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
        </div>

         <div class="swiper-slide">
            <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                      
                                        <a href="#">
                                            <img alt="" class="img-responsive" src="images/7-home-default.jpg" >
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
        </div>

         <div class="swiper-slide">
             <div class="item">
                            <div class="news_module_image_holder">
                                <div class="inline-block_relative">
                                    <div class="image_holder_wrap">
                                      
                                        <a href="#">
                                            <img alt="" class="img-responsive" src="images/8-home-default.jpg" >
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
        </div>

        </div>
        <!-- Add Pagination -->
       <div class="swiper-pagination"></div>
        <div class="contact">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

