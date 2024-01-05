<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $institute->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex flex-wrap justify-around">
                <div class="p-4 mb-4 bg-gray-100 dark:bg-gray-700 rounded-lg w-1/3 ">
                    @foreach ($products as $product )
                    <h3 class="text-lg font-semibold text-white">{{ $product->title }}</h3>
                    <img src="{{ $product->image }}" alt="Product Image">
                    <p class="text-gray-600 dark:text-gray-300 text-white">{{ $product->price}}</p>
                    
                    <br>
                    <a href="{{ route('products.show', $institute->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Plačiau</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>