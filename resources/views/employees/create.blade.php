<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-white border-b border-gray-200">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap px-6 py-4">
                            <div class="mb-4 w-full">
                                <label for="emp_id" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Id</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_id" placeholder="Enter Employee Id">
                                @error('emp_id') <span class="text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                            <div class="flex flex-wrap -mx-2 space-y-0">
                                <div class="w-1/2 mb-4 px-2">
                                    <label for="emp_name" class="block mb-2 text-md font-bold text-gray-700">Employee
                                        Name</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="emp_name" placeholder="Enter Employee Name">
                                    @error('emp_name') <span class="text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                                <div class="w-1/2 mb-4 px-2">
                                    <label for="emp_pos" class="block mb-2 text-md font-bold text-gray-700">Employee
                                        Position</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="emp_pos" placeholder="Enter Employee Position">
                                    @error('emp_pos') <span class="text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-2 space-y-0">
                                <div class="w-1/2 mb-4 px-2">
                                    <label for="emp_phone" class="block mb-2 text-md font-bold text-gray-700">Employee
                                        Phone Number</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="emp_phone" placeholder="Enter Employee Phone">
                                    @error('emp_phone') <span class="text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                                <div class="w-1/2 mb-4 px-2">
                                    <label for="emp_email" class="block mb-2 text-md font-bold text-gray-700">Employee
                                        Email</label>
                                    <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                        name="emp_email" placeholder="Enter Employee Email">
                                    @error('emp_email') <span class="text-red-500 text-sm">{{ $message }}
                                    </span>@enderror
                                </div>
                            </div>
                            <div class="mb-2 w-full">
                                <label for="emp_address" class="block mb-2 text-md font-bold text-gray-700">Employee
                                    Address</label>
                                <input type="text" class="w-full px-3 py-2 text-gray-700 rounded-xl font-semibold"
                                    name="emp_address" placeholder="Enter Employee Address">
                                @error('emp_address') <span class="text-red-500 text-sm">{{ $message }}
                                </span>@enderror
                            </div>
                        </div>
                        <div class="bg-gray-50 text-left sm:px-6 px-4">
                            <x-button class="mb-2 text-white mt-2"><a
                                    href="{{ route('employees.index') }}">{{ __('Back') }}</a>
                            </x-button>
                            <x-button class="mb-2 text-white mt-2">{{ __('Create Data') }}</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
