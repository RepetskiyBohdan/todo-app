@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Todos app</div>
                    <div class="card-body">
                        <h4 class="pb-1">All todo : {{count($todos)}} </h4>
                        <a href="{{route('todos.create')}}" class="btn btn-info mb-3">Create todo</a>
                        @if(count($todos) > 0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Completed</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <th>{{$todo->id}}</th>
                                <td>{{$todo->title}}</td>
                                <td>{{$todo->description}}</td>
                                <td>
                                    @if($todo->is_completed == 1)
                                        <button class="btn  btn-success">Completed</button>
                                    @else
                                        <button class="btn  btn-danger">In completed</button>
                                    @endif
                                </td>
                                <td class="d-flex justify-content-around">
                                    <a class="btn btn-success" href="{{route('todos.show', $todo->id)}}">Show</a>
                                    <a class="btn btn-primary" href="{{route('todos.edit', $todo->id)}}">Edit</a>
                                    <form action="{{route('todos.destroy', $todo->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <h4>No todos</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
