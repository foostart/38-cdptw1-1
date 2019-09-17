<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <span>Total Sessions</span>
                <h3>231,809</h3>
                <div id="chartContainer1"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <span>Total Sessions</span>
                <h3>231,809</h3>
                <div id="chartContainer2"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <span>Total Sessions</span>
                <h3>231,809</h3>
                <div id="chartContainer3"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <span>Total Sessions</span>
                <h3>231,809</h3>
                <div id="chartContainer4"></div>
            </div>
        </div>
    </div>
</div>