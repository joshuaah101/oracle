@extends('layout.master')

@section('title')
    Home
@endsection

@section('nav')
    <nav class="bg-gray-100 fixed text-gray-800 dark:bg-slate-900 dark:text-slate-300 px-4 py-2 flex justify-center w-full border-b border-gray-300 dark:border-b dark:border-slate-700" id="nav-menu">
        <div class="max-w-6xl w-full">
            <div class="flex items-center justify-between w-full">          
                <a href="#" class="">
                    logo
                </a>

                <div class="flex justify-between items-center md:space-x-10">
                    <div class="hidden md:flex md:space-x-4">
                        {{-- menu items --}}
                        <a href="#" class="uppercase text-xs font-bold text-gray-500 dark:text-slate-400 hover:text-gray-900 dark:hover:text-slate-100 transition duration-300 ease-in">Home</a>
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
    </nav>
@endsection

@section('header')
    <div class="mt-14 w-full h-64 border border-gray-300 dark:border-slate-700 bg-slate-900 dark:bg-gray-300 max-w-6xl">

    </div>
@endsection

@section('main')   
   <div class="max-w-6xl px-5 md:px-0 my-8 text-sm">
       <div class="border rounded px-5 py-2">
           <header class="text-gray-800 dark:text-slate-300 text-xl font-medium">
                Oracle of the day - Editorial note
            </header>
            <hr class="w-1/4 mt-2">
           <blockquote class="mt-2 flex flex-col space-y-2">
               <p class="italic font-normal">
                I welcome you all to this daily devotional, I pray you will be blessed as you take out quality time to read and digest the content. As the Lord liveth, fresh threads will be released daily.
                </p>
                <cite class="text-xs font-semibold">
                    Dr. Tunde Jesusina
                </cite>
           </blockquote>
       </div>
       
       <div class="mt-5">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribusLorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi dolorum vero sequi natus odio sed optio iste provident impedit ipsum est necessitatibus esse recusandae neque porro ipsam fugit doloribus
       </div>
   </div>   
@endsection

@section('footer')
<div class="max-w-6xl fixed z-10 w-full flex flex-row justify-between bottom-0 border-t border-gray-300 dark:border-t dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 bg-gray-100 text-gray-800 py-3 px-2 font-semibold">
    <div class="text-xs">
        Oracle of the day | &copy; {{ date('Y') }}
    </div>

    <div class="text-xs flex space-x-5 items-center">
        <a href="#" class="">
            <img src="{{ asset('storage/images/svg/facebook.svg') }}" alt="follow us on " class="">
        </a>
        <a href="#" class="">
            <img src="{{ asset('storage/images/svg/instagram.svg') }}" alt="follow us on " class="">
        </a>
        <a href="#" class="">
            <img src="{{ asset('storage/images/svg/twitter.svg') }}" alt="follow us on " class="">
        </a>
    </div>

    <a id="scroll-up" href="#" class="hidden absolute bottom-24 right-1 z-10 text-gray-800 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-300 dark:hover:text-gray-800 focus:outline-none ring-2 ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 transition duration-300 ease-in">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
    </a>
</div>
@endsection