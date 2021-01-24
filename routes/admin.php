<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'AdminController@dashboard')->name('index');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/heatmap', 'AdminController@heatmap')->name('heatmap');
Route::get('/translation',  'AdminController@translation')->name('translation');
Route::get('/push',  'AdminController@push')->name('push');

Route::post('/user_push',  'AdminController@user_push')->name('user_push');
Route::post('/driver_push',  'AdminController@driver_push')->name('driver_push');

Route::group(['as' => 'dispatcher.', 'prefix' => 'dispatcher'], function () {
	Route::get('/', 'DispatcherController@index')->name('index');
	Route::post('/', 'DispatcherController@store')->name('store');
    Route::get('/trips', 'DispatcherController@trips')->name('trips');
    Route::get('/cancelled', 'DispatcherController@cancelled')->name('cancelled');
	Route::get('/cancel', 'DispatcherController@cancel')->name('cancel');
	Route::get('/trips/{trip}/{provider}', 'DispatcherController@assign')->name('assign');
	Route::get('/users', 'DispatcherController@users')->name('users');
	Route::get('/providers', 'DispatcherController@providers')->name('providers');
});

Route::get('/zone/getCountry','Resource\ZoneResource@getCountry')->name('getcountry');
Route::get('/zone/getState','Resource\ZoneResource@getState')->name('getstate');
Route::get('/zone/getCity','Resource\ZoneResource@getCity')->name('getcity');

Route::resource('zone', 'Resource\ZoneResource');
Route::resource('user', 'Resource\UserResource');
Route::resource('dispatch-manager', 'Resource\DispatcherResource');
Route::resource('account-manager', 'Resource\AccountResource');
Route::resource('fleet', 'Resource\FleetResource');
Route::resource('provider', 'Resource\ProviderResource');
Route::resource('document', 'Resource\DocumentResource');
Route::resource('service', 'Resource\ServiceResource');
Route::resource('package', 'Resource\PackageResource');
Route::resource('promocode', 'Resource\PromocodeResource');

Route::get('promocodes/usage', 'PromocodeController@promocode_usage')->name('promocode.usage');

Route::group(['as' => 'provider.'], function () {
    Route::get('review/provider', 'AdminController@provider_review')->name('review');
    Route::get('provider/{id}/approve', 'Resource\ProviderResource@approve')->name('approve');
    Route::get('provider/{id}/disapprove', 'Resource\ProviderResource@disapprove')->name('disapprove');
    Route::get('provider/{id}/request', 'Resource\ProviderResource@request')->name('request');
    Route::get('provider/{id}/statement', 'Resource\ProviderResource@statement')->name('statement');
    Route::resource('provider/{provider}/document', 'Resource\ProviderDocumentResource');
    Route::delete('provider/{provider}/service/{document}', 'Resource\ProviderDocumentResource@service_destroy')->name('document.service');
});
Route::group(['as' => 'package.'], function () {
    Route::resource('package/{package}/service', 'Resource\PackageAssignResource');
    Route::delete('package/{package}/service/{service}', 'Resource\PackageAssignResource@service_destroy')->name('package.service');
});
Route::get('bank/{id}/approve', 'Resource\AdminBankResource@bank_approve')->name('bank.approve');
Route::resource('bank', 'Resource\AdminBankResource');
Route::resource('new_account', 'Resource\AdminBankResource@new_account');
Route::get('approved_account', 'Resource\AdminBankResource@approved_account');
Route::get('new_withdraw', 'Resource\AdminBankResource@new_withdraw');
Route::get('approved_withdraw', 'Resource\AdminBankResource@approved_withdraw');
Route::get('disapproved_withdraw', 'Resource\AdminBankResource@disapproved_withdraw');

Route::get('review', 'AdminController@user_review')->name('review');
Route::get('user/{id}/request', 'Resource\UserResource@request')->name('user.request');

Route::get('map', 'AdminController@map_index')->name('map.index');
Route::get('map/ajax', 'AdminController@map_ajax')->name('map.ajax');

Route::get('settings', 'AdminController@settings')->name('settings');
Route::get('f_settings', 'AdminController@f_settings')->name('f_settings');
Route::post('settings/store', 'AdminController@settings_store')->name('settings.store');
Route::get('settings/payment', 'AdminController@settings_payment')->name('settings.payment');
Route::post('settings/payment', 'AdminController@settings_payment_store')->name('settings.payment.store');
Route::get('settings/appsetting', 'AdminController@appsetting')->name('settings.appsetting');
Route::post('settings/appsetting', 'AdminController@appsetting_store')->name('settings.appsetting.store');


Route::get('profile', 'AdminController@profile')->name('profile');
Route::post('profile', 'AdminController@profile_update')->name('profile.update');

Route::get('password', 'AdminController@password')->name('password');
Route::post('password', 'AdminController@password_update')->name('password.update');

Route::get('payment', 'AdminController@payment')->name('payment');

// statements

Route::get('/meterhistory', 'TaximeterController@meterhistory')->name('ride.meterhistory');
Route::get('/statement', 'AdminController@statement')->name('ride.statement');
Route::get('/statement/provider', 'AdminController@statement_provider')->name('ride.statement.provider');
Route::get('/statement/today', 'AdminController@statement_today')->name('ride.statement.today');
Route::get('/statement/monthly', 'AdminController@statement_monthly')->name('ride.statement.monthly');
Route::get('/statement/yearly', 'AdminController@statement_yearly')->name('ride.statement.yearly');


Route::get('provider/{provider_id}/paid', 'AdminController@provider_paid')->name('provider.paid');

// Static Pages - Post updates to pages.update when adding new static pages.

Route::get('/help', 'AdminController@help')->name('help');
// Route::get('/send/push', 'AdminController@push')->name('push');
// Route::post('/send/push', 'AdminController@send_push')->name('send.push');
Route::get('/privacy', 'AdminController@privacy')->name('privacy');
Route::get('/terms', 'AdminController@terms')->name('terms');
Route::post('/pages', 'AdminController@pages')->name('pages.update');
Route::resource('requests', 'Resource\TripResource');
Route::get('scheduled', 'Resource\TripResource@scheduled')->name('requests.scheduled');


Route::get('/dispatch', function () {
    return view('admin.dispatch.index');
});

Route::get('/cancelled', function () {
    return view('admin.dispatch.cancelled');
});

Route::get('/ongoing', function () {
    return view('admin.dispatch.ongoing');
});

Route::get('/schedule', function () {
    return view('admin.dispatch.schedule');
});

Route::get('/add', function () {
    return view('admin.dispatch.add');
});

Route::get('/assign-provider', function () {
    return view('admin.dispatch.assign-provider');
});

Route::get('/dispute', function () {
    return view('admin.dispute.index');
});

Route::get('/dispute-create', function () {
    return view('admin.dispute.create');
});

Route::get('/dispute-edit', function () {
    return view('admin.dispute.edit');
});