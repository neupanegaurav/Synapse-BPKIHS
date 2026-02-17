<?php
/**
 * Front Controller — Single entry point for the application.
 * All requests route through here.
 */

require_once __DIR__ . '/core/config.php';
require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Router.php';

// --- Define Routes ---
$router = new Router();

$router
    ->add('home',       'HomeController',     'index')
    ->add('events',     'EventController',    'index')
    ->add('sport',      'SportController',    'show')
    ->add('literary',   'PageController',     'literary')
    ->add('cultural',   'PageController',     'cultural')
    ->add('gallery',    'PageController',     'gallery')
    ->add('register',   'RegisterController', 'showForm')
    ->add('register-submit', 'RegisterController', 'store')
    ->add('admin',      'AdminController',    'loginForm')
    ->add('admin-login','AdminController',    'login')
    ->add('dashboard',  'AdminController',    'dashboard')
    ->add('post',       'PageController',     'post');

// --- Dispatch ---
$router->dispatch();