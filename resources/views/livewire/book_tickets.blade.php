<div class="min-h-screen flex flex-row">
    <div class="w-1/4 bg-gray-800 text-white p-4">
        @include('livewire.sidebar')
    </div>

    <div class="w-3/4 p-6 bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md" x-data>
            <h2 class="text-2xl font-semibold mb-6">Ticket Form</h2>
            @if(Session('success'))
                <span class="text-green-700">{{ session('success') }}</span>
            @endif
            @if(session('update'))
                <span class="text-green-700">{{ session('update') }}</span>
            @endif
            <form wire:submit.prevent="submitForm">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="ticket-number" class="block text-gray-700">Ticket Number</label>
                        <input type="text" id="ticket-number" wire:model="ticket_number" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('ticket_number') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="route_name" class="block text-gray-700">Route Name</label>
                        <input type="text" id="route_name" wire:model.debounce.500ms="route_name" x-on:keydown.space="$wire.checkRouteName()" class="w-full p-2 border border-gray-300 rounded mt-1">

                        @error('route_name') <span class="text-red-500">{{ $message }}</span> @enderror
                        @if($routeError) <span class="text-red-500">{{ $routeError }}</span> @endif
                    </div>
                    <div>
                        <label for="customer-name" class="block text-gray-700">Customer Name</label>
                        <input type="text" id="customer-name" wire:model="customer_name" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('customer_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="customer-cnic" class="block text-gray-700">Customer CNIC *</label>
                        <input type="text" id="customer-cnic" wire:model="customer_cnic" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('customer_cnic') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="departure-city" class="block text-gray-700">Departure City</label>
                        <input type="text" id="departure-city" wire:model="departure_city" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('departure_city') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="departure-date" class="block text-gray-700">Departure Date</label>
                        <input type="date" id="departure-date" wire:model="departure_date" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('departure_date') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="destination-city" class="block text-gray-700">Destination City</label>
                        <input type="text" id="destination-city" wire:model="destination_city" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('destination_city') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="destination_arrival_time" class="block text-gray-700">Arrival Date</label>
                        <input type="date" id="destination_arrival_time" wire:model="destination_arrival_time" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('destination_arrival_time') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="price" class="block text-gray-700">Price</label>
                        <input type="number" id="price" wire:model="price" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('price') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="category" class="block text-gray-700">Category</label>
                        <select id="category" wire:model="category" class="w-full p-2 border border-gray-300 rounded mt-1">
                            <option value="">Choose Category</option>
                            <option value="economy">Economy</option>
                            <option value="business">Business</option>
                            <option value="luxury">Luxury</option>
                        </select>
                        @error('category') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                  
                    <div>
                        <label for="available_seats" class="block text-gray-700">Available Seats</label>
                        <input type="number" id="available_seats" wire:model="available_seats" class="w-full p-2 border border-gray-300 rounded mt-1" readonly>
                        @if($available_seats)
                            {{-- <p class="text-gray-600 mt-1">{{ $available_seats }}</p> --}}
                        @endif
                        @error('available_seats') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-span-2">
                        <label for="ticket-confirm" class="block text-gray-700">Ticket Confirm</label>
                        <input type="checkbox" id="ticket-confirm" wire:model="ticket_confirm" class="mr-2 leading-tight">
                        <span class="text-sm">Yes</span>
                        @error('ticket_confirm') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit" class="mt-6 bg-blue-500 text-white p-2 rounded shadow-md hover:bg-blue-600 transition duration-300">{{ $isEdit ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
    </div>
</div>
