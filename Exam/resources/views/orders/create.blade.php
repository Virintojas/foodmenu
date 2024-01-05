<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Kurti užsakyma
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                {{--<input type="hidden" name="product_id" value="{{ $product->id }}">--}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="text" name="name" placeholder="Vardas" class="border-2 rounded-lg p-2 mb-2">
                <input type="text" name="surname" placeholder="Pavardė" class="border-2 rounded-lg p-2 mb-2">
                <input type="text" name="address" placeholder="Adresas" class="border-2 rounded-lg p-2 mb-2">

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Užsisakyti
                </button>
            </form>
        </div>
    </div>
</x-app-layout>