<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ISSUE No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Part Out
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quality
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Part Tru
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Check
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Create date
                            </th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($fails as $fail)                                              
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $fail->issueno }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $fail->partout }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $fail->quality }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $fail->parttru }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $fail->check }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $fail->created_at }}
                                </th>
                            </tr> 
                            @endforeach                                                                      
                    </tbody>
                </table>
               <div></div>
            </div>                                   
        </div>
    </div>
    @include('commoner.crudCommoner.confirmmistake')
</x-app-layout>