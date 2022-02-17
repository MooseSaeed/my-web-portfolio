<section class="px-6 py-8 border border-gray-200 p-6 rounded-xl max-w-xl m-auto">
    <h1 class="text-lg font-bold mb-4">
        Publish New Post
    </h1>
    <form action="/admin/dashboard" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                Title
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" required>

            @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                Thumbnail
            </label>

            <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail" required>

            @error('thumbnail')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                Excerpt
            </label>

            <textarea class="border border-gray-400 p-2 w-full" type="text" name="excerpt" id="excerpt"
                required></textarea>

            @error('excerpt')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                Body
            </label>

            <textarea class="border border-gray-400 p-2 w-full" type="text" name="body" id="body" required></textarea>

            @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                Category
            </label>

            <select class="rounded-xl" name="category_id" id="category_id">

                @foreach (App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                @endforeach
            </select>

            @error('category_id')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 rounded-xl text-white font-semibold px-6 py-1 uppercase">Post</button>

    </form>
</section>
