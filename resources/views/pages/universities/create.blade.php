@extends('layouts.main')
@section('title', 'Add university')
@section('content')
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Information about the new university</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{route('universities.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name"  value="{{ old('name') }}"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                    <input type="text" name="country"  value="{{ old('count') }}"  id="country"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
                                    <input type="date" name="deadline" value="{{ old('deadline') }}" id="deadline"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="count" class="block text-sm font-medium text-gray-700">Number of students</label>
                                    <input type="number" value="{{ old('count') }}" name="count" id="count" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-700">Departments</legend>
                                        <div class="mt-4 space-y-4">
                                            @foreach($departments as $department)
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="{{$department->code}}" {{ old($department->code) == 'on' ? "checked" : "" }}  name="{{$department->code}}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label for="{{$department->code}}" class="font-medium text-gray-700">{{$department->code}} {{$department->name}}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="start" class="block text-sm font-medium text-gray-700" >Start</label>
                                    <input type="date" name="start" id="start" value="{{ old('start') }}"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="information" class="block text-sm font-medium text-gray-700">
                                        Information about university
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="information"  required name="information" rows="9" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" >
                                            {{ old('information') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="cover_image" class="block mb-2 text-sm font-medium text-gray-900 ">
                                        Cover Image
                                    </label>
                                    <input name="cover_image" type="file" id="cover_image"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                                    @error('cover_image')
                                    <p class="text-sm text-red-500"> {{ $message }} </p>
                                    @enderror
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
