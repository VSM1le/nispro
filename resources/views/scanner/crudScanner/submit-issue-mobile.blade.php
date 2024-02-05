<div class="flex justify-center items-center py-6">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{ route('submitissue') }}" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Scanner</h5>
            <div>
                <label for="Issue No." class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Issue No.</label>
                @error('issueno')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
                <input type="text" name="issueno" id="issueno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" autofocus>
            </div>
            <div>
                <label for="quality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">จำนวน (quantity)</label>
                @error('quality')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
                <input type="text" name="quality" id="quality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            </div>
            <div>
                <label for="partout" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nissan part</label>
                @error('partout')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
                <input type="text" name="partout" id="partout" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            </div>
            <div>
                <label for="parttru" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tru part</label>
                @error('parttru')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
                <input type="text" name="parttru" id="parttru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
            </div>


           
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit issue</button>
            
        </form>
    </div>