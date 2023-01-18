
@extends('layouts.app')
@section('content')
<h1>Community</h1>
@stop

@foreach ($links as $link)
<li>{{$link->title}}</li>
@endforeach
{{$links->links()}}

<small>Contributed by: {{$link->creator->name}} {{$link->updated_at->diffForHumans()}}</small>