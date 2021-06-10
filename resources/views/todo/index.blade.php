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
                                <a href="{{ route('todo.edit' , $todo->id) }}">Edit</a>
                                <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="inline-block">
                                @csrf
                            @method('delete')
                                <button type="submit">
                                    Hapus
                                    </button>
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





























