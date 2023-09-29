@extends('layouts.main')
@section('title', $application->full_name)
@section('content')
    <div class="container">
        <div class="bg-white rounded p-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Apply Status: {{$status->status ?? 'Not reviewed'}} </h2>
            @if(isset($status->comment))
                <p class="text-md mt-3 font-medium leading-6 text-gray-900">
                    Comment: {{$status->comment}}
                </p>
            @endif
            <!-- Modal toggle -->
            <button class="block mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="default-modal">
                Change Status
            </button>
        </div>
        <!-- Main modal -->
        <div id="default-modal" style="    background: rgba(0,0,0,0.6);" data-modal-show="false" aria-hidden="false" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                            Change Status
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{route('application.status')}}"  method="POST">
                        @csrf
                        <div class="p-6 space-y-6">
                             <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option selected="true" value="Not reviewed" >Not reviewed</option>

                                <option value="Verified" >Verified</option>
                                <option value="Need changes" >Need changes</option>
                                <option value="Confirmed" >Confirmed</option>
                                <option value="Accept">Accept</option>
                                <option value="Decline">Decline</option>
                            </select>
                            <textarea required name="comment"  wrap="physical" id="comment" cols="30" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </textarea>
                            <input type="text" value="{{$application->id}}" readonly name="application_id" style="display: none">

                        </div>
                        <!-- Modal footer -->
                        <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-toggle="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalCenteredScrollableLabel">
                            Modal title
                        </h5>
                        <button type="button"
                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body relative p-4">
                        <p>This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.</p>
                        <br><br><br><br><br><br><br><br><br><br>
                        <p>Just like that.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded p-6 mt-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Personal information</h2>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Full name in Russian</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->full_name}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Full name in English </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->full_name2}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->phone}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">IIN</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->iin}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Date of Birth </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="date" name="full_name" value="{{$application->birth}}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
        </div>

        <div class="bg-white rounded p-6 mt-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Identity card information</h2>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Passport ID </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->passport_id}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Passport issue date </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="date" name="full_name" value="{{$application->issue}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Expiration date </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="date" name="full_name" value="{{$application->expiration_date}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 pb-3">Passport scan </label>
                <div class="mt-1">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $application->passport_scan) }}">Download</a>
                </div>
            </div>
        </div>
        <div class="bg-white rounded p-6 mt-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Education</h2>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Course of Study </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->course}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Speciality </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->speciality}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Group</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->group}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">ID</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->student_id}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">GPA </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->gpa}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">English Level </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->level}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Select University</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->university}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
        </div>
        <div class="bg-white rounded p-6 mt-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Education</h2>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 pb-2">Application to rector</label>
                <div class="mt-1 ">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $application->application_to_rector) }}">Download</a>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 pb-2">Transcript in English</label>
                <div class="mt-1 ">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $application->transcript) }}">Download</a>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 pb-2">Motivation letter</label>
                <div class="mt-1">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $application->motivation) }}">Download</a>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 pb-2">Confirmation of knowledge of English</label>
                <div class="mt-1 ">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $application->confirmation) }}">Download</a>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 pb-2">A letter of recommendation from the head of the department, or a teacher in the disciplines (at least an assistant professor) </label>
                <div class="mt-1">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-medium mt-2 py-2 px-4 rounded" target="_blank"  href="{{url('storage/media/applies/' . $application->letter) }}">Download</a>
                </div>
            </div>
        </div>
        <div class="bg-white rounded p-6 mt-6">
            <h2 class="text-lg font-medium leading-6 text-gray-900">Additional information</h2>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Responsible person (name of parent) </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->responsible_person ?? ''}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Contacts of the responsible person </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="full_name" value="{{$application->responsible_contact ?? ''}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
@endsection
