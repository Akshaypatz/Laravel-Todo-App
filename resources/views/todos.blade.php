@extends('layout')
@section('content')



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




    <style type="text/css">
        .akshay {
            padding-top: 100px;
            margin: 0 auto;

        }
        .aku{
            max-height: 700px;
            overflow-y: auto;
        }
    </style>

    <div class="row">
      <div class="akshay">
        <div class="col-lg-6 col-lg-offset-3" >


            <form action="/create/todo" method="post">


               {{ csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">

            </form>

        </div>
      </div>
    </div>


    <hr>
<div class="container">
    <div class="aku">

    @foreach($todo as $todo)


        {{ $todo->todo }} <a href="{{ route('todo.delete',['id'=> $todo->id]) }}" class="btn btn-danger"> x </a>
        <a href="{{ route('todo.update',['id'=> $todo->id]) }}" class="btn btn-info btn-xs"> update </a>

        @if(!$todo->completed)
            <a href="{{ route('todos.completed',['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>

            <div class="checkbox">
              <label><input type="checkbox" value="">Mark as completed</label>
            </div>

          @else
            <span class="text-success">Mark As Completed</span>
            @endif

       <button class="btn btn-small btn-basic"> Created at {{ $todo->created_at }}</button>

        <hr>

    @endforeach
    </div>
</div>


    @stop