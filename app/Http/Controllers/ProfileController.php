<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileControllee extends Controller
{
    public function update()
    {
        return view('profile.update-profile');
    }
}
