<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Employees Data - Livewire') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if (session()->has('message'))
                    <div class="px-4 py-3 leading-normal font-semibold text-green-700 bg-green-100 rounded-lg mb-5"
                        role="alert">
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                <div class="mb-4">
                    <x-button wire:click="create()">{{ 'Add Authors Data' }}</x-button>
                    @if ($isModal)
                        @include('livewire.create')
                    @endif
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">No.</th>
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">Position</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Address</th>
                            <th class="px-4 py-2 border">Phone Number</th>
                            <th class="px-4 py-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @if (!empty($employees))
                            @foreach ($employees as $employee)
                                <tr class="">
                                    <td class="px-4 py-2 border text-center">{{ $i++ }}</td>
                                    <td class=" px-4 py-2 w-2/12 border">{{ $employee->emp_name }}</td>
                                    <td class=" px-4 py-2 w-2/12 border font-semibold">{{ $employee->emp_pos }}
                                    </td>
                                    <td class=" px-4 py-2 border font-semibold">{{ $employee->emp_email }}
                                    </td>
                                    <td class=" px-4 py-2 border font-semibold">{{ $employee->emp_address }}
                                    </td>
                                    <td class=" px-4 py-2 border font-semibold">{{ $employee->emp_phone }}
                                    </td>
                                    <td class="px-4 py-2 border w-3/12 text-left md:text-center">
                                        <div class="py-2 inline-flex">
                                            <x-button wire:click="edit({{ $employee->id }})"
                                                class="
                                                 rounded-md px-2 py-2 mr-2 md:px-3 font-bold hover:bg-yellow-600">
                                                Update
                                            </x-button>
                                        </div>
                                        <div class="py-2 inline-flex">
                                            <x-delete-confirm id="{{ $employee->id }}">
                                                <i class="fa fa-trash"></i>
                                            </x-delete-confirm>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-4 py-2 border text-red-500 font-semibold text-xl text-center" colspan="4">
                                    No Employees Data found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
