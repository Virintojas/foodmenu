<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Įstaigos redagavimas
        </h2>
    </x-slot>

    <div class="py-12 dark:bg-gray-900"> <!-- Add dark mode background class -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg flex flex-wrap justify-around bg-opacity-20 backdrop-filter backdrop-blur-lg">
                <form action="{{ route('institutes.update', $institute->id) }}" method="POST"
                    class="bg-gray-100 dark:bg-gray-700 rounded-lg p-4 bg-opacity-20 backdrop-filter backdrop-blur-lg">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="text-xl text-gray-600 dark:text-gray-200">Pavadinimas</label><br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title"
                            value="{{ $institute->title }}">
                        @error('title')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="text-xl text-gray-600 dark:text-gray-200">Adresas</label><br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="address" id="address"
                            value="{{ $institute->address }}">
                        @error('address')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="text-xl text-gray-600 dark:text-gray-200">Telefonas</label><br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="phone" id="phone"
                            value="{{ $institute->phone }}">
                        @error('phone')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="text-xl text-gray-600 dark:text-gray-200">El. paÅ¡tas</label><br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" name="email" id="email"
                            value="{{ $institute->email }}">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Redaguoti
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>