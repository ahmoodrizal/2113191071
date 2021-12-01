<div class="" x-data="{ confirmDelete:false }">
    <x-button x-show="!confirmDelete" x-on:click="confirmDelete=true">
        Delete
    </x-button>

    <x-button x-show="confirmDelete" x-on:click="confirmDelete=false" wire:click="delete({{ $id }})"
        class="bg-red-400 hover:bg-red-600">Yes</x-button>

    <x-button x-show="confirmDelete" x-on:click="confirmDelete=false" class="bg-blue-200 hover:bg-blue-400">No</x-button>
</div>
