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
    $less->compileFile('less/type-11.less', 'css/type-11.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module 1187</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet"  />
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/css/type-11.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/canvasjs.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/chart-column.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/script-gauge.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/weather-icons.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/init-script.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/chart-column.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/jquery.jqGauges.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/excanvas.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/collapse-close.js" type="text/javascript"></script>
    </head>
    
 <?php  $dir_block.include'1187-content.php'; ?>
    </body>
</html>