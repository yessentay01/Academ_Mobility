@extends('layouts.main')
@section('title', 'My applications')
@section('content')
    @if(count($applies) == 0 )
    <a href="{{route('apply')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Apply for academic mobility
    </a>
    @elseif($status->status == 'Need changes')
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
            Edit
        </a>
    @endif
    <br>
    @foreach($applies as $apply)
        <br>
        <div class="container">
            <div class="bg-white  rounded p-6">
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
                                <div class="w-1/3 flex justify-between h-1 items-center relative   {{ $status->status == 'Verified' || $status->status == 'Confirmed' || $status->status == 'Accept' || $status->status == 'Decline'  ? 'bg-blue-600' : ''  }}">
                                    @if($status->status == 'Need changes')
                                    <span class="absolute left-0 bottom-5  text-md font-medium text-yellow-500" style="left: -40px">Need changes</span>
                                    <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2 relative">
                                        <div class="h-3 w-3 bg-yellow-600 rounded-full z-1"></div>
                                    </div>
                                    @elseif($status->status == 'Verified' || $status->status == 'Confirmed' || $status->status == 'Accept' || $status->status == 'Decline' )
                                        <span class="absolute left-0 bottom-5  text-md font-medium text-blue-700" style="left: -17px">Verified</span>
                                        <div class="bg-blue-600 h-6 w-6 rounded-full shadow flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                        </div>
                                    @else
                                        <span class="absolute left-0 bottom-5  text-md font-medium text-gray-500" style="left: -35px">Verification</span>
                                        <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2 relative">
                                            <div class="h-3 w-3 bg-blue-600 rounded-full z-1"></div>
                                        </div>
                                    @endif
                                    @if($status->status == 'Confirmed' || $status->status == 'Accept' || $status->status == 'Decline' )
                                        <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                            <span class="absolute left-0 bottom-5  text-md font-medium text-blue-700" style="bottom: 30px;left: -25px;">Confirmed</span>
                                            <div class="bg-blue-600 h-6 w-6 rounded-full shadow flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M5 12l5 5l10 -10" />
                                                </svg>
                                            </div>
                                        </div>
                                        @elseif ($status->status == 'Verified')
                                        <div class="bg-white  flex items-center justify-center -mr-3 relative">
                                            <span class="absolute left-0 bottom-5  text-md font-medium text-gray-500" style="bottom: 30px;left: -25px;">Confirmed</span>
                                            <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2 relative">
                                                <div class="h-3 w-3 bg-blue-600 rounded-full z-1"></div>
                                            </div>
                                        </div>
                                        @else
                                            <div class="bg-white  flex items-center justify-center -mr-3 relative">
                                                <span class="absolute left-0 bottom-5  text-md font-medium text-gray-500" style="bottom: 30px;left: -25px;">Confirmed</span>
                                                <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2 relative">

                                                </div>
                                            </div>
                                        @endif
                                </div>
                                @if($status->status == 'Accept')
                                <div class="w-1/3 flex justify-end relative">
                                    <span class="absolute right-0 bottom-5  text-md font-medium text-blue-700" style="bottom: 30px;">Accept</span>
                                    <div class="bg-blue-600 h-6 w-6 rounded-full shadow flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M5 12l5 5l10 -10" />
                                        </svg>
                                    </div>
                                </div>
                                @elseif($status->status == 'Decline')
                                    <div class="w-1/3 flex justify-end relative">
                                        <span class="absolute right-0 bottom-5  text-md font-medium text-gray-500" style="bottom: 30px;">Decline</span>
                                        <div class="bg-red-600 h-6 w-6 rounded-full shadow flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M5 12l5 5l10 -10" />
                                            </svg>
                                        </div>
                                    </div>
                                @else
                                    <div class="w-1/3 flex justify-end relative">
                                        <span class="absolute right-0 bottom-5  text-md font-medium text-gray-500" style="bottom: 30px;">Step 4</span>
                                        <div class="bg-white h-6 w-6 rounded-full shadow"></div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </dh-component>
                </div>
                @if($status->status == 'Need changes')
                <div>
                    <br>
                    <br>
                    <p class="text-lg font-medium leading-6 text-gray-900">Comment: {{$status->comment}}</p>
                </div>
                @endif
            </div>
            <div class="bg-white rounded p-6 mt-6">
                <h2 class="text-lg font-medium leading-6 text-gray-900">Personal information</h2>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Full name in Russian</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->full_name}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Full name in English </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->full_name2}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->phone}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">IIN</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->iin}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Date of Birth </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="date" name="full_name" value="{{$apply->birth}}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded p-6 mt-6">
                <h2 class="text-lg font-medium leading-6 text-gray-900">Identity card information</h2>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Passport ID </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->passport_id}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Passport issue date </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="date" name="full_name" value="{{$apply->issue}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Expiration date </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="date" name="full_name" value="{{$apply->expiration_date}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 pb-3">Passport scan </label>
                    <div class="mt-1">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $apply->passport_scan) }}">Download</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded p-6 mt-6">
                <h2 class="text-lg font-medium leading-6 text-gray-900">Education</h2>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Course of Study </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->course}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Speciality </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->speciality}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Group</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->group}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">ID</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->student_id}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">GPA </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->gpa}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">English Level </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->level}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Select University</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->university}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded p-6 mt-6">
                <h2 class="text-lg font-medium leading-6 text-gray-900">Education</h2>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 pb-2">Application to rector</label>
                    <div class="mt-1 ">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $apply->application_to_rector) }}">Download</a>
                        <form action="{{route('home.rectorApplicationChanger')}}" method="POST" enctype="multipart/form-data" style="margin-top: 12px">
                            @csrf
                            <input type="file" name="application_to_rector"  id="application_to_rector" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                            @error('application_to_rector')
                            <p class="text-sm text-red-500"> {{ $message }} </p>
                            @enderror
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded">Update</button>
                        </form>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 pb-2">Transcript in English</label>
                    <div class="mt-1 ">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $apply->transcript) }}">Download</a>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 pb-2">Motivation letter</label>
                    <div class="mt-1">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $apply->motivation) }}">Download</a>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 pb-2">Confirmation of knowledge of English</label>
                    <div class="mt-1 ">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $apply->confirmation) }}">Download</a>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 pb-2">A letter of recommendation from the head of the department, or a teacher in the disciplines (at least an assistant professor) </label>
                    <div class="mt-1">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $apply->letter) }}">Download</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded p-6 mt-6">
                <h2 class="text-lg font-medium leading-6 text-gray-900">Additional information</h2>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Responsible person (name of parent) </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->responsible_person ?? ''}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Contacts of the responsible person </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="full_name" value="{{$apply->responsible_contact ?? ''}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <form method="POST" action="{{route('home.deleter')}}">
            @csrf
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow dark:bg-gray-700">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" style="background-color: darkred !important;">Delete</button>
            </div>
        </form>
    @endforeach

@endsection
