<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Vulnerable SQL query
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $users = mysqli_query($conn, $sql);

        // Authentication logic...
    }
}
