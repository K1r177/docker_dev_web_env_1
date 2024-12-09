@extends('layouts.main')
@section('content')
    <h1>{{ $title ?? 'Default title from layout' }}</h1>
@endsection

@section('navbar')
    @parent
    <div class="container">
        Additional content
    </div>
@endsection