<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);
    // dd($ideas);

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});
Route::post('/ideas', function (Request $request) {
    $idea = $request->input('idea');
    session()->push('ideas', $idea);

    return redirect('/');
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
