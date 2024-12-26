<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    public function taskCreate(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'status' => 'nullable|string|max:255',
        ]);

        $task = Task::create([
            'title' => $validatedData['title'],
            'user_id' => $validatedData['user_id'],
            'status' => $validatedData['status'] ?? 'Pending',
        ]);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Task created successfully',
            'data' => $task,
        ]);
    }



    public function taskShow($userid)
    {
        $tasks = Task::where('user_id', $userid)
            ->orderBy('due_date', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $tasks,
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:Pending,Processing,Complete',
        ]);
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['error' => 'Task not found'], Response::HTTP_NOT_FOUND);
        }
        $task->status = $request->status;
        $task->save();
        return response()->json(['success' => true, 'message' => 'Task status updated successfully']);
    }

    public function delete($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['error' => 'Task not found'], Response::HTTP_NOT_FOUND);
        }
        $task->delete();

        return response()->json(['success' => true, 'message' => 'Task deleted successfully']);
    }
}
