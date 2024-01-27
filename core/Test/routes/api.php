<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\Test\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** Ex: START: Test ***#
        // Route::apiResource('tests', 'TestController');
        #*** END: Test ***#
    });
});
