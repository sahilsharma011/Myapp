<?php





//Route::get('/', 'HomeController@home');
//
//Route::get('about', 'HomeController@about');
//
//Route::get('/login', 'LoginController@login');

    Route::get('/questions/{question}', 'QAController@show');


    Route::get('/', 'QAController@index')->middleware('auth');

    Route::get('/ask', 'QAController@ask');

    Route::get('/profile' , 'UserController@profile');





    Route::get('/login', 'UserController@loginview');

    Route::post('/signup', 'UserController@signup');

    Route::post('/signin', 'UserController@signin');


    Route::post('/questions/upload', 'QAController@upload');


    Route::post('/questions/', 'QAController@addQ');

    Route::post('/questions/{question}/answers', 'AnswersController@showans');


    Route::get('answers/{answer}/edit', 'AnswersController@edit');

    Route::patch('answers/{answer}', 'AnswersController@update');

    Route::get('/logout', 'UserController@logout');

