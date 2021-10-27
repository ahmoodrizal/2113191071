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
                    <div class="mb-6 w">
                        <a href="{{ route('employee-create') }}"
                            class="bg-gray-700 rounded-md px-4 py-2 text-white text-md font-medium">Add Employee
                            Data</a>
                    </div>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border">No.</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td class="px-4 py-2 border w-1/12 text-center">1</td>
                                <td class=" px-4 py-2 border text-center">Ahmad Rizal Imaduddin</td>
                                <td class="px-4 py-2 border w-3/12 text-center">
                                    <div class="py-2 inline-flex">
                                        <a href="{{ route('employee-show') }}"
                                            class="bg-green-300 rounded-md px-2 py-2 mr-2 md:px-3 font-semibold">Show</a>
                                        <a href="{{ route('employee-edit') }}"
                                            class="bg-yellow-400 rounded-md px-2 py-2 mr-2 md:px-3 font-semibold">Update</a>
                                        <a href="#"
                                            class="bg-red-500 rounded-md px-2 py-2 md:px-3 font-semibold">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
