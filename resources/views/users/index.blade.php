@extends('layouts.app')

@section('content')
    @include('users.users', ['users' => $users])
@endsection

{!! $users->render() !!}
