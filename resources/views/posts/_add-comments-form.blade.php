<div class="p-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-xl">
    <form method="POST" action="/posts/{{ $post->slug }}/comments" class=" bg-blue-50 p-6 rounded-xl">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ $post->id }}" width="40" height="40" class="rounded-full"
                alt="">
            <h2 class="ml-4">Want to say something?</h2>
        </header>

        <div class="mt-6">
            <textarea name="body" class="rounded-xl w-full text-sm outline-none border-none" rows="5"
                placeholder="Think of something to say" value="{{ old('body') }}" required></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <input class="rounded-xl w-full text-sm outline-none border-none" type="text" name="name"
                placeholder="Name:*" value="{{ old('name') }}" required>

            @error('name')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <input class="rounded-xl mt-1 w-full text-sm outline-none border-none" type="email" name="email"
                placeholder="Email:*" value="{{ old('email') }}" required>

            @error('email')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
            <button type="submit"
                class="demogardPostComment transition duration-300 font-semibold
                bg-gradient-to-r from-purple-600 to-blue-500
                hover:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800
               text-white rounded-full py-2 px-8 text-xs">
                Post Comment
            </button>
        </div>

    </form>

</div>
