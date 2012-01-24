<?php

unset($_SESSION['user']);

$_SESSION['flash']['message'] = 'You are no longer logged in!';
header('Location: ' . ViewHelper::config('url.base') );