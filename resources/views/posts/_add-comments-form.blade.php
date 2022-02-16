<form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl">
    @csrf

    <header class="flex items-center">
        <img src="https://i.pravatar.cc/60?u={{ $post->id }}" width="40" height="40" class="rounded-full" alt="">
        <h2 class="ml-4">Want to participate?</h2>
    </header>

    <div class="mt-6">
        <textarea name="body" class="w-full text-sm focus:outline-none outline-none border-none focus:ring" rows="5"
            placeholder="Think of something to say" value="{{ old('body') }}" required></textarea>

        @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror

        <input class="w-full text-sm focus:outline-none outline-none border-none focus:ring" type="text" name="name"
            placeholder="Name:*" value="{{ old('name') }}" required>

        @error('name')
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror

        <input class="w-full text-sm focus:outline-none outline-none border-none focus:ring" type="email" name="email"
            placeholder="Email:*" value="{{ old('email') }}" required>

        @error('email')
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror

    </div>

    <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
        <button type="submit"
            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl hover:bg-blue-600 ">
            Post Comment
        </button>
    </div>

</form>
