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
    <link rel="stylesheet" href="/override.css" />
    <link rel="stylesheet" href="/cardhover.css" />
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>


<body id="app" style="font-family: Open Sans, sans-serif" class="scroll-smooth">

    <div class="pb-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-700">
        <nav
            class="grid grid-rows-2 py-3 px-10 bg-white gap-4 justify-center items-center md:flex md:justify-between md:items-center">

            <div class="justify-self-center">
                <a href="/">
                    <x-svg-logo />
                </a>
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
                        Subscribe for Updates
                    </button>
                </a>
            </div>
        </nav>
    </div>

    <section class="px-6 pb-6 pt-2">

        <main class="max-w-6xl mx-auto mt-6 lg:mt-10 space-y-6">

            {{ $slot }}

        </main>
        <div class="p-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-xl mt-16">
            <footer class="flex flex-col justify-center items-center bg-blue-50 text-center py-16 px-10 rounded-xl">
                <img class="newsletterlogo" src="/images/My-Logo-Newsletter.png" width="220px" class="mb-3"
                    alt="" />

                <h5 class="text-3xl">Subscribe to my newsletter and stay up to date.</h5>
                <p class="text-sm mt-3">Promise to keep the inbox clean. No nonesense.</p>

                <div id="newsletter" class="mt-10">
                    <div class="relative inline-block mx-auto bg-blue-100 rounded-full">
                        <form method="POST" action="/newsletter" class="sm:flex text-sm">
                            @csrf
                            <div class="py-2 px-3 flex md:py-3 md:px-5 items-center">
                                <label for="email" class="inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
                                </label>

                                <input id="email" name="email" type="text" placeholder="Your email address"
                                    class="bg-transparent text-center sm:text-left py-1 pl-3 md:py-2 md:pl-4 focus-within:outline-none outline-none border-none" />
                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 rounded-full text-xs font-semibold text-white uppercase mb-2 sm:mb-0 py-2 px-7 md:py-3 md:px-8">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    @if (session()->has('success'))
        <Flashmessage message="{{ session('success') }}" />
    @endif

</body>

</html>
