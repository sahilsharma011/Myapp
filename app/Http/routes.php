<?php





//Route::get('/', 'HomeController@home');
//
//Route::get('about', 'HomeController@about');
//
//Route::get('/login', 'LoginController@login');


Route::get('/questions/', 'QAController@index');

Route::post('/questions/upload', 'QAController@upload');

Route::get('/questions/{question}', 'QAController@show');

Route::post('/questions/', 'QAController@addQ');

Route::post('/questions/{question}/answers', 'AnswersController@showans');


Route::get('answers/{answer}/edit', 'AnswersController@edit');

Route::patch('answers/{answer}', 'AnswersController@update');


