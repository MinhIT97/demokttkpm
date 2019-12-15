<?php
route::get('/','UserController@index')->name('index.user');

route::get('/adduser','UserController@adduser')->name('adduser');
route::post('/adduser','UserController@postadduser')->name('adduser');

// deleteuser
route::get('/deluser/{id}','UserController@deluser')->name('deluser');

// edit user
route::get('/edituser/{id}','UserController@edituser')->name('edituser');
route::post('/edituser/{id}','UserController@postedituser')->name('edituser');







?>
