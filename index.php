<?php
// This file is the entry point for the website as set in .htaccess. This file would go in /public in production for security.

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

// "load" creates a new instance of Router and requires the file where we define (->get or ->post) our routes. The define methods (get & post) need an instance of Router to work. As long as "load" returns an instance of Router, we can then chain on "direct".
Router::load('app/routes.php')

    ->direct(Request::uri(), Request::method());