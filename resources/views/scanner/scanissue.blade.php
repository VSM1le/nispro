<x-app-layout>
    <div class="hidden md:block">
    @include('scanner.crudScanner.submit-issue')
    <div class="py-6">
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
                                Quantity
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
                        @foreach ($nissans as $nissan)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nissan->issueno }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nissan->partout }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nissan->quality }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nissan->parttru }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center justify-center rounded-full 
                                    @if($nissan->check === 'Pass') bg-green-300
                                    @else bg-red-300
                                    @endif">
                                        {{ $nissan->check }}
                                    </div>
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $nissan->created_at }}
                                </th>
                            </tr>
                        @endforeach
                        
                           
                    </tbody>
                </table>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">           
                </nav>
            </div>                                   
        </div>
    </div>
</div>

<div class="md:hidden lg:hidden">
    @include('scanner.crudScanner.submit-issue-mobile')
</div>
</x-app-layout>
