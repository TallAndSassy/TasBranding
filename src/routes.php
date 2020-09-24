<?php

if (App::environment('local')) {
    Route::get('/tallandsassy/tasbranding/groks_branding', function () {
        return view('tassy::groks_branding/index');
    });
}
