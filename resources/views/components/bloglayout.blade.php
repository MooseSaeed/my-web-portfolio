<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Hight quality Web Development knowledge source. Most probably you will find what you're looking for" />
    <meta property="og:title" content="iSaidCode! Blog" />
    <meta property="og:description"
        content="Hight quality Web Development knowledge source. Most probably you will find what you're looking for" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://i.imgur.com/MBWxgds.png" />
    <title>I Said Code! Blog</title>
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

<body id="app" style="font-family: Open Sans, sans-serif"
    class="scroll-smooth {{ $cookie === 'false' ? '' : 'dark' }}">

    <div class="
    bg-option6
    dark:bg-white
    dark:bg-none
    ">

        <nav
            class="bg-option7 dark:bg-white dark:bg-none grid grid-rows-2 py-3 px-10 justify-center md:flex md:justify-between md:items-center">
            <div class="justify-self-center">
                <a href="/">
                    <Svglogodark />
                </a>
            </div>

            <div class="flex items-center justify-center">
                <Switchdark theme="{{ $cookie === 'true' ? 'true' : 'false' }}" />
            </div>

            <div class="flex flex-col gap-2 md:block items-center justify-center">
                @auth
                    <div
                        class="override relative lg:inline-flex items-center bg-gradient-to-br from-green-200 to-blue-300 rounded-xl">

                        <x-admin-dropdown />

                        </Dropdown>

                    </div>
                @endauth
                <a href="#newsletter">
                    <button href="#newsletter"
                        class="demogardNewsletter transition duration-300 font-semibold
                            bg-gradient-to-r from-purple-600 to-blue-500
                            hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
                           text-white rounded-full ml-1 py-3 px-7 text-sm">
                        GET IN TOUCH
                    </button>
                </a>
            </div>
        </nav>
        <div class="pb-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-700 animate-pulse">
        </div>

        <section class="px-6 pb-6 pt-2">

            <main v-cloak class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">

                {{ $slot }}
            </main>
            <div class="p-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-xl mt-16">
                <footer
                    class="text-white dark:text-black flex flex-col justify-center items-center bg-option7 dark:bg-none dark:bg-white text-center py-16 px-10 rounded-xl">

                    <div>
                        <Svgnewsletterdark />
                    </div>

                    <h5 class="text-2xl sm:text-3xl">Subscribe to my newsletter and stay up to date.</h5>
                    <p class="text-sm mt-3">Promise to keep the inbox clean. No nonesense.</p>
                    <div id="newsletter" class="mt-10">
                        <div class="relative inline-block mx-auto bg-blue-100 rounded-full">
                            <form method="POST" action="/newsletter" class="sm:flex text-sm">
                                @csrf
                                <div class="py-1 px-3 flex items-center">
                                    <label for="email" class="inline-block">
                                        <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
                                    </label>
                                    <input id="email" name="email" type="text" placeholder="Your email address"
                                        class="bg-transparent text-center sm:text-left py-1 pl-3 md:py-2 md:pl-4 focus-within:outline-none outline-none border-none" />
                                    @error('email')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button href="#newsletter"
                                    class="demogardNewsletterbutton transition duration-300 font-semibold
                            bg-gradient-to-r from-purple-600 to-blue-500
                            hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
                           text-white rounded-full ml-1 py-1 px-6 text-sm mb-2 sm:mb-0">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col sd:flex-row gap-5 items-center justify-center">

                        <div class="flex flex-col sm:flex-row items-center justify-center">
                            <p class="mr-2 mb-2 sm:mb-0 text-sm xs:text-lg">Find me here</p>
                            <div class="flex flex-row gap-2">
                                <a href="https://twitter.com/Moose_Said" target="_blank">
                                    <img class="transition-transform hover:scale-125" width="40"
                                        src="/images/twitter.png" alt="Twitter icons created by Hight Quality Icons">
                                </a>
                                <a href="https://github.com/MooseSaeed" target="_blank">
                                    <img class="transition-transform hover:scale-125" width="40"
                                        src="/images/github.png" alt="github icons created by Hight Quality Icons">
                                </a>
                                <a href="https://dev.to/moose_said" target="_blank">
                                    <img class="transition-transform hover:scale-125" width="40" src="/images/dev.png"
                                        alt="devto icons created by Hight Quality Icons">
                                </a>
                            </div>
                        </div>
                        <div class="flex xs:flex-row flex-col items-center justify-center">
                            <p class="mr-2 mb-2 xs:mb-0 text-sm xs:text-lg">Or just fire me an E-Mail</p>
                            <a href="mailto:mostafasaid1994@gmail.com" target="_blank">
                                <img class="transition-transform hover:scale-125" width="40" src="/images/email.png"
                                    alt="email icons created by Hight Quality Icons">
                            </a>
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
