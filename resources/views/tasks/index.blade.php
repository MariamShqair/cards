@extends('app')

@section('todo')

@foreach($tasks as $task)

<div class="form-check">
   
  <input class="form-check-input" type="checkbox" value="{{$task->id}}" id="defaultCheck1" onChange="this.form.submit()" {{ $task->active === 1 ? "checked" : "" }} >
   
  <label class="form-check-label {{ $task->active ===1 ? 'through':'' }}"  for="defaultCheck1">
    {{$task->task}}
  </label>
</div>

@endforeach

@endsection
@section('content')

    <!-- Bootstrap Boilerplate... -->

    
        <!-- Display Validation Errors -->
      

        <!-- New Task Form -->
        <form action="/store" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">To Do List</label>

                <div class="col-sm-6">
                    <input type="text" name="task" id="task" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>


    <!-- TODO: Current Tasks -->
@endsection