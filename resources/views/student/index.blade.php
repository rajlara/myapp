@extends('layouts.app')

@section('content')
    <h1 align="center">Students</h1>

    <div class="row">
        <div class="flash-message">

            @if( Session::has( 'success' ))
                <div class="alert alert-success alert-dismissable">
                    {{ Session::get( 'success' ) }}
                    @elseif( Session::has( 'error' ))
                        {{ Session::get( 'error' ) }}
                    @endif
                </div>
        </div>
        <div class="col-md-2">

        </div>
        <a href="{{ route('student.create') }}">
            <div class="btn btn-success pull-left">Create</div>
        </a>
        <div class="col-md-8">

            <table class="table table-striped table-bordered table-hover" align="center">
                <thead>
                <tr>
                    <th> Name</th>
                    <th> Email Address</th>
                    <th> Phone Number</th>
                    <th width="13%"> Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($students)
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone  }}</td>
                            <td><a class="btn btn-primary" href="{{ route('student.edit',['id' => $student->id]) }}">Edit</a>
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['student.destroy', $student->id],
                                    'style'=>'display:inline'
                                    ])
                                 !!}
                                {!! Form::submit(
                                    'Delete',
                                     ['class' => 'btn btn-danger'])
                                 !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

