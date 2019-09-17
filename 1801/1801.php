<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/type-1801.less', 'css/1801.css');
    
?>
<!DOCTYPE html>

<html lang='en'>
    <head>
        <title>module 1801</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/animate.css">
		<script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/owl.carousel.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/wow.js" ></script>
		<script src="js/1801.js"></script>
        <link href="css/1801.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>   
        <?php  $dir_block.include'1801-content.php'; ?>

    </body>
</html>