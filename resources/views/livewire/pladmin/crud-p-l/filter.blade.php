<div>
<div style="height:600px; overflow-y:auto;">
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
                    Scanner
                </th>
                <th scope="col" class="px-6 py-3">
                    Approval
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Create date
                </th>
                <th scope="col" class="px-6 py-3">
                    Update date
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
                        {{ $nissan->parttru}}
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
                        {{ $nissan->user->name}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $nissan->approval}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap break-all dark:text-white">
                        {{ $nissan->description }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $nissan->created_at }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $nissan->updated_at }}
                    </th>
                </tr>
            @endforeach
            
               
        </tbody>
    </table>
</div>
        <nav class="justify-between m-3" aria-label="Pagination">
            {{ $nissans->withQueryString()->links() }}
        </nav>
</div>
