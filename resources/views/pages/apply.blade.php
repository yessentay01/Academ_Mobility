@extends('layouts.main')
@section('title', 'Apply for academic mobility')
@section('content')
    <form action="#" method="#">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
{{--                    <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>--}}
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0 ">
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Full name in Russian *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="fullname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Full name in English *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="fullname2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Phone Number *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="phone" class="phone mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">IIN *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="iin" class=" iin mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Date of Birth *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="date" name="iin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
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
                                    <input type="text" name="passport_id" id="passport_id" class="pasport mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="issued_by" class="block text-sm font-medium text-gray-700">Passport issued by *</label>
                                    <input type="text" name="issued_by" id="issued_by" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration date *</label>
                                    <input type="date" name="expiration_date" id="expiration_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                </div>


                                <div class="col-span-6">
                                    <label for="passport_scan" class="block text-sm font-medium text-gray-700">Passport scan *</label>
                                    <input type="file" name="passport_scan" id="passport_scan" accept="application/pdf"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
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
                                    <option value="Bachelor 1 course">Bachelor 1 year</option>
                                    <option value="Bachelor 2 course">Bachelor 2 year</option>
                                    <option value="Bachelor 3 course">Bachelor 3 year</option>
                                    <option value="Bachelor 4 course">Bachelor 4 year</option>
                                    <option value="Master 1 course">Master 1 year</option>
                                    <option value="Master 2 course">Master 2 year</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="speciality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Speciality *</label>
                                <select id="speciality" name="speciality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option value="В057 Информационные технологии">В057 Информационные технологии</option>
                                    <option value="В058 Информационная безопасность">В058 Информационная безопасность</option>
                                    <option value="В059 Коммуникации и коммуникационные технологии">В059 Коммуникации и коммуникационные технологии</option>
                                    <option value="В042 Журналистика и репортерское дело">В042 Журналистика и репортерское дело</option>
                                    <option value="В044 Менеджмент и управление">В044 Менеджмент и управление</option>
                                    <option value="В046 Финансы, экономика, банковское и страховое дело">В046 Финансы, экономика, банковское и страховое дело</option>
                                    <option value="M094 Информационные технологии">M094 Информационные технологии</option>
                                    <option value="M096 Коммуникации и коммуникационные технологии">M096 Коммуникации и коммуникационные технологии</option>
                                    <option value="M072 Менеджмент и управление">M072 Менеджмент и управление</option>
                                </select>
                            </div>
                            <div class="col-span-6">
                                <label for="transcript" class="block text-sm font-medium text-gray-700">Transcript in English *</label>
                                <input type="file" name="transcript" id="transcript"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                            </div>
                            <div class="col-span-6">
                                <label for="motivation" class="block text-sm font-medium text-gray-700">Motivation letter *</label>
                                <input type="file" name="motivation" id="motivation"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                            </div>
                            <div class="col-span-6">
                                <label for="transcript" class="block text-sm font-medium text-gray-700">Confirmation of knowledge of English *</label>
                                <input type="file" name="transcript" id="transcript"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
                            </div>
                            <div class="col-span-6">
                                <label for="transcript" class="block text-sm font-medium text-gray-700">A letter of recommendation from the head of the department, or a teacher in the disciplines (at least an assistant professor) *</label>
                                <input type="file" name="transcript" id="transcript"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm" required>
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
