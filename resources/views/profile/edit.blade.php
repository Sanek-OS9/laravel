@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование ролей</div>

                <div class="panel-body">

    <form action="{{ route('profile::save', ['user' => $user->id]) }}" method="POST">
        {{ csrf_field() }}
        @foreach($roles as $role)
            <input type="checkbox" name="role[{{ $role['name'] }}]" @if($user->hasRole($role['name'])) checked @endif /> {{ $role['description'] }} ( {{ $role['caption'] }} ~ {{ $role['name'] }})<br/>
        @endforeach
        <input type="submit" value="Сохранить" />
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection