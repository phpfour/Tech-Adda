<?php

// Application base path
define('APPPATH', '../');

// Include necessary path for class loading
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPPATH . '/lib'),
    realpath(APPPATH . '/lib/Sparrow'),
    realpath(APPPATH . '/includes'),
    realpath(APPPATH . '/resources'),
    get_include_path(),
)));

// Load app engine
include_once 'App.php';

// Initiate engine and run!
App::init(APPPATH . '/config/app.ini');

// handle request
$request = new Request($_REQUEST);
$resource = $request->loadResource();
$response = $resource->exec($request);
$response->output();