@extends('layouts.main')
@section('title', 'Apply for academic mobility')
@section('content')
    <div>
        <form action="#" method="POST">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Full name in Russian</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="fullname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Full name in English</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="fullname2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">IIN</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="iin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="date" name="iin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
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
                    <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="passport_id" class="block text-sm font-medium text-gray-700">Passport ID</label>
                                <input type="text" name="passport_id" id="passport_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="issued_by" class="block text-sm font-medium text-gray-700">Passport issued by</label>
                                <input type="text" name="issued_by" id="issued_by" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration date</label>
                                <input type="date" name="expiration_date" id="expiration_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>


                            <div class="col-span-6">
                                <label for="passport_scan" class="block text-sm font-medium text-gray-700">Passport scan</label>
                                <input type="file" name="passport_scan" id="passport_scan" accept="application/pdf"  class="mt-1 block  focus:border-indigo-500 shadow-sm sm:text-sm">
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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                    <p class="mt-1 text-sm text-gray-600">Decide which communications you'd like to receive and how.</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="#" method="POST">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <fieldset>
                                <legend class="sr-only">By Email</legend>
                                <div class="text-base font-medium text-gray-900" aria-hidden="true">By Email</div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="font-medium text-gray-700">Comments</label>
                                            <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                            <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="offers" class="font-medium text-gray-700">Offers</label>
                                            <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="contents text-base font-medium text-gray-900">Push Notifications</legend>
                                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">Everything</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Same as email</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">No push notifications</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </form>
    </div>

@endsection
