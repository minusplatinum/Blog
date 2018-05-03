<?php
/**
 * Navigation Routes
 */
Route::get('/', 'Pages@index')->name('welcome');

Route::get('packages', 'PackageController@index')->name('packages');

Route::get('templates', 'TemplateController@index')->name('index');

Route::get('contact', 'Pages@contact')->name('contact');

Route::post('contact', 'Pages@contactForm')->name('contactForm');
/**
 * Package Routes
 */
Route::get('packages/{package}', 'PackageController@showPackage')->name('showPackage');
/**
 * Template Routes
 */
Route::get('templates/{template}', 'TemplateController@show')->name('show');

Route::get('templates/{template}/template', 'TemplateController@showDemo')->name('showDemo');
/**
 * Auth Routes
 */
Auth::routes();

Route::get('customer/select-package', 'HomeController@selectPackage')->name('SelectPackage');

Route::get('customer/select-template', 'HomeController@selectTemplate')->name('SelectTemplate');

Route::get('customer/order-confirm', 'HomeController@orderConfirm')->name('OrderConfirm');

Route::get('customer/customer-payment', 'HomeController@customerPayment')->name('CustomerPayment');

Route::patch('customer/select-package', 'HomeController@updatePackage')->name('UpdatePackage');

Route::patch('customer/select-template', 'HomeController@updateTemplate')->name('UpdateTemplate');

Route::patch('customer/order-confirm', 'HomeController@updateCustomer')->name('UpdateCustomer');

Route::get('home', 'HomeController@index')->name('home');

Route::patch('home', 'HomeController@updateProfile')->name('updateProfile');


