<?php

Route::get('/', 'ThemeTestController@index');
Route::get('themes/{name}', 'ThemeTestController@theme');

Route::get('themes/{name}/{section}/{part}', 'ThemeTestController@part');

// Route::get('assets/{one}/{two}/{three?}/{four?}', function ($one, $two, $three = null, $four = null) {

//     $path = '';
//     if (! is_null($four)) {
//         $path = '/' . $four;
//     }
//     if (! is_null($three)) {
//         $path = '/' . $three . $path;
//     }
    
//     $file = storage_path('app/themes/' . config('theme.id') . '/assets/' . $one . '/' . $two . $path);
//     $filedata = new \SplFileObject($file);
//     $response = Response::make(
//             File::get($file),
//             200
//         );
//     $response->header('Content-Type', 'text/'.$filedata->getExtension());
//     return $response;
// });
