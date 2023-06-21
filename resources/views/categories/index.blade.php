<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
        <a href="{{route('categories.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Add Category</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(count($categories) > 0)
                    @foreach($categories as $category)
                        <div class="mt-5">
                        <a class="underline" href="{{route('categories.show', $category)}}">{{$category->name}}</a> <br>
                        </div>
                    @endforeach
                    @else
                        <p class="text-red-500 text-center">No categories available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
