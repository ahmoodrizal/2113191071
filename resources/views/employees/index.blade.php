<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                        <div class="px-4 py-3 leading-normal font-semibold text-green-700 bg-green-100 rounded-lg mb-5"
                            role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="mb-6 w">
                        <a href="{{ route('employees.create') }}">
                            <x-button class="bg-gray-700 rounded-md px-4 py-2 text-white text-md font-medium">Add New
                                Employee</x-button>
                        </a>
                    </div>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border">No.</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Position</th>
                                <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($employees))
                                @foreach ($employees as $e)
                                    <tr class="">
                                        <td class="px-4 py-2 border w-1/12 text-center">1</td>
                                        <td class=" px-4 py-2 border text-center">{{ $e->emp_name }}</td>
                                        <td class=" px-4 py-2 border text-center">{{ $e->emp_pos }}</td>
                                        <td class="px-4 py-2 border w-3/12 text-center">
                                            <div class="py-2 inline-flex">
                                                <a href="{{ route('employees.show', $e->id) }}">
                                                    <x-button
                                                        class="bg-green-400 rounded-md px-2 py-2 mr-2 md:px-3 font-bold hover:bg-green-600">
                                                        Show</x-button>
                                                </a>
                                                <a href="{{ route('employees.edit', $e->id) }}">
                                                    <x-button
                                                        class="bg-yellow-400 rounded-md px-2 py-2 mr-2 md:px-3 font-bold hover:bg-yellow-600">
                                                        Update</x-button>
                                                </a>
                                                <form action="{{ route('employees.destroy', $e->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-button
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                        class="bg-red-500 rounded-md px-2 py-2 md:px-3 font-bold hover:bg-red-600">
                                                        Delete</x-button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="px-4 py-2 border text-red-500 font-semibold text-xl text-center"
                                        colspan="4">No contacts found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
