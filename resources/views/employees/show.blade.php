<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-fixed">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 font-bold">Employee Id</td>
                                <td>{{ $employee->emp_id }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-bold">Name</td>
                                <td>{{ $employee->emp_name }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-bold">Position</td>
                                <td>{{ $employee->emp_pos }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-bold">Phone Number</td>
                                <td>{{ $employee->emp_phone }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-bold">Email Address</td>
                                <td>{{ $employee->emp_email }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 font-bold">Address</td>
                                <td>{{ $employee->emp_address }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mx-3 my-3">
                        <a href="{{ route('employees.index') }}"
                            class="bg-gray-700 rounded-md px-4 py-2 text-white text-md font-medium">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
