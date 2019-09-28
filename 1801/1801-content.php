<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!-- Swiper -->
<div class="type-1801 swiper-container">
   <div class="swiper-wrapper">
      <div class="swiper-slide">
         <p data-animation="animated fadeInUp">
            Featured Project
         </p><br>
         <h3 data-animation="animated fadeInUp">
            Green Interior
         </h3><br>
         <a href="#" class="btn btn-primary btn-lg fadeInUp" data-animation="animated zoomIn">
            Our Portfolio
         </a>
      </div>
      <div class="swiper-slide">
      <p data-animation="animated fadeInUp">
            Featured Project
         </p><br>
         <h3 data-animation="animated fadeInUp">
            Green Interior
         </h3><br>
         <a href="#" class="btn btn-primary btn-lg fadeInUp" data-animation="animated zoomIn">
            Our Portfolio
         </a>
      </div>
      <div class="swiper-slide">
      <p data-animation="animated fadeInUp">
            Featured Project
         </p><br>
         <h3 data-animation="animated fadeInUp">
            Green Interior
         </h3><br>
         <a href="#" class="btn btn-primary btn-lg fadeInUp" data-animation="animated zoomIn">
            Our Portfolio
         </a>
      </div>

   </div>
   <!-- Add Pagination -->
   <div class="swiper-pagination"></div>
   <!-- Add Arrows -->
   <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>
</div>