@extends('layouts.main')
@section('title', 'My applications')
@section('content')
    <head>
        <style>
            .stepper-wrapper {
                margin-top: auto;
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }
            .stepper-item {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                flex: 1;

            @media (max-width: 768px) {
                font-size: 12px;
            }
            }

            .stepper-item::before {
                position: absolute;
                content: "";
                border-bottom: 2px solid #ccc;
                width: 100%;
                top: 20px;
                left: -50%;
                z-index: 2;
            }

            .stepper-item::after {
                position: absolute;
                content: "";
                border-bottom: 2px solid #ccc;
                width: 100%;
                top: 20px;
                left: 50%;
                z-index: 2;
            }

            .stepper-item .step-counter {
                position: relative;
                z-index: 5;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #ccc;
                margin-bottom: 6px;
            }

            .stepper-item.active {
                font-weight: bold;
            }

            .stepper-item.completed .step-counter {
                background-color: #3B82F6;
            }

            .stepper-item.completed::after {
                position: absolute;
                content: "";
                border-bottom: 2px solid #3B82F6;
                width: 100%;
                top: 20px;
                left: 50%;
                z-index: 3;
            }

            .stepper-item:first-child::before {
                content: none;
            }
            .stepper-item:last-child::after {
                content: none;
            }
        </style>
    </head>
    <a href="{{route('apply')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Apply for academic mobility
    </a>
    <br>
    @foreach($applies as $apply)
        <br>
        <div class="mt-5 md:col-span-2 md:mt-0 ">
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter text-md  font-medium text-gray-700">1</div>
                            <div class="step-name text-md font-medium text-gray-700">First</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter text-md font-medium text-gray-700">2</div>
                            <div class="step-name text-md font-medium text-gray-700">Second</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter text-md font-medium text-gray-700">3</div>
                            <div class="step-name text-md  font-medium text-gray-700">Third</div>
                        </div>
                        <div class="stepper-item completed">
                            <div class="step-counter text-md  font-medium text-gray-700">4</div>
                            <div class="step-name text-md font-medium text-gray-700">Forth</div>
                        </div>
                    </div>

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
