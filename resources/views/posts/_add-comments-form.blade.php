    <form method="POST" action="/posts/{{ $post->slug }}/comments" class=" text-black bg-option7 p-6 rounded-xl">
        @csrf

        <header class="flex items-center text-white">
            <img src="/images/avatar.png" class="rounded-xl" alt="User Avatar">
            <h2 class="ml-4">Want to say something?</h2>
        </header>

        <div class="mt-6">
            <textarea name="body" class="rounded-xl w-full text-sm outline-none border-none" rows="5"
                placeholder="Think of something to say" value="{{ old('body') }}" required></textarea>

            @error('body')
                <span class="text-xs text-red-500 mb-1">{{ $message }}</span>
            @enderror

            <input class="rounded-xl w-full text-sm outline-none border-none" type="text" name="name"
                placeholder="Name:*" value="{{ old('name') }}" required>

            @error('name')
                <span class="text-xs text-red-500 mb-1">{{ $message }}</span>
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
