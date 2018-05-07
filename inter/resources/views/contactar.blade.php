{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.layoutf')

@section('title', '| Add User')
@section('content')

<div class='col-lg-4 col-lg-offset-4' style="margin-left:25%">

    <h1><i class='fa fa-wpforms'></i>Contactar</h1>
    <hr>

    {{ Form::open(array('url' => 'contactar')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('apellido', 'Apellido') }}
        {{ Form::text('apellido', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{Form::textarea('comentario',null,['class' =>'form-controller', 'placeholder'=>'Comentario'])}}</div>
    </div>



    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection
