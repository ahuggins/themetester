<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeTestController extends Controller
{
    public function index()
    {
        $files = collect(\Storage::directories('themes/'))->filter(function ($dir) {
            return ! preg_match('/assets/', $dir);
        })->filter(function ($file) {
            return ! preg_match('/layouts/', $file);
        })->transform(function ($file) {
            return new \SplFileInfo(storage_path('app/'.$file));
        });
            
        return view('theme.list', ['files' => $files]);
    }

    public function theme()
    {
        $files = collect(\Storage::directories('themes/' . config('theme.id')))->filter(function ($dir) {
            return ! preg_match('/assets/', $dir);
        })->filter(function ($file) {
            return ! preg_match('/layouts/', $file);
        })->transform(function ($file) {
            return \Storage::allFiles($file);
        })->flatten()->transform(function ($file) {
            return new \SplFileObject(storage_path('app/'.$file));
        });
            
        return view('theme.pages.list', ['files' => $files]);
    }
}
