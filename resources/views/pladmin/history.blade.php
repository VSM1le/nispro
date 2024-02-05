<x-app-layout>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8" style="max-width: 90rem;">
            <div class="mb-3">
            @include('pladmin.crudPL.exportdata')
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
               @livewire('pladmin.crudPL.filter')
            </div>                                   
        </div>
    </div>
</x-app-layout>