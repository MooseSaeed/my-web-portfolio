<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="High quality Web Development articles" />
    <meta property="og:title" content="Hands On Tech Blog" />
    <meta property="og:description" content="High quality Web Development articles" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://" />
    <meta property="og:url" content="https://" />
    <title>Hands On Tech Blog</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('/override.css') }}" />
    <link rel="stylesheet" href="{{ asset('/cardhover.css') }}" />
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/darkcookies.js') }}" defer></script>

</head>

{{-- I guess no harm done here
Identifying the cookie value before body loads to prevent unidentified errors --}}

<?php

$cookie = $_COOKIE['isDarkModeOn'] ?? '';

?>

{{-- Echo dark or echo nothing to prevent flash of incorrect theme --}}

<body id="app" style="font-family: Open Sans, sans-serif" class="scroll-smooth {{ $cookie === 'false' ? '' : 'dark' }}">

    <div class="
    bg-option6
    dark:bg-white
    dark:bg-none
    ">

        <nav class="bg-option7 dark:bg-white dark:bg-none grid grid-rows-2 py-3 px-10 gap-4 justify-center items-center md:flex md:justify-between md:items-center">
            <div class="justify-self-center">
                <a href="/">
                    <Svglogodark />
                </a>
            </div>

            <div>
                <Switchdark theme="{{ $cookie === 'true' ? 'true' : 'false' }}" />
            </div>

            <div class="flex flex-col gap-2 md:block items-center justify-center">
                @auth
                <div class="override relative lg:inline-flex items-center bg-gradient-to-br from-green-200 to-blue-300 rounded-xl">
                    <x-admin-dropdown />
                    </Dropdown>
                </div>
                @endauth
                <a href="#newsletter">
                    <button href="#newsletter" class="demogardNewsletter transition duration-300 font-semibold
                            bg-gradient-to-r from-purple-600 to-blue-500
                            hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
                           text-white rounded-full ml-1 py-3 px-7 text-sm">
                        Subscribe for Updates
                    </button>
                </a>
            </div>
        </nav>
        <div class="pb-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-700 animate-pulse">
        </div>

        <section class="px-6 pb-6 pt-2">

            <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">

                {{ $slot }}
            </main>
            <div class="p-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-xl mt-16">
                <footer class="text-white dark:text-black flex flex-col justify-center items-center bg-option7 dark:bg-none dark:bg-white text-center py-16 px-10 rounded-xl">

                    <div>
                        <Svgnewsletterdark />
                    </div>

                    <h5 class="text-3xl">Subscribe to my newsletter and stay up to date.</h5>
                    <p class="text-sm mt-3">Promise to keep the inbox clean. No nonesense.</p>
                    <div id="newsletter" class="mt-10">
                        <div class="relative inline-block mx-auto bg-blue-100 rounded-full">
                            <form method="POST" action="/newsletter" class="sm:flex text-sm">
                                @csrf
                                <div class="py-1 px-3 flex items-center">
                                    <label for="email" class="inline-block">
                                        <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
                                    </label>
                                    <input id="email" name="email" type="text" placeholder="Your email address" class="bg-transparent text-center sm:text-left py-1 pl-3 md:py-2 md:pl-4 focus-within:outline-none outline-none border-none" />
                                    @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button href="#newsletter" class="demogardNewsletterbutton transition duration-300 font-semibold
                            bg-gradient-to-r from-purple-600 to-blue-500
                            hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
                           text-white rounded-full ml-1 py-1 px-6 text-sm">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
    </div>

    @if (session()->has('success'))
    <Flashmessage message="{{ session('success') }}" />
    @endif

</body>

</html>