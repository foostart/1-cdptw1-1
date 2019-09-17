<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

   <div class="type-1801">
      <div class="main-container">
         <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
               <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
               <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <!-- First slide -->
               <div class="item slide-1 text-left">
                  <div class="carousel-caption">
                     <p data-animation="animated fadeInUp">
                        Featured Project
                     </p>
                     <h3 data-animation="animated fadeInUp">
                        Green Interior
                     </h3>
                     <a href="contact.html" class="btn btn-primary btn-lg fadeInUp" data-animation="animated zoomIn">
                        Our Portfolio</a>
                  </div>
               </div>
               <!-- /.item -->
               <!-- Second slide -->
               <div class="item slide-2 text-left">
                  <div class="carousel-caption">
                     <p data-animation="animated fadeInUp">
                        Featured Project
                     </p>
                     <h3 data-animation="animated fadeInUp">
                        Green Interior
                     </h3>
                     <a href="#" class="btn btn-primary btn-lg fadeInUp" data-animation="animated zoomIn">Our Portfolio</a>
                  </div>
               </div>
               <!-- /.item -->
               <!-- Third slide -->
               <div class="item slide-3 text-left active">
                  <div class="carousel-caption">
                     <p data-animation="animated fadeInUp">
                        Featured Project
                     </p>
                     <h3 data-animation="animated fadeInUp">
                        Green Interior
                     </h3>
                     <a href="#" class="btn btn-primary btn-lg fadeInUp" data-animation="animated zoomIn">Our Portfolio</a>
                  </div>
               </div>
               <!-- /.item -->
            </div>
            <!-- /.carousel-inner -->
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
         <!-- /.carousel -->
      </div>
   </div>
