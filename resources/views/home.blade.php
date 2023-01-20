@extends('layouts.main')
@section('title', 'My applications')
@section('content')
    <a href="{{route('apply')}}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">
        Apply for academic mobility
    </a>

@endsection
