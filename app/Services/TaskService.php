<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
    public function store($data, $userId)
    {
        Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $userId,
        ]);
    }
}
