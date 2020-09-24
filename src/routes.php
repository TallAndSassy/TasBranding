<?php

if (App::environment('local')) {
    Route::get('/tallandsassy/tasbranding/groks_tasbranding', function () {
        return view('tassy::groks_tasbranding/index');
    });
}
