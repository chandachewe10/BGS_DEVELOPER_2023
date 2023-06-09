<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
                    
<!--ToDo List Component-->
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-black">
            <h3>UPDATE TASK</h3>
            <br>
<!-- Add Task-->
<form action="{{route('task.update',['task'=>$task->id])}}" method="post">
    @csrf
    @method('PUT')
          <div class="pb-2">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row align-items-center">
                    <!--Create Task-->
                    <input type="text" name="task" value="{{$task->task}}" class="@error('task') is-invalid @enderror form-control form-control-lg" 
                      placeholder="Add new...">
                      @error('task')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<!--End Creating Task-->



                   
                  </div>
                </div>
              </div>
            </div>

            <!-- Create Due Date--> 
<div class="form-group">
<label for="Due Date" >Due Date</label>
<input type="date" name="due_date" value="{{$task->due_date}}" class="@error('date') is-invalid @enderror form-control form-control-lg" 
>
</div>
@error('due_date')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<!--End creating task-->
<br>
<!--Update Button-->
<div>
                    <br>
                      <button type="submit" class="btn btn-primary">Update</button>
                      
                    </div>
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" >
</form>           
<!--Task List-->
            <table class="table text-black mb-0">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Task</th>
                  <th scope="col">Due Date</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php  

                $tasks = \App\Models\ToDoList::where('user_id',"=",auth()->user()->id)->get();

                @endphp
                <tr class="fw-normal">
                @forelse($tasks as $task ) 
                  <td class="align-middle">
                    <span>{{$task->id}}</span>
                  </td>
                  <td class="align-middle">
                    <span>{{$task->task}}</span>
                  </td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">{{date('d, F-Y',strtotime($task->due_date))}}</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="{{route('task.edit',['task' => $task->id])}}" data-mdb-toggle="tooltip" title="Edit"><i
                        class="fa fa-pencil fa-lg me-3"></i></a>

                        <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit"><i
                        class="fa fa-trash fa-lg text-warning"></i></button>
</form>

                   
                  </td>
                </tr>
               @empty
               <span>You have not added any ToDo Task(s) yet
               @endforelse
              </tbody>
            </table>


          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--ToDo List Component-->


            
</x-app-layout>
