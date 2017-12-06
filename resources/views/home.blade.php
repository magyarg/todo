@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="create-section">
                        <form action="{{ route('todo.create') }}" method="POST">
                            {{ csrf_field() }}
                            <h3>Add a new todo</h3>
                            <div class="col-md-10">
                                <input type="text" name="name" class="form-control" placeholder="Get wasted today...">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default btn-block">Go</button>
                            </div>
                        </form>
                    </div>

                    @foreach ($tasks as $task)
                        @include('components.task')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
