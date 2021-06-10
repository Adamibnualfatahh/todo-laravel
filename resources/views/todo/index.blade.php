<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('todo.create') }}" class="bg-green-500 hover:bg-green-700 text-whi        font-bold py-2 px-4 rounded shadow-lg text-gray-50">+ Create Todo</a>
            </div>   
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <table class="table-auto w-full">
                    <tr>
                        <th class="border-none px-4 py-2" width="10%">ID</th>
                        <th class="border-none px-4 py-2" width="50%">Todo</th>
                        <th class="border-none px-4 py-2" width="20%">Waktu</th>
                        <th class="border-none px-4 py-2" width="20%">Aksi</th>
                    </tr>
                    @forelse ($todos as $todo)
                        <tr>
                            <td class="border px-4 py-2">
                                {{ $todo->id }}
                            </td>
                            <td class="border px-4 py-2">
                                {{ $todo->todo }}
                            </td>
                            <td class="border px-4 py-2">
                                {{-- <a href="{{ route('todo.edit') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />Edit</a> --}}
                                <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="inline-block">
                                @csrf
                            @method('delete')
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                      </svg></button>
                                </form>
                            </td>
                            
                        </tr>
                    @empty
                        <tr>
                            <th colspan="3" class="border-none px-4 py-6 text-center text-red-400">
                                Data tidak ditemukan(Kosong)
                            </th>
                        </tr>
                    @endforelse
                </table>
            </div> 
        </div>
    </div>
</x-app-layout>

