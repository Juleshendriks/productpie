<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('categories.show', $category)}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded-full">Go back</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit category') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('categories.update', $category)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="">Name</label>
                            <input type="text" name="name" value="{{ old($category->name, $category->name) }}" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="name" class="">Description</label>
                            <textarea name="description" class="block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500">
                                {{ old($category->description, $category->description) }}
                            </textarea>
                            @error('description')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
