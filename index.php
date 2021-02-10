<?php
// This file is the entry point for the website as set in .htaccess

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// "load" creates a new instance of Router and requires the file where we define (->get or ->post) our routes. The define methods (get & post) need an instance of Router to work. As long as "load" returns an instance of Router, we can then chain on "direct".
Router::load('routes.php')

    ->direct(Request::uri(), Request::method());