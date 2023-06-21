<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Items
        </h2>
        <a href="{{route('items.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Add Item</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(count($items) > 0)
                    @foreach($items as $item)
                        <div class="mt-5">
                        <a class="underline" href="{{route('items.show', $item)}}">{{$item->name}}</a> <br>
                        </div>
                    @endforeach
                    @else
                        <p class="text-red-500 text-center">No items available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
