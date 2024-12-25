<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function taskCreate(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id', // Ensure user_id is valid
            'status' => 'nullable|string|max:255',
        ]);

        $task = Task::create([
            'title' => $validatedData['title'],
            'user_id' => $validatedData['user_id'], // Use dynamic user_id
            'status' => $validatedData['status'] ?? 'Pending',
        ]);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Task created successfully',
            'data' => $task,
        ]);
    }



    public function taskShow(Request $request)
    {

        $tasks = Task::where('user_id', 2)
            ->orderBy('due_date', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $tasks,
        ]);
    }
}
