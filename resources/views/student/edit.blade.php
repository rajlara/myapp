@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Student</div>
                    <div class="panel-body">
                      {{ Form::open([
                            'method' => 'PUT',
                            'role' => 'form',
                            'class' => 'form-horizontal',
                            'url' => route('student.update',['id' => $student->id])
                        ])
                      }}
                        <div class="form-group form-body">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-8">
                                {!! Form::text(
                                    'name',
                                    $student->name,
                                    ['class' => 'form-control']
                                )
                                 !!}
                            </div>
                        </div>
                        <div class="form-group form-body">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8">
                                {!! Form::text(
                                    'email',
                                    $student->email,
                                    ['class' => 'form-control']
                                )
                                 !!}
                            </div>
                        </div>
                        <div class="form-group form-body">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-8">
                                {!! Form::text(
                                    'phone',
                                    $student->phone,
                                    ['class' => 'form-control']
                                )
                                 !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                                <a href="{{ route('student.index') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
