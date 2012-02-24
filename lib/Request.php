<?php

/**
 * Process the incoming HTTP request
 */
class Request {
    
    public $uri;
    public $supportedHttpMethods = array('GET', 'POST');
    public $defaultMethod = 'GET';
    public $requestData;
    public $resources = array();
    
    public function __construct($requestData = array()) {}
    public function loadResource() {}
    
}
