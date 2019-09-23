<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1185">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="admin-panel">
                    <div class="admin-title">
                        <div class="row">
                            <div class="col-md-6 col-sm-8 ">
                                <h2>
                                    Network Activities 
                                    <small>Graph title sub-title</small>
                                </h2>
                            </div>
                            <div class="col-md-6 col-sm-4 ">
                                <div class="show-calendar">
                                    <i class="fa fa-calendar"></i> <input type="text" id="datepicker" placeholder="Click view date">
                                </div>
                            </div>
                        </div>               
                    </div>
                    <div class="admin-content">
                        <div id="chartContainer5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>