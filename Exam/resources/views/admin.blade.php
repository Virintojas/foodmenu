<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Administracija
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex flex-wrap justify-around">
                <div class="p-4 mb-4 bg-gray-100 dark:bg-gray-700 rounded-lg w-1/3 ">
                    <h3 class="text-lg font-semibold text-white">Įstaigos</h3>
                    <br>
                    <a href="{{ route('institutes.create') }}" class="btn bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded border border-gray-500">
                        Pridėti
                    </a>
                    <a href="{{ route('institutes.index') }}" class="btn1 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded border border-gray-500">
                        Peržiūrėti
                    </a>
                </div>
                <div class="p-4 mb-4 bg-gray-100 dark:bg-gray-700 rounded-lg w-1/3 ">
                    <h3 class="text-lg font-semibold text-white">Užsakymai</h3>
                    <br>
                    <a href="{{ route('orders.index') }}" class="btn bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded border border-gray-500">
                        Peržiūrėti
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .btn {
        width: 100%;
        padding: 0.5rem;
    }

    .btn1{
        margin-right: 20px;
    }
</style>