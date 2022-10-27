<?php 

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



// dd($uri);
if( $uri === '/home') {
    require 'controllers/index.php';
}else if( $uri === '/signup') {
    require 'controllers/signup.php';
}else if( $uri === '/signin') {
    require 'controllers/signin.php';
}