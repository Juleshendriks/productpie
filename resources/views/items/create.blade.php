<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('items.index')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded-full">Go back</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create item') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('items.store')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="">Name</label>
                            <input type="text" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="name" class="">Description</label>
                            <textarea type="text" name="description" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                            @error('description')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="deadline" class="">Deadline</label>
                            <input type="date" name="deadline" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500">
                            @error('deadline')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="category_id" class="">Category</label>
                            <select name="category_id" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
