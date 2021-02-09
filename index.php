<?php
// This file is the entry point for the website

$database = require 'core/bootstrap.php';

// "load" creates a new instance of Router and requires the file where we "define" our routes so they can then be "defined". The "define" method needs an instance of Router to work. As long as "load" returns an instance of Router, we can then chain on "direct".
require Router::load('routes.php')

    ->direct(Request::uri());