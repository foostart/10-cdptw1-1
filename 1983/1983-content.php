<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

  <div class="type-1983">
    <h3>And how we work</h3>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="../1983/images/about-us-1.jpg" alt="">
      </div>
      <div class="swiper-slide"><img src="../1983/images/about-us-2.jpg" alt="">
      </div>
      <div class="swiper-slide"><img src="../1983/images/about-us-3.jpg " alt=""></div>
      <div class="swiper-slide"><img src="../1983/images/about-us-4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../1983/images/about-us-5.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../1983/images/about-us-6.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../1983/images/about-us-7.jpg" alt=""></div>
      <div class="swiper-slide"><img src="../1983/images/about-us-8.jpg" alt=""></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>

