<div class="py-12" >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <form action="{{ route('submitissue') }}" id="issuesub"  method="POST" class="flex justify-between">
            @csrf
            <div id="subissue">
            <div>
            <h1>ISSUE No.</h1>
            </div>
            <input type="text" name="issueno" class="barcode-input border border-slate-300 rounded-lg" autofocus>
            
            @error('issueno')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
            @enderror
            </div>
            <div>
                <div>
                    <h1>จำนวน (quantity)</h1>
                </div>
            <input type="text" name="quality" class="barcode-input border border-slate-300 rounded-lg">
            @error('quality')
                <div>
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
            @enderror
            </div>
            <div>
                <div>
                    <h1>Nissan part</h1>
                </div>
            <input type="text"  name="partout" class="barcode-input border border-slate-300 rounded-lg">
            @error('partout')
                <div>
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
            @enderror
            </div>
            <div>
                <div>
                    <h1>Tru part</h1>
                </div>
            <input type="text"  name="parttru" class="barcode-input border border-slate-300 rounded-lg">
            @error('parttru')
                <div>
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
            @enderror
            </div>
            <div class="items-center">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onClick = "javascript: p=true;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>


