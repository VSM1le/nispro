{{-- <div>
    @foreach ($items as $index => $item )
    <div wire:key="item-{{ $index }}" class="wrapper">
        <div class="tab px-5 py-2 bg-slate-100 shadow-lg relative mb-4 rounded-md" wire:click="toggleItem({{ $index }})">
            <label 
                class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                <h2 class=" w-8 h-8 bg-cyan-300 text-white flex justify-center items-center rounded-sm mr-3">{{ $index }}</h2>
                <h3>{{ $item['title']}}</h3>
            </label>
            @if ($item['isOpen'])
            <div class="answer content mt-5 h-0 transition ease-in-out delay-300 overflow-hidden peer-checked:h-full">  
                <p>
                    {{ $item['content'] }}
                </p> 
            </div>
            @endif
        </div>    
    </div>
    @endforeach
</div> --}}

{{-- <div>
    @foreach ($items as $index => $item)
        <div wire:key="item-{{ $index }}" class="wrapper">
            <div class="tab px-5 py-2 bg-slate-100 shadow-lg relative mb-4 rounded-md" wire:click="toggleItem({{ $index }})">
                <label class="flex items-center cursor-pointer font-semibold text-lg">
                    <h2 class="w-8 h-8 bg-cyan-300 text-white flex justify-center items-center rounded-sm mr-3">
                        {{ $index }}
                    </h2>
                    <h3>{{ $item['title']}}</h3>
                </label>
                @if ($item['isOpen'])
                <div 
                    class="answer content mt-5" 
                    wire:transition.fade
                    wire:loading.remove
                    wire:loading.class="opacity-50 pointer-events-none">
                        <p>
                            {{ $item['content'] }}
                        </p> 
                    
                </div>
                @endif
            </div>    
        </div>
    @endforeach
</div> --}}

<div>
    @foreach ($items as $index => $item )
        <div wire:key="item-{{ $index }}" class="wrapper">
            <div class="tab px-5 py-2 bg-slate-100 shadow-lg relative mb-4 rounded-md" wire:click="toggleItem({{ $index }})">
                <label 
                    class="flex items-center cursor-pointer font-semibold text-lg after:absolute after:right-5 after:text-2xl after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h2 class="w-8 h-8 bg-sky-300 text-white flex justify-center items-center rounded-sm mr-3">{{ $index + 1 }}</h2>
                    <h3>{{ $item['title']}}</h3>
                </label>
                @if ($item['isOpen'])
                <div x-data="{ isOpen: @entangle('items.' . $index . '.isOpen') }">
                    <div x-show="isOpen" class="answer content mt-5 h-full">  
                        <p>
                            {{ $item['content'] }}
                        </p> 
                    </div>
                </div>
                @endif
            </div>    
        </div>
    @endforeach
</div>

