<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1995">
    <div class="container">
        <section id="demos">
            <div class="row">
                <div class="large-12 columns">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="addon-title text-center">
                                <div class="line-wrap">
                                    <span class="left-line"></span>
                                    <h3 class="title">And how we work</h3>
                                    <span class="right-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-carousel">
                        <div class="item">
                            <img class="vc_single_image-img" src="images/about-us-1.jpg" alt="about-us-3" title="about-us-1">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-2.jpg" alt="about-us-3" title="about-us-2">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-3.jpg" alt="about-us-3" title="about-us-3">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-4.jpg" alt="about-us-3" title="about-us-4">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-5.jpg" alt="about-us-3" title="about-us-5">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-6.jpg" alt="about-us-3" title="about-us-6">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-7.jpg" alt="about-us-3" title="about-us-7">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-8.jpg" alt="about-us-3" title="about-us-8">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-1.jpg" alt="about-us-3" title="about-us-1">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-2.jpg" alt="about-us-3" title="about-us-2">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img " src="images/about-us-3.jpg" alt="about-us-3" title="about-us-3">
                        </div>
                        <div class="item">
                            <img class="vc_single_image-img" src="images/about-us-4.jpg" alt="about-us-3" title="about-us-4">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>