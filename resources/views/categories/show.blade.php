<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('categories.index')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mx-1">Go back</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Category {{$category->name}}
        </h2>
        </div>
        <div class="flex">
            <form action="{{route('categories.destroy', $category)}}" method="post">
                @csrf
                @method('DELETE')
               <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mx-1">Delete</button>
            </form>
            <a href="{{route('categories.edit', $category)}}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 mx-2 rounded-full">Edit</a>
            <a href="{{route('items.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Add Item</a>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-xl">{{$category->name}}</p>
                    <p class="mt-3">{{$category->description}}</p>
                </div>
                <div class="p-6">
                    @if(count($category->items) > 0)
                        @foreach($category->items as $item)
                            <p>{{$item->name}}</p>
                        @endforeach
                    @else
                        <p class="text-red-600">No items available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
