<?php

use Illuminate\Support\Facades\Route;

Route::get('changepassword123', function() {
    $user = App\User::where('email', 'user@user.com')->first();
    $user->password = Hash::make('123456');
    $user->save();
 
    echo 'Password changed successfully.';
});
