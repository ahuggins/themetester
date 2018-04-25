<?php

Route::get('/', function () {

    $files = collect(\Storage::directories('themes/' . config('theme.id')))->filter(function ($dir) {
        return ! preg_match('/assets/', $dir);
    })->filter(function ($file) {
        return ! preg_match('/layouts/', $file);
    })->transform(function ($file) {
        return \Storage::allFiles($file);
    })->flatten()->transform(function ($file) {
        return new \SplFileObject(storage_path('app/'.$file));
    });
    
    return view('theme.list', ['files' => $files]);
});

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

Route::get('{section}/{part}', function($section, $part) {
    return view('theme::' . $section . '.' . $part);
});
