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
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>


<body style="font-family: Open Sans, sans-serif" class="scroll-smooth">

    <div class="pb-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-700">
        <nav class="grid grid-rows-2 py-3 px-10 bg-white gap-4 justify-center items-center md:flex md:justify-between md:items-center">

            <div class="justify-self-center">
                <a href="/">
                    <x-svg-logo />
                </a>
            </div>

            <div class="flex flex-col gap-2 md:block items-center justify-center">
                <a href="/" class="text-xs font-bold uppercase">Dashboard Page</a>

                <a href="#newsletter">
                    <button href="#newsletter" class="transition-colors duration-300 bg-purple-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Subscribe for Updates
                    </button>
                </a>
            </div>
        </nav>
    </div>

    <section class="px-6 pb-6 pt-2">

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6" id="app">

            {{ $slot }}

        </main>
        <div class="p-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-xl mt-16">
            <footer class="flex flex-col justify-center items-center bg-blue-50 text-center py-16 px-10 rounded-xl">
                <img src="/images/My Logo Newsletter.png" width="220px" class="mb-3" alt="" />

                <h5 class="text-3xl">Subscribe to my newsletter and stay up to date.</h5>
                <p class="text-sm mt-3">Promise to keep the inbox clean. No nonesense.</p>

                <div id="newsletter" class="mt-10">
                    <div class="relative inline-block mx-auto lg:bg-blue-100 rounded-full">
                        <form method="POST" action="#" class="lg:flex text-sm">
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
                                </label>

                                <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none outline-none border-none" />
                            </div>

                            <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </footer>
        </div>
    </section>
</body>

</html>