<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1809">
    <section class="pt-5 pb-5 bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mt-0 mb-3 text-white">ABOUT US</h2>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-yellow" href="#">Home</a><span class="text-success"> / ABOUT US</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>