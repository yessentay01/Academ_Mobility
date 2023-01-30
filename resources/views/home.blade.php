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
                    <div class="h-full w-full pt-12 pb-3">
                            <dh-component>
                                <div class="w-full mx-auto">
                                    <div class="bg-gray-200 h-1 flex items-center justify-between">
                                        <div class="w-1/3 bg-blue-600 h-1 flex items-center relative">
                                            <span class="absolute left-0 bottom-5  text-md font-medium text-blue-700">Send</span>
                                            <div class="bg-blue-600 h-6 w-6 rounded-full shadow flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-1/3 flex justify-between h-1 items-center relative">
                                            <span class="absolute left-0 bottom-5  text-md font-medium text-gray-500" style="left: -35px">Verification</span>
                                            <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2 relative">
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                                    <path stroke="none" d="M0 0h24v24H0z" />--}}
{{--                                                    <path d="M5 12l5 5l10 -10" />--}}
{{--                                                </svg>--}}
                                                   <div class="h-3 w-3 bg-blue-600 rounded-full z-1"></div>
                                            </div>
                                            <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                                <span class="absolute left-0 bottom-5  text-md font-medium text-gray-500" style="bottom: 30px;left: -25px;">Confirmed</span>
{{--                                                <div class="h-3 w-3 bg-blue-600 rounded-full"></div>--}}
                                                <div class="bg-white h-6 w-6 rounded-full shadow"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/3 flex justify-end relative">
                                            <span class="absolute right-0 bottom-5  text-md font-medium text-gray-500" style="bottom: 30px;">Step 4</span>
                                            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
                                        </div>
                                    </div>
                                </div>
                            </dh-component>
                    </div>

                    <ul class="pt-9">
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
                        <li class="block text-md m-3 font-medium text-gray-700">Group: {{$apply->group}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">ID: {{$apply->student_id}}</li>
                        <li class="block text-md m-3 font-medium text-gray-700">English level: {{$apply->level}}</li>
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
