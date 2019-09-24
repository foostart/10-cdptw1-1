<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Test</title>
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/773.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/773.less', './css/773.css');
        ?>

        <script src="js/jquery-2.1.4.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/xxx.js" ></script>

    </head>

    <body>
        <?php include './624-content.php'; ?>   
    </body>
</html>