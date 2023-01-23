@extends('layouts.main')
@section('title', 'Universities')
@section('content')

    <div>
        <a href="{{route('universities.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add university</a>

    </div>
    @if (session('success'))
        <div class="max-w-6xl mx-auto mt-8 bg-green-700 text-white p-3 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    <br>
    <br>
    <div class="flex flex-wrap -m-4">

        @foreach($universities as $university)
            <a href="#!" class="xl:w-1/4 md:w-1/2 p-4 overflow-hidden" style="height: 400px">
                <div class="bg-gray-100 p-6 rounded-lg h-full">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{$university->country}}</h3>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{$university->name}}</h2>
                    <p class="leading-relaxed text-base" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$university->information}}</p>
                </div>
            </a>
        @endforeach
    </div>

@endsection
