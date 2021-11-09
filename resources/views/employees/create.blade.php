<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="emp_id" class="block mb-2 text-md font-bold text-gray-700">Employee Id</label>
                            <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                name="emp_id" placeholder="Enter Employee Id">
                            @error('emp_id') <span class="text-red-500 text-sm">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="emp_name" class="block mb-2 text-md font-bold text-gray-700">Employee
                                Name</label>
                            <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                name="emp_name" placeholder="Enter Employee Id">
                            @error('emp_name') <span class="text-red-500 text-sm">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="emp_phone" class="block mb-2 text-md font-bold text-gray-700">Phone
                                Number</label>
                            <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                name="emp_phone" placeholder="Enter Employee Id">
                            @error('emp_phone') <span class="text-red-500 text-sm">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="emp_email" class="block mb-2 text-md font-bold text-gray-700">Email
                                Address</label>
                            <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                name="emp_email" placeholder="Enter Employee Id">
                            @error('emp_email') <span class="text-red-500 text-sm">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="emp_pos" class="block mb-2 text-md font-bold text-gray-700">Position</label>
                            <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                name="emp_pos" placeholder="Enter Employee Id">
                            @error('emp_pos') <span class="text-red-500 text-sm">{{ $message }}
                            </span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="emp_address" class="block mb-2 text-md font-bold text-gray-700">Address</label>
                            <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                name="emp_address" placeholder="Enter Employee Id">
                            @error('emp_address') <span class="text-red-500 text-sm">{{ $message }}
                            </span>@enderror
                        </div>
                        <div>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
