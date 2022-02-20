<div id="app" class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex">
                    <aside class="w-32 border-r-2">
                        <h2 class="font-semibold mb-4">Links</h2>
                        <ul>
                            <li>
                                <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">Manage Posts</a>
                            </li>
                            <li>
                                <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New
                                    Post</a>
                            </li>
                        </ul>
                    </aside>
                    <Main class="flex-1">
                        <section class="px-6 py-8 border border-gray-200 rounded-xl max-w-4xl m-auto">
                            {{ $slot }}
                        </section>

                    </Main>
                </div>

            </div>
        </div>
    </div>
    @if (session()->has('success'))
    <Flashmessage message="{{ session('success') }}" />
    @endif
</div>