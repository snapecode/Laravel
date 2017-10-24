@extends('layouts.users')

@section('main')

    <h1>Add Information</h1>

    {{ Form::open(array('route' => 'users.store')) }}
    <ul>

        <li>
            {{ Form::label('name', 'NAME:*') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('province', 'PROVINCE:*') }}
            {{ Form::text('province') }}
        </li>

        <li>
            {{ Form::label('phone', 'TELEPHONE:*') }}
            {{ Form::text('phone') }}
        </li>

        <li>
            {{ Form::label('postalcode', 'POSTAL CODE:*') }}
            {{ Form::text('postalcode') }}
        </li>

        <li>
            {{ Form::label('salary', 'SALARY:*') }}
            {{ Form::text('salary') }}
        </li>

        <li>
            {{ Form::submit('Save', array('class' => 'btn')) }}
        </li>
    </ul>
    {{ Form::close() }}

    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
    @endif

@stop