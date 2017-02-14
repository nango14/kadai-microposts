@extends('layouts.app')

@section('content')
<h1>Bookmarks</h1>
@if (count($bookmarkings) > 0)
<ul class"media-list">
@foreach ($bookmarkings as $bookmark)
    <li class="media">
        <div class="media-body">
            <div>
                <p>{!! nl2br(e($bookmark->content)) !!} <span class="text-muted">posted at {{ $bookmark->created_at }}</span></p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $bookmarkings->render() !!}
@endif

@endsection
