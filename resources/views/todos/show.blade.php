@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Todos app</div>
                    <div class="card-body">
                        <h4 class="pb-3">Show todo</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Completed</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>{{$todo->id}}</th>
                                        <td>{{$todo->title}}</td>
                                        <td>{{$todo->description}}</td>
                                        <td>
                                            @if($todo->is_completed == 1)
                                                <a class="btn  btn-success" href="">Completed</a>
                                            @else
                                                <a class="btn  btn-danger" href="">In completed</a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <a href="{{route('todos.index')}}" class="btn btn-lg btn-primary">All todos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
