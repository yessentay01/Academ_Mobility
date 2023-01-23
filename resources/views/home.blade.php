@extends('layouts.main')
@section('title', 'My applications')
@section('content')
    <a href="{{route('apply')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Apply for academic mobility
    </a>

@endsection
