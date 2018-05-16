{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.layoutf')

@section('title', '| Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    {{ Form::open(array('url' => 'registrar')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', 'Diego', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('cognom', 'cognom') }}
        {{ Form::text('cognom', 'Martinez', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('dni', 'DNI') }}
        {{ Form::text('dni', '47484339B', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('localitat', 'Localitat') }}
        {{ Form::text('localitat', 'GALERA', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('tel', 'Tel') }}
        {{ Form::text('tel', '977719343', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', 'diegolagalera_@hotmail.com', array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Registrate', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection
