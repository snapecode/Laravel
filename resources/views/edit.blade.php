@extends('users.scaffold')

@section('main')

    <h1>Edit User</h1>
    {{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('users.show', 'Cancel', $user->id, array('class' => 'btn')) }}
        </li>
    </ul>
    {{ Form::close() }}

    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
    @endif

@stop