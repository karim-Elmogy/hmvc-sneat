<?php

Route::namespace('Core\Test\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Test ***#
    Route::resource('tests', 'TestController')->except([
       'store', 'update', 'destroy'
    ]);
    #*** END: Test ***#
});