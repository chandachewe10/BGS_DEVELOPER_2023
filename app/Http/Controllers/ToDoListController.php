<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;
Use Alert;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate Task and Date 
        $request->validate([
            'task' => 'required|string|max:255',
            'due_date' => 'required|date',
        ]);

        // Store Data Now 
ToDoList::create($request->all());
toast('Task Created Successfully','success');
return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($task)
    {
       
        //
        return view('edit-todo-list',[
            'task' => ToDoList::findOrFail($task)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$task)
    {

       
        //
         // Validate Task and Date 
         $request->validate([
            'task' => 'required|string|max:255',
            'due_date' => 'required|date',
        ]);

        // Store Data Now 
$todo = ToDoList::findOrFail($task);        
$todo->update($request->all());
toast('Task Updated Successfully','success');
return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($task)
    {

   $todo = ToDoList::findOrFail($task);
   if($todo){
    $todo->delete();
        // Destroy Task
toast('Task Deleted Successfully','success');
return redirect()->route('dashboard');
   }
    }
}
