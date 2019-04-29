@extends('layouts.app')
@section('content')
<div>
<h1>Create a new Project</h1>

<form method="POST" action="/projects">
{{csrf_field()}}
    <div>
        <input type="text" name="title" placeholder="Title"> 
    </div>
    <div>
        <textarea name="description" placeholder="Description"></textarea>
    </div>

<button type='submit'>submit</button>
</form>
</div>
@endsection

