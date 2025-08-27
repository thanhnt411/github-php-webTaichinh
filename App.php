<?php
class App {
    public function __construct() {

    }

    public function run() {
        $root = str_replace("/index.php","", $_SERVER["SCRIPT_FILENAME"]);
        $uri = $_SERVER["REQUEST_URI"];
        $app_folder = str_replace("/index.php","",$_SERVER["SCRIPT_NAME"]);
        $http_host = "http://" .$_SERVER["HTTP_HOST"] .$app_folder;
        $uri = str_replace($app_folder, '', $uri);
        $uri = ltrim($uri,'/');
        $uri = rtrim($uri,'/');
        $urls = explode("/", $uri);
        if (count($urls) == 0 || $urls[0] == "") {
            include $root.'/views/main.php';
        } else {
            $view = $root.'/views/'.$urls[0].'.php';
            if (file_exists($view)) {
                include $view;
            } else {
                include $root.'/views/404.php';
            }
        }

    }
}