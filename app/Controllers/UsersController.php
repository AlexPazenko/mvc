<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

class UsersController
{
    // Show all users.
    public function showUsers()
    {
        $users = (new User)->read();
        View::generate('users.php', $users);
    }
}
