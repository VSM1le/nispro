<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-2 rounded" type="submit">
                Create
            </button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="pb-4 bg-white dark:bg-gray-900">
                         <livewire:accordionlist />                        
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>