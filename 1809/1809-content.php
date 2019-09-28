<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1809">
    <div class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <a class="logo" href="#">
                            RESIDENTIAL DESIGN
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="text" href="#">Home <span class="text-a"> / RESIDENTIAL DESIGN</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text">
        <h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Sed nemo quis consectetur praesentium minima quas hic est odio laboriosam,
            quam optio facere qui pariatur. Ratione, amet veritatis.
            Laboriosam, totam mollitia.
        </h1>
    </div>
</div>