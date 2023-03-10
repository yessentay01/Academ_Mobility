@extends('layouts.main')
@section('title', 'Contacts')
@section('content')
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800">
            <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                    <h2 class="text-3xl font-bold mb-6">Contact us</h2>
                    <p class="text-gray-500 mb-6">
                       <b> Уважаемые студенты !</b> <br>


                        При объявлении набора на академическую мобильность в ВУЗ-Партнеры на любой семестр учебного года вам необходимо следовать дальнейшим инструкциям.
                        <br>


                        При прохождении конкурсной комиссии обучение в выбранном вами университетом - бесплатное <br>

                        Перелет, проживание, виза, медицинская страховка и личные расходы оплачиваются самим студентом.
                        <br>
                    </p>
                    <p class="text-gray-500 mb-2"><a target="_blank"  href="https://2gis.kz/almaty/firm/9429940000793107?m=76.909876%2C43.235296%2F16.75">
                            <span> Манаса 34/1</span>
                        </a></p>
                    <p class="text-gray-500 mb-2"><a href="mailto: int@iitu.edu.kz">int@iitu.edu.kz</a></p>
                </div>
                <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                    <form>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                                   placeholder="Name">
                        </div>
                        <div class="form-group mb-6">
                            <input type="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                                   placeholder="Email address">
                        </div>
                        <div class="form-group mb-6">
            <textarea class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Send</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->

@endsection
