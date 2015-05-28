<?php

  Route::get('users', funtion()
  {
  $users = User::all();
  return View::make('users/index')->withUsers($users);
  
  });

