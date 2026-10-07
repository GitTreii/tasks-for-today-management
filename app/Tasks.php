<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->where('task_date', date('Y-m-d'))
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('home', $data);
    }

    public function list()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', $data);
    }
}