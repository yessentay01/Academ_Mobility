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
                                        <div class="w-1/3 flex justify-between bg-blue-600 h-1 items-center relative">
                                            <span class="absolute left-0 bottom-5  text-md font-medium text-blue-700" style="left: -35px">Verification</span>
                                            <div class="absolute right-0 -mr-2">
                                                <div class="relative bg-white shadow-lg px-2 py-1 rounded mt-16 -mr-12">
                                                    <svg class="absolute top-0 -mt-1 w-full right-0 left-0" width="16px" height="8px" viewBox="0 0 16 8" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g id="Progress-Bars" transform="translate(-322.000000, -198.000000)" fill="#FFFFFF">
                                                                <g id="Group-4" transform="translate(310.000000, 198.000000)">
                                                                    <polygon id="Triangle" points="20 0 28 8 12 8"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="bg-blue-600 h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2 relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                            </div>
                                            <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                                <span class="absolute left-0 bottom-5  text-md font-medium text-gray-500">Send</span>
                                                <div class="h-3 w-3 bg-blue-600 rounded-full"></div>
                                            </div>
                                        </div>
                                        <div class="w-1/3 flex justify-end relative">
                                            <span class="absolute right-0 bottom-5  text-md font-medium text-gray-500">Send</span>
                                            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
                                        </div>
                                    </div>
                                </div>
                            </dh-component>
                            <!--Code Block for progress bar Starts-->
                    </div>
{{--                    <div>--}}
{{--                        <h2 class="sr-only">Steps</h2>--}}
{{--                        <div class="after:mt-4 after:block after:h-1 after:w-full after:rounded-lg after:bg-gray-200">--}}
{{--                            <ol class="grid grid-cols-4 text-sm font-medium text-gray-500">--}}
{{--                                <li class="relative text-left text-blue-600">--}}
{{--                                    <span class="absolute left-0 -bottom-[1.75rem] rounded-full bg-blue-600 text-white">--}}
{{--                                      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />--}}
{{--                                      </svg>--}}
{{--                                    </span>--}}
{{--                                    <span class="hidden sm:block"> Send </span>--}}
{{--                                    <svg class="ml-0 h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />--}}
{{--                                    </svg>--}}
{{--                                </li>--}}
{{--                                <li class="relative text-center">--}}
{{--                                    <span class="absolute left-1/4 -bottom-[1.75rem] -translate-x-1/2 rounded-full border-2 bg-white border-blue-600 text-white">--}}
{{--                                      <svg class="h-5 w-5" >--}}
{{--                                      </svg>--}}
{{--                                    </span>--}}
{{--                                    <span class="hidden sm:block absolute left-1/4 ">Verification</span>--}}
{{--                                    <svg class="mx-auto h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />--}}
{{--                                    </svg>--}}
{{--                                </li>--}}
{{--                                <li class="relative text-center">--}}
{{--                                    <span class="absolute right-1/4 -bottom-[1.75rem] -translate-x-1/2 rounded-full border-2 bg-white border-current-600 text-white">--}}
{{--                                      <svg class="h-5 w-5" >--}}
{{--                                      </svg>--}}
{{--                                    </span>--}}
{{--                                    <span class="hidden sm:block absolute right-1/4 ">Address</span>--}}
{{--                                    <svg class="mx-auto h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />--}}
{{--                                    </svg>--}}
{{--                                </li>--}}
{{--                                <li class="relative text-right">--}}
{{--                                    <span class="absolute  -bottom-[1.75rem] -translate-x-1/2 rounded-full border-2 bg-white border-current-600 text-white">--}}
{{--                                      <svg class="h-5 w-5" >--}}
{{--                                      </svg>--}}
{{--                                    </span>--}}
{{--                                    <span class="hidden sm:block">Address</span>--}}
{{--                                    <svg class="mx-auto h-6 w-6 sm:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />--}}
{{--                                    </svg>--}}
{{--                                </li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
