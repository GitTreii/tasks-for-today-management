<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $user = $model->first();

        return view('profile', [
            'user' => $user
        ]);
    }
}