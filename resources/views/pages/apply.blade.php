@extends('layouts.main')
@section('title', 'Apply for academic mobility')
@section('content')
    <form action="{{route('apply.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0 ">
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Full name in Russian *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="full_name" value="{{old('full_name')}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Full name in English *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="full_name2"  value="{{old('full_name2')}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Phone Number *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="phone"  value="{{old('phone')}}" class="phone mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">IIN *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="iin"  value="{{old('iin')}}" class=" iin mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Date of Birth *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="date" name="birth"  value="{{old('birth')}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Identity card information</h3>
        {{--                    <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>--}}
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="passport_id" class="block text-sm font-medium text-gray-700">Passport ID *</label>
                                    <input type="text" name="passport_id"  value="{{old('passport_id')}}"  id="passport_id" class="pasport mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="issue" class="block text-sm font-medium text-gray-700">Passport issue date *</label>
                                    <input type="date" name="issue" id="issue" value="{{old('issue')}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration date *</label>
                                    <input type="date" name="expiration_date" value="{{old('expiration_date')}}" id="expiration_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>


                                <div class="col-span-6">
                                    <label for="passport_scan" class="block text-sm font-medium text-gray-700">Passport scan *</label>
                                    <input type="file" name="passport_scan" id="passport_scan" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                                    @error('passport_scan')
                                        <p class="text-sm text-red-500"> {{ $message }} </p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Education</h3>
        {{--                    <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>--}}
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course of Study *</label>
                                <select id="course" name="course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected="true" value="" disabled="disabled">Choose course</option>
                                    <option value="Bachelor 1 course" {{ old('course') == "Bachelor 1 course" ? "selected" : "" }} >Bachelor 1 year</option>
                                    <option value="Bachelor 2 course" {{ old('course') == "Bachelor 2 course" ? "selected" : "" }} >Bachelor 2 year</option>
                                    <option value="Bachelor 3 course" {{ old('course') == "Bachelor 3 course" ? "selected" : "" }} >Bachelor 3 year</option>
                                    <option value="Bachelor 4 course" {{ old('course') == "Bachelor 4 course" ? "selected" : "" }} >Bachelor 4 year</option>
                                    <option value="Master 1 course" {{ old('course') == "Master 1 course" ? "selected" : "" }} >Master 1 year</option>
                                    <option value="Master 2 course" {{ old('course') == "Master 2 course" ? "selected" : "" }} >Master 2 year</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="speciality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Speciality *</label>
                                <select id="speciality" name="speciality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected="true" value="" disabled="disabled">Choose speciality</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->code.' '.$department->name}}" {{ old('speciality') == $department->code.' '.$department->name ? "selected" : "" }}>{{$department->code.' '.$department->name}}</option>
                                    @endforeach
                                 </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="university" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select University *</label>
                                <select id="university" name="university" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option selected="true" value="" disabled="disabled">Choose University</option>
                                    @foreach($universities as $university)
                                        <option value="{{$university->name}}" {{ old('university') == $university->name ? "selected" : "" }}>{{$university->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-6">
                                <label for="transcript" class="block text-sm font-medium text-gray-700">Transcript in English *</label>
                                <input type="file" name="transcript"  id="transcript" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                                @error('transcript')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="motivation" class="block text-sm font-medium text-gray-700">Motivation letter *</label>
                                <input type="file" name="motivation"  id="motivation" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                                @error('motivation')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="transcript" class="block text-sm font-medium text-gray-700">Confirmation of knowledge of English *</label>
                                <input type="file" name="confirmation" id="confirmation" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                                @error('confirmation')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="transcript" class="block text-sm font-medium text-gray-700">A letter of recommendation from the head of the department, or a teacher in the disciplines (at least an assistant professor) *</label>
                                <input type="file" name="letter" id="letter" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"  class="mt-1 block   focus:border-indigo-500 shadow-sm sm:text-sm" required>
                                @error('letter')
                                <p class="text-sm text-red-500"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Additional information</h3>
                        {{--                    <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>--}}
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-1 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Responsible person (name of parent)</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="responsible_person" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Contacts of the responsible person</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text"  name="responsible_contact" class="phone mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-span-6">--}}
{{--                                <label for="vaccination" class="block text-sm font-medium text-gray-700">Vaccination passport *</label>--}}
{{--                                <input type="file" name="vaccination" id="vaccination"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>--}}
{{--                            </div>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow dark:bg-gray-700">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">Apply</button>
        </div>
    </form>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('+7 (999)-999-9999');
            $('.iin').inputmask('999999999999');
            $('.pasport').inputmask('N99999999');
        });
    </script>
@endsection
