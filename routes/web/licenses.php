<?php


# Licenses
Route::group([ 'prefix' => 'licenses' ], function () {

    Route::get('{licenseId}/clone', [ 'as' => 'clone/license', 'uses' => 'LicensesController@getClone' ]);
    Route::post('{licenseId}/clone', [ 'as' => 'clone/license', 'uses' => 'LicensesController@postCreate' ]);

    Route::get('{licenseId}/freecheckout', [
    'as' => 'licenses.freecheckout',
    'uses' => 'LicensesController@getFreeLicense'
    ]);
    Route::get('{licenseId}/checkout', [
    'as' => 'licenses.checkout',
    'uses' => 'LicensesController@getCheckout'
    ]);
    Route::post(
        '{licenseId}/checkout',
        [ 'as' => 'licenses.checkout', 'uses' => 'LicensesController@postCheckout' ]
    );
    Route::get('{licenseId}/checkin/{backto?}', [
    'as' => 'licenses.checkin',
    'uses' => 'LicensesController@getCheckin'
    ]);

    Route::post('{licenseId}/checkin/{backto?}', [
    'as' => 'licenses.checkin',
    'uses' => 'LicensesController@postCheckin'
    ]);

    Route::post(
    '{licenseId}/upload',
    [ 'as' => 'upload/license', 'uses' => 'LicensesController@postUpload' ]
    );
    Route::get(
    '{licenseId}/deletefile/{fileId}',
    [ 'as' => 'delete/licensefile', 'uses' => 'LicensesController@getDeleteFile' ]
    );
    Route::get(
    '{licenseId}/showfile/{fileId}',
    [ 'as' => 'show/licensefile', 'uses' => 'LicensesController@displayFile' ]
    );
});

Route::resource('licenses', 'LicensesController', [
    'parameters' => ['license' => 'license_id']
]);