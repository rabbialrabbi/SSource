<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pending()
    {
        try {
            $task = Task::where('is_completed', false)->get();

            return TaskResource::collection($task);

        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while fetching the task.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        try {
            $data = $request->validated();
            $data['is_completed'] = false;
            $task = Task::create($data);

            return TaskResource::make($task);

        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the task.'], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        try {
            $data = $request->validated();

            $task->update($data);

            return TaskResource::make($task);

        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while updating the task.'], 500);
        }
    }
}
