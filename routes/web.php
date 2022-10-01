<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('blogs');
});

Route::get('/blog/{blog}', function ($filename) {
        $path = __DIR__."/../resources/blog/$filename.html";
        if(!file_exists($path)){
//            dd("stop");
return redirect("/");
//            abort(403);
        }
    $blog = file_get_contents($path);
    return view('blog',
    [
        'blog'=>$blog
        ]
    );
});


