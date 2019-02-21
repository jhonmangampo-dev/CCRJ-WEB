<?php

/**
 * Admin Route
 */

$controller = 'AdminController';
 
Route::get('/admin', $controller.'@index');