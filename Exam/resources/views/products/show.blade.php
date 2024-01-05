<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $product->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex flex-wrap justify-around p-6">
                <img src="{{ $product->image }}" alt="{{ $product->title }}" class="w-64 h-64 rounded-lg shadow-md">
                <div class="mt-6">
                    <h3 class="text-2xl font-semibold mb-2">{{ $product->title }}</h3>
                    <p class="text-gray-500 text-lg">{{ $product->price }}</p>
                    <br>
                    <a href="{{ route('orders.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Užsisakyti 🛒
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>