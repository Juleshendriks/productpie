<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('items.index')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mx-1">Go back</a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Category {{$item->name}}
        </h2>
        </div>
        <div class="flex">
            <form action="{{route('items.destroy', $item)}}" method="post">
                @csrf
                @method('DELETE')
               <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mx-1">Delete</button>
            </form>
            <a href="{{route('items.edit', $item)}}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 mx-2 rounded-full">Edit</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-xl">{{$item->name}}</p>
                    <p class="mt-3">{{$item->description}}</p>
                    <p class="mt-3">{{$item->deadline}}</p>
{{--                    <p class="mt-3">{{$item->category->name}}</p>--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
