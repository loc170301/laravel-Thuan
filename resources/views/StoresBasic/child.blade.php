@extends('Storesbasic.app')
{{-- @extends('Storesbasic.newsession') --}}

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the child.</p>
@endsection

@section('content')
    <p>This is my body child</p>
@endsection