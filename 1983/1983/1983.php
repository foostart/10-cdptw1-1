<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1983.less', 'css/1983.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1983</title>
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/1983.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>        
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="../1983/js/jquery-2.1.4.min.js" ></script>
        <script src="../1983/js/swiper.min.js"></script>
        
    </head>
    <body> 
        <?php include '../1983/1983-content.php'; ?>
        <script src="../1983/js/1983.js"></script>
    </body>
</html>