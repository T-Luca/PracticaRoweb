@extends('layouts.table')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-success" href="{{ route('home') }}"> Home</a>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('tasks.add') }}"> Add Task</a>
                    </div>
                </div>
            </div>
            <!-- Table content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tasks Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th style="width: 190px">Status</th>
                                <th>User ID</th>
                                <th>Assign</th>
                                <th style="width: 100px">Action</th>
                            </tr>

                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }} </td>
                                    <td>{{ $task->name }} </td>
                                    <td>{{ $task->description }} </td>

                                    @if ( $task->status  <= 30)
                                        <td><div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-striped" role="progressbar" data-transitiongoal="{{ $task->status }}"></div>
                                            </div>
                                        </td>
                                    @elseif ($task->status <= 55)
                                        <td><div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="{{ $task->status }}"></div>
                                            </div>
                                        </td>
                                    @elseif ($task->status <= 70)
                                        <td><div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="{{ $task->status }}"></div>
                                            </div>
                                        </td>
                                    @else ($task->status >=90)
                                        <td><div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="{{ $task->status }}"></div>
                                            </div>
                                        </td>
                                    @endif

                                    <td>{{ $task->user_id }} </td>
                                    <td>{{ $task->assign }} </td>
                                    <td>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="label label-warning">Edit</a>
                                        <a href="{{ route('tasks.delete', $task->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </section>
        </div>
    </div>
@endsection