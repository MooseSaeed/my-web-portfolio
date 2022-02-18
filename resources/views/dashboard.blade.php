<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex">
                        <aside class="w-32 border-r-2">
                            <h2 class="font-semibold mb-4">Links</h2>
                            <ul>
                                <li>
                                    <a class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}"
                                        href="/admin/posts">New Post</a>
                                </li>
                            </ul>
                        </aside>
                        <Main class="flex-1">
                            @include('admin.posts.create')
                        </Main>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
