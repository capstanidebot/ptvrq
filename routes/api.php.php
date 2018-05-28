<?php

Route::get('/', function (\Illuminate\Http\Request $request) {
    $comment = $request->input('comment');
return 'OK';
});