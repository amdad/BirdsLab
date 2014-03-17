<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
define('COCKPIT_ADMIN', 1);

date_default_timezone_set('UTC');

require(__DIR__.'/bootstrap.php');

$cockpit->on("after", function() use($cockpit) {

    switch ($cockpit->response->status) {
        case 500:
        case 404:
            $cockpit->response->body = $cockpit->view("cockpit:views/errors/{$cockpit->response->status}.php");
            break;
    }
});

$cockpit->trigger("admin.init")->run();