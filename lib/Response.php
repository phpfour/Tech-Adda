<?php

/**
 * Provides the data of the outgoing HTTP response
 */
class Response {
    
    const OK = 200;
    const CREATED = 201;
    const UNAUTHORIZED = 401;
    const NOTFOUND = 404;
    
    public $request;
    public $code = Response::OK;
    public $headers = array();
    public $body;
    
    public function __construct($request) {}
    public function addHeader($header, $value) {}
    public function output() {}

}