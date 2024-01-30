<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
        <form action="{{ route('submmitpart') }}" method="POST" class="flex justify-between">
            @csrf
            <div>
                <div>
                <label class="" for="type">Type</label>
                </div>
                <input type="text" name="type" class="border border-slate-300 rounded-lg">
                @error('type')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div>
                <div>
                <label for="partout">Part out side</label>
                </div>             
                <input type="text" name="partout" class="border border-slate-300 rounded-lg">
                @error('partout')
                <div>
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror                
            </div>
            <div>
                <div>
                <label>Part Tru</label>
                </div>            
                <input type="text" name="parttru" class="border border-slate-300 rounded-lg">
                @error('parttru')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div>
                <div>
                <label>Part name</label>
                </div>            
                <input type="text" name="partname" class="border border-slate-300 rounded-lg">
                @error('partname')
                <div>
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div>
                <div>
                <label>SNP</label>
                </div>                 
                <input type="text" name="snp" class="border border-slate-300 rounded-lg">
                @error('snp')
                <div>
                <span class="text-red-500 text-xs">{{ $message }}</span>
                </div>
                @enderror
               
            </div>
            <div>
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>