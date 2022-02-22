<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category: ' . $category->name) }}
        </h2>
    </x-slot>
    <x-adminLayout>

        <section class="px-6 py-8 border border-gray-200 rounded-xl max-w-4xl m-auto">
            <form action="/admin/categories/{{ $category->id }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Category Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full" value="{{ old('name') }}{{ $category->name }}"
                        type="text" name="name" id="name" required>

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>


                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 rounded-xl text-white font-semibold px-6 py-1 uppercase">Post</button>

            </form>
        </section>
    </x-adminLayout>
</x-app-layout>
