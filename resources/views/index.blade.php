@extends('layout.master')

@section('title')
    Home
@endsection

@section('nav')
    <nav class="bg-gray-100 fixed z-10 text-gray-800 dark:bg-slate-900 dark:text-slate-300 px-4 py-2 flex justify-center w-full border-b border-gray-300 dark:border-b dark:border-slate-700" id="nav-menu">
        <div class="max-w-6xl w-full">
            <div class="flex items-center justify-between w-full">          
                <a href="#" class="text-sm font-semibold ">
                    {{-- <img src="{{ asset('storage/images/png/oracle-logo.png') }}" alt="logo" class="h-10"> --}}
                    Oracle of the day
                </a>

                <div class="flex justify-between items-center md:space-x-10">
                    <div class="hidden md:flex md:space-x-4">
                        {{-- menu items --}}
                        <a href="#" class="{{ request()->is('/') ? 'text-black dark:text-white' : '' }} uppercase text-xs font-bold text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-slate-100 transition duration-300 ease-in">Home</a>
                        <a href="#" class="uppercase text-xs font-bold text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-slate-100 transition duration-300 ease-in">About</a>
                        <a href="#" class="uppercase text-xs font-bold text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-slate-100 transition duration-300 ease-in">Contact</a>
                        <a href="#" class="uppercase text-xs font-bold text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-slate-100 transition duration-300 ease-in">Login</a>
                    </div>


                    <button title="Toggle Dark Mode" id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 transition duration-300 ease-in">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" id="theme-toggle-light-icon" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg> --}}
                    </button>

                    <button class="sm:hidden dark:text-slate-500 dark:hover:text-gray-400 text-gray-300 hover:text-gray-400 transition duration-300 ease-in" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-12 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        {{-- scroll up control --}}
        <a id="scroll-up" href="#" class="hidden absolute top-[21rem] md:top-[32rem] right-3 z-10 text-gray-800 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-300 dark:hover:text-gray-800 focus:outline-none ring-2 ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2 transition duration-300 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </nav>
@endsection

@section('header')
    <div class="mt-14 w-full h-[30rem] bg-fixed bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(to bottom, rgba(53, 119, 40, 0.2) 80%, rgba(53, 119, 40, 0.2) 20%), url({{ asset('storage/images/jpg/bible-4.jpg') }})">
        <div class="relative top-28 sm:top-[18%] px-8 md:px-24">
            <div class="hidden header-caption absolute space-y-8 text-black dark:text-white">
                <div class="flex flex-col space-y-5">
                    <header class="text-2xl md:text-6xl font-semibold">
                        Oracle of the day!
                    </header>
                    <span class="text-xl md:text-3xl font-semibold">
                        ~ Daily Devotional
                    </span>
                </div>
                <div class="mt-8">
                    <blockquote class="flex flex-col space-y-5 max-w-6xl">
                        <p class="italic text-md font-bold">
                         I welcome you all to this daily devotional, I pray you will be blessed as you take out quality time to read and digest the content. As the Lord liveth, fresh threads will be released daily.
                         </p>
                         <cite class="text-sm font-bold">
                             Dr. Tunde Jesusina
                         </cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')   
   <main class="max-w-6xl px-3 md:px-0 mt-5 mb-12 text-sm w-full">
       <div class="py-2 space-y-5">
           <header class="text-gray-800 dark:text-slate-300 text-xl font-medium">
                Editorial note
                <hr class="w-1/4 mt-2">
            </header>
            <blockquote class="mt-2 flex flex-col space-y-2">
               <p class="italic font-normal">
                I welcome you all to this daily devotional, I pray you will be blessed as you take out quality time to read and digest the content. As the Lord liveth, fresh threads will be released daily.
                </p>
                <cite class="text-xs font-semibold">
                    Dr. Tunde Jesusina
                </cite>
            </blockquote>
       </div>

       <hr class="border-gray-300 dark:border-slate-800">
       
       <div class="mt-10 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
           <div class="grid col-span-3">
               <div class="">
                    <div class="bg-gray-300 text-gray-800 dark:bg-slate-800 dark:text-slate-200 rounded-md">
                        <figure class="flex flex-col sm:flex-row">
                            <div class="flex-none relative w-64">
                                <img src="{{ asset('storage/images/jpg/bible-2.jpg') }}" alt="Content-icon" class="absolute inset-0 w-full h-full object-cover rounded-tl-md rounded-bl-md">
                            </div>
                            <div class="p-8 space-y-4">
                                <header class="uppercase text-xl font-semibold">
                                    unbelievable answers to requests to enjoy
                                </header>
                                <div class="body space-y-3">
                                    <blockquote class="bg-gray-200 text-gray-600 dark:bg-slate-700 dark:text-slate-400 p-5 rounded">
                                        <p class="text-justify">
                                            "Then said the king unto her, what wilt thou, queen Esther? and what is thy request? it shall be even given thee to the half of the kingdom."
                                        </p>
                                        <figcaption class="italic text-justify mt-2">
                                            Esther 5:3
                                        </figcaption>
                                    </blockquote>
                                    <p class="body-content text-md text-justify">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed qui, quo id tenetur iste labore consequuntur ex impedit cumque dicta dolorem consequatur debitis tempore officiis in nisi? Sed, dolorem totam.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint sequi nihil saepe omnis facere quaerat, quae quia nulla non excepturi delectus laboriosam, aliquid velit provident voluptatem alias consequuntur accusantium! Fugit.
                                    </p>
                                </div>
                                <div class="footer flex justify-between">
                                    <div class="text-sm font-semibold">
                                        " Time posted
                                    </div>
                                    <div class="text-sm font-semibold">
                                        Reactions
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
               </div>
           </div>

           <div class="w-full h-full px-5 py-3 flex justify-center bg-gray-300 text-gray-800 dark:bg-slate-800 dark:text-slate-200 rounded">
                <div class="calendar">
                    <div class="month flex px-5 mt-4 space-x-5 justify-between text-center items-center">
                        <span class="prev cursor-pointer px-2 py-1 ring-1 ring-gray-800 hover:bg-gray-800 hover:text-gray-300 dark:ring-slate-400 rounded dark:hover:bg-slate-300 dark:hover:text-slate-800 transition duration-300 ease-in">&lt;</span>
                        <div class="date">
                        <h1 class="text-sm"></h1>
                        <p class="text-xs"></p>
                        </div>
                        <span class="next cursor-pointer px-2 py-1 ring-1 ring-gray-800 hover:bg-gray-800 hover:text-gray-300 dark:ring-slate-400 rounded dark:hover:bg-slate-300 dark:hover:text-slate-800 transition duration-300 ease-in">&gt;</span>
                    </div>
                    <div class="weekdays flex justify-center items-center space-x-2 py-3">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days flex flex-wrap items-center"></div>
                </div>
           </div>
       </div>
   </main>   
@endsection

@section('footer')
<div class="max-w-6xl w-full flex flex-row justify-between border-t border-gray-300 dark:border-t dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 bg-gray-100 text-gray-800 py-3 px-2 font-semibold">
    <div class="text-xs">
        Oracle of the day | &copy; {{ date('Y') }}
    </div>

    <div class="text-xs flex space-x-3 items-center">
        <a href="https://facebook.com/" class="">
            <img src="{{ asset('storage/images/svg/facebook.svg') }}" alt="follow us on " class="ring-2 h-6 ring-slate-900 px-2 py-1 hover:ring-0 dark:bg-gray-300 dark:hover:bg-gray-100 transition duration-300 ease-in-out rounded-md">
        </a>
        <a href="https://instagram.com/" class="">
            <img src="{{ asset('storage/images/svg/instagram.svg') }}" alt="follow us on " class="ring-2 h-6 ring-slate-900 px-2 py-1 hover:ring-0 dark:bg-gray-300 dark:hover:bg-gray-100 transition duration-300 ease-in-out rounded-md">
        </a>
        <a href="https://twitter.com/" class="">
            <img src="{{ asset('storage/images/svg/twitter.svg') }}" alt="follow us on " class="ring-2 h-6 ring-slate-900 px-2 py-1 hover:ring-0 dark:bg-gray-300 dark:hover:bg-gray-100 transition duration-300 ease-in-out rounded-md">
        </a>
    </div>
</div>
@endsection