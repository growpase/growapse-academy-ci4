<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about-us', 'Home::about');
$routes->get('/contact-us', 'Home::contact');
$routes->get('/our-courses', 'Home::courses');
$routes->get('/digital-marketing-internship', 'Home::digitalmarketinginternship');
$routes->get('/full-stack-development-internship' ,'Home::fullstackdevelopmentinternship');

$routes->post('/enquiry' ,'Home::submitForm');

///$routes->get('/enquiries', 'EnquiryController::index');
//$routes->post('/enquiries/submit', 'EnquiryController::submit');
//$routes->get('/EnquiryModel', 'Home::EnquiryModel');


//footer
$routes->get('/web-design', 'Home::webdesign');
$routes->get('/web-development', 'Home::webdevelopment');
$routes->get('/product-management', 'Home::productmanagement');
$routes->get('/marketing', 'Home::marketing');
$routes->get('/graphics-design', 'Home::graphicsdesign');
$routes->get('/services', 'Home::services');
$routes->get('/terms-of-service', 'Home::termsofservice');
$routes->get('/privacy-policy', 'Home::privacypolicy');




 