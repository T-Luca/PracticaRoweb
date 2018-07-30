@extends('layouts.table')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach()
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Task <a href="{{ route('tasks.index') }}" class="label label-primary pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $task->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Status</label>
                            <div class="col-sm-10">
                                <textarea name="status" id="status" class="form-control">{{ $task->status }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >User ID</label>
                            <div class="col-sm-10">
                                <textarea name="user_id" id="user_id" class="form-control">{{ $task->user_id }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Assign</label>
                            <div class="col-sm-10">
                                <textarea name="assign" id="assign" class="form-control">{{ $task->assign }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="Update Task" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection