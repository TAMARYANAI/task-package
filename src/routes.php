<?php
 Route::apiResource('tasks', 'Mypackage\TaskController');
 Route::get('tasks/test1', function ($e){
    dd('tasks/test');
 });
