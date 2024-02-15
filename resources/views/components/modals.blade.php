@props(['title','name','size' => 'md'])
<div 
    x-data = "{show : false,  name : '{{ $name }}',  size: '{{ $size }}', title : '{{ $title }}'}" 
    x-show = "show"
    x-cloak
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = false; clearFields()"
    x-on:keydown.escape.window="show = false"
    :class="{ 'sm': size === 'sm', 'md': size === 'md', 'lg': size === 'lg' }"
    class="fixed z-50 inset-0"
    x-transition>

    <div x-on:click="$dispatch('close-modal')" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl overflow-y-auto" :style="{ 'max-height': size === 'sm' ? '300px' : '550px' }">
        @if (isset($title))
            <div class="px-4 py-3 flex items-center justify-between border-b border-gray-300">
                <div class="text-xl text-gray-800">{{ $title }}</div>
                <button x-on:click="$dispatch('close-modal')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="p-4">
            {{ $body }}
        </div>
    </div>
</div>
{{-- @props(['title','name','size' => 'md'])

<div x-data="{ show: false, name: '{{ $name }}', size: '{{ $size }}', title: '{{ $title }}', clearFields: false }"
     x-show="show"
     x-cloak
     x-on:open-modal.window="show = ($event.detail.name === name); clearFields = false"
     x-on:close-modal.window="show = false; clearFields = true"
     x-on:keydown.escape.window="show = false; clearFields = true"
     :class="{ 'sm': size === 'sm', 'md': size === 'md', 'lg': size === 'lg' }"
     class="fixed z-50 inset-0"
     x-transition>

    <div x-on:click="$dispatch('close-modal')" class="fixed inset-0 bg-gray-300 opacity-40"></div>

    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl overflow-y-auto"
         :style="{ 'max-height': size === 'sm' ? '300px' : '550px' }">

        @if (isset($title))
            <div class="px-4 py-3 flex items-center justify-between border-b border-gray-300">
                <div class="text-xl text-gray-800">{{ $title }}</div>
                <button x-on:click="$dispatch('close-modal')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        @endif

        <div class="p-4" x-show.transition="!clearFields">
            {{ $body }}
        </div>

    </div>

</div> --}}