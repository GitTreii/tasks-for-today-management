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
            ->where('is_archived', 0)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('home', $data);
    }

    public function list()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->where('is_archived', 0)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', $data);
    }

    public function new()
    {
        return view('tasks/new');
    }

    public function create()
    {
        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model = new TaskModel();

        $model->insert([
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date'),
            'is_archived' => 0,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $model = new TaskModel();

        $task = $model
            ->where('id', $id)
            ->where('is_archived', 0)
            ->first();

        if (! $task) {
            return redirect()->to('/tasks');
        }

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {
        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model = new TaskModel();

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $model = new TaskModel();

        $model->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to('/tasks');
    }
}