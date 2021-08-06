<?php

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->config('config.ini');
$f3->config('routes.ini');

/*$app->route('GET /',
        function(){
            echo 'Bienvenidos';
        }
);
*/
/*
$app->route('GET /',
        function(){
            echo 'Acerca de este proyecto...';
        }
);
*/
/*
$f3->route('GET /brew/@count',
    function($f3) {
        echo $f3->get('PARAMS.count').' bottles of beer on the wall.';
    }
);
*/
$f3->run();