<x-modals title="Edit user" name="editUser">
    @slot('body')
    @if (isset($useredit))
    <form class="max-w-sm mx-auto" wire:submit.prevent="updateProfile"  x-data="modals">
      @csrf
      <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User email</label>
          <input type="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="{{ $useredit['email'] }}" disabled>
          
      </div>
      <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User name</label>
        <input type="name" wire:model="name" x-model="formData.name"
               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
               placeholder="{{ $useredit['name'] }}">
        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <div class="mb-5">
        <label for="newPassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User password</label>
        <input type="password" wire:model="newPassword" x-model="formData.newPassword"
               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
        @error('newPassword') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>
      
      <div class="mb-5">
          <label for="roles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select user role</label>
          <select id="roles" wire:model="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          {{-- @foreach ($roles as $role )
              <option value="{{ $role->name }}">{{ $role -> name }}</option>
          @endforeach --}}
          <option value="">Choose a role</option>
          <option value="scanner">scanner</option>
          <option value="plAdmin">plAdmin</option>
          </select>
          @error('selectedRoles') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
       </div>
      
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit user</button>
  </form>
    @endif
    @endslot
    {{-- @slot('script')
    <script>
        document.addEventListener('alpine:initializing', () => {
            Alpine.data('modals', () => ({
                showModal: false,
                formData: { name: '', newPassword: '' },
            }));
        });
    </script>
    @endslot --}}
</x-modals>