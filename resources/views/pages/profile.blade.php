@extends('layouts.main')
@section('title', 'Profile')
@section('content')
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Profile Information</h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Update your account's profile information and email address.</p>
            </div>
            <div class="px-4 sm:px-0"></div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form>
                <div class="px-4 py-5 bg-white sm:p-6 shadow dark:bg-gray-900 dark:text-gray-100 sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <input type="file" class="hidden">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-400" for="photo">
                                <span>Photo</span>
                            </label>
                            <div class="mt-2">
                                <img src="{{$user['profile_photo_path']}}" alt="{{$user['name']}}" class="rounded-full h-20 w-20 object-cover">
                            </div>
{{--                            <div class="mt-2" style="display: none;">--}}
{{--                                <span class="block rounded-full w-20 h-20" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(&quot;null&quot;);"></span>--}}
{{--                            </div>--}}
                            <input type="file" id="photo"  name="photo" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition dark:bg-gray-600 dark:border-gray-600 dark:text-white mt-2 mr-2" />
                            <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition dark:bg-gray-600 dark:border-gray-600 dark:text-white mt-2">Remove Photo</button>
                            <div class="mt-2" style="display: none;">
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-400" for="name">
                                <span>Name</span>
                            </label>
                            <input class="bg-white  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="name" value="{{$user['name']}}" type="text" autocomplete="name">
                            <div class="mt-2" style="display: none;">>
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-400" for="email">
                                <span>Email</span>
                            </label>
                            <input class="bg-white  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="email" type="email" disabled="" value="{{$user['email']}}">
                            <div class="mt-2" style="display: none;">
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md dark:bg-gray-700">
                    <div class="mr-3">
                        <div class="text-sm text-gray-600 dark:text-gray-300" style="display: none;">Сохранено.</div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" fdprocessedid="b7vo8h">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="sm:block hidden"><div class="py-8"><div class="border-t border-gray-200 dark:border-gray-700"></div></div></div>

    <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
        <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Update Password</h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Ensure your account is using a long, random password to stay secure.</p>
            </div>
            <div class="px-4 sm:px-0"></div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form>
                <div class="px-4 py-5 bg-white sm:p-6 shadow dark:bg-gray-900 dark:text-gray-100 sm:rounded-tl-md sm:rounded-tr-md">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-400" for="password">
                                <span>New Password</span>
                            </label>
                            <input class="bg-white  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="password" type="password" autocomplete="new-password" >
                            <div class="mt-2" style="display: none;">
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-400" for="password_confirmation">
                                <span>Confirm Password</span>
                            </label>
                            <input class="bg-white  border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500" id="password_confirmation" type="password" autocomplete="new-password">
                            <div class="mt-2" style="display: none;">
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md dark:bg-gray-700">
                    <div class="mr-3">
                        <div class="text-sm text-gray-600 dark:text-gray-300" style="display: none;">Saved.</div>
                    </div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150" fdprocessedid="qt9cq">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
