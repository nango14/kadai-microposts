@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_bookmarking($user->id))
        {!! Form::open(['route' => ['user.unbookmark', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unbookmark', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.bookmark', $user->id]]) !!}
            {!! Form::submit('Bookmark', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif
