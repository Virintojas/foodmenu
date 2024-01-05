<x-app-layout>
    <x-slot name="header" >
        <h2 class="color-white font-semibold text-xl text-white-500 leading-tight text-white">
            {{ __('Įstaigos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-4">
                @foreach ($institutes as $institute)
                    <div class="p-4 bg-purple-400 dark:bg-gray-700 rounded-lg">
                        <h3 class="text-lg font-semibold text-white">{{ $institute->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-white">{{ $institute->address }}</p>
                        <p class="text-gray-600 dark:text-gray-300 text-white">{{ $institute->phone }}</p>
                        <p class="text-gray-600 dark:text-gray-300 text-white">{{ $institute->email }}</p>
                        <br>
                        <a href="{{ route('institutes.show', $institute->id) }}"
                            class="bg-gray-300 hover:bg-gray-400 text-white font-bold py-2 px-3 rounded-lg border border-gray-500">View</a><br><br>
                        @if (Auth::user()->id == 1)
                            <a>
                                <form action="{{ route('institutes.destroy', $institute->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="bg-red-500 hover:bg-red-500 text-white font-bold py-2 px-2 rounded-lg border-2 border-red-900">Delete</button></a><br><br>
                                </form>
                            </a>

                            <a href="{{ route('institutes.edit', $institute->id) }}"
                                class="bg-gray-300 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded-lg border border-gray-500">Edit</a></a><br><br>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .btn {
        width: 100%;
        padding: 0.5rem;
        border-radius: 0;
        border: 2px solid #000;
        transition: all 0.3s ease;  
    }

    .btn:hover {
        background-color: #000;
        color: #fff;
    }

    .text-white {
        color: #fff;
    }
    
</style>
