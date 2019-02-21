<?php

/**
 * Admin Route
 */

$controller = 'AdminsController';
 
Route::get('/admin', $controller.'@index');