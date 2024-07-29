<div class="min-h-screen flex">
    <aside class="w-1/4 bg-gray-800 text-white p-4">
        @include('livewire.sidebar')
    </aside>

    <main class="w-3/4 p-6 bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Route Form</h2>
            <form wire:submit.prevent="CreateRoute">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="route_name" class="block text-gray-700">Route Name</label>
                        <input wire:model='route_name' type="text" id="route_name" name="route_name" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('route_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="Total_seats" class="block text-gray-700">Total Seats</label>
                        <input wire:model='Total_seats' type="number" id="Total_seats" name="Total_seats" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('Total_seats') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="available_seats" class="block text-gray-700">Available Seats</label>
                        <input wire:model='available_seats' type="number" id="available_seats" name="available_seats" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('available_seats') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="is_active" class="block text-gray-700">Status</label>
                        <select id="is_active" name="is_active" class="w-full p-2 border border-gray-300 rounded mt-1" wire:model='is_active'>
                            <option Default=''>Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('is_active') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit" class="mt-6 bg-blue-500 text-white p-2 rounded shadow-md hover:bg-blue-600 transition duration-300">Submit</button>
            </form>

            @if (session()->has('success'))
                <div x-data="{show:true}" x-show='show' x-init="setTimeout(()=> show =false,2500)" class="mt-4 p-4 text-green-500 rounded ">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </main>
</div>
