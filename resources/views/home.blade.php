@extends('layouts.main')
@section('title', 'My applications')
@section('content')
    <a href="{{route('apply')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Apply for academic mobility
    </a>
    <br>
    @foreach($applies as $apply)
        <br>
        <div class="mt-5 md:col-span-2 md:mt-0 ">
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                    <ul>
                        <li class="text-gray-400">created at {{$apply->created_at}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Email: {{$apply->email}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Full name in Russian: {{$apply->full_name}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Full name in English: {{$apply->full_name2}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Phone Number: {{$apply->phone}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">IIN: {{$apply->iin}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Date of Birth: {{$apply->birth}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Passport ID: {{$apply->passport_id}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Passport issue date: {{$apply->issue}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Expiration date: {{$apply->expiration_date}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Course of Study: {{$apply->course}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">Speciality: {{$apply->speciality}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">University: {{$apply->university}}</li>
                        <li class=" text-md m-3 mb-5 font-medium text-gray-700">
                            <a target="_blank" class="bg-indigo-600 hover:bg-indigo-700  text-white py-2 px-4 rounded" href="{{url('storage/media/applies/' . $apply->passport_scan) }}">Passport scan</a>
                            <a target="_blank" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded" href="{{url('storage/media/applies/' . $apply->motivation) }}">Motivation letter</a>
                        </li>
                        <li class=" text-md m-3  mb-5 font-medium text-gray-700">
                            <a target="_blank" class="bg-indigo-600 hover:bg-indigo-700  text-white py-2 px-4 rounded" href="{{url('storage/media/applies/' . $apply->transcript) }}">Transcript in English</a>
                            <a target="_blank" class="bg-indigo-600 hover:bg-indigo-700  text-white py-2 px-4 rounded" href="{{url('storage/media/applies/' . $apply->confirmation) }}">Confirmation of knowledge of English</a>
                        </li>
                        <li class=" text-md m-3  mb-5 font-medium text-gray-700">
                            <a target="_blank" class="bg-indigo-600 hover:bg-indigo-700  text-white py-2 px-4 rounded" href="{{url('storage/media/applies/' . $apply->letter) }}">A letter of recommendation from the head of the department</a>
                        </li>

                    </ul>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md dark:bg-gray-700">
                    <div class="mr-3">
                        <div class="text-sm text-gray-600 dark:text-gray-300" style="display: none;">Сохранено.</div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" >Update</button>
                </div>
            </div>

        </div>
    @endforeach

@endsection
