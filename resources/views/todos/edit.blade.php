@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Todos App</div>
                    <div class="card-body">
                        <form action="{{route('todos.update', $todo->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <h4 class="pb-3">Edit todo</h4>
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $todo->title}}" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea name="description" class="form-control" cols="5" rows="5">{{ $todo->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <select name="is_completed" class="form-control">
                                    <option disabled selected >Select option</option>
                                    <option  value="1">Completed</option>
                                    <option  value="0">In completed</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
