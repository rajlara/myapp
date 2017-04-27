@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Students</div>
                    <div class="panel-body">
                        {{ Form::open([
                                'method' => 'POST',
                                'role' => 'form',
                                'class' => 'form-horizontal',
                                'url' => route('student.store')
                            ])

                        }}
                        {{ csrf_field() }}
                        <div class="form-group form-body">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-8">
                                {!! Form::text(
                                      'name',
                                      '',
                                      ['class' => 'form-control','placeholder'=>'Name','required' => 'true']
                                    )
                                !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-8">
                                {!! Form::text(
                                        'email',
                                        '',
                                        ['class' => 'form-control', 'placeholder' => 'Email']
                                    )
                                 !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>

                            <div class="col-md-8">
                                {!! Form::text(
                                        'phone',
                                        '',
                                        ['class' => 'form-control','placeholder' => 'Phone']
                                    )
                                !!}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Create
                                </button>
                                <a href="{{ route('student.index') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
