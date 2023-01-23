@extends('layouts.main')
@section('title', 'Universities')
@section('content')
    <a href="{{route('universities.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add university</a>

@endsection
