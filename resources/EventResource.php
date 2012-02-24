<?php

class EventResource extends Resource
{
	public function __construct() {
		return '/events';
	}
	
	public function get($request) {
		$events = App::getRepository('Event')->getActiveEvents();
		$response = new Response($request);
		$response->addHeader('Content-type', 'application/json');
		$response->body = json_encode($events);
		return $response;
	}
}