@extends('layouts.app')
@section('content')
<div>
<h1>projects</h1>

@foreach ($projects as $project)
<li>{{$project->title}}</li>
@endforeach
</div>
@endsection

