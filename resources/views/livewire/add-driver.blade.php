<div class="min-h-screen flex flex-row">
    <div class="w-1/4 bg-gray-800 text-white p-4">
        @include('livewire.sidebar')
    </div>

    <div class="w-3/4 p-6 bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Driver Form</h2>
            @if(Session('success'))
                <span class="text-green-700">{{ session('success') }}</span>
            @endif
            @if(session('update'))
                <span class="text-green-700">{{ session('update') }}</span>
            @endif
            <form wire:submit.prevent="create">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" wire:model="name" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" wire:model="email" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="phone_number" class="block text-gray-700">Phone Number</label>
                        <input type="text" id="phone_number" wire:model="phone_number" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="license_number" class="block text-gray-700">License Number</label>
                        <input type="text" id="license_number" wire:model="license_number" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('license_number') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="license_expiry_date" class="block text-gray-700">License Expiry Date</label>
                        <input type="date" id="license_expiry_date" wire:model="license_expiry_date" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('license_expiry_date') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="address" class="block text-gray-700">Address</label>
                        <input type="text" id="address" wire:model="address" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="date_of_birth" class="block text-gray-700">Date of Birth</label>
                        <input type="date" id="date_of_birth" wire:model="date_of_birth" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('date_of_birth') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="emergency_contact_number" class="block text-gray-700">Emergency Contact Number</label>
                        <input type="text" id="emergency_contact_number" wire:model="emergency_contact_number" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('emergency_contact_number') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="years_of_experience" class="block text-gray-700">Years of Experience</label>
                        <input type="number" id="years_of_experience" wire:model="years_of_experience" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('years_of_experience') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="assigned_bus_id" class="block text-gray-700">Assigned Bus ID</label>
                        <input type="text" id="assigned_bus_id" wire:model="assigned_bus_id" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('assigned_bus_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="is_active" class="block text-gray-700">Status</label>
                        <select id="is_active" name="is_active" class="w-full p-2 border border-gray-300 rounded mt-1" wire:model='is_active'>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('is_active') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="shift_start_time" class="block text-gray-700">Shift Start Time</label>
                        <input type="time" id="shift_start_time" wire:model="shift_start_time" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('shift_start_time') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="shift_end_time" class="block text-gray-700">Shift End Time</label>
                        <input type="time" id="shift_end_time" wire:model="shift_end_time" class="w-full p-2 border border-gray-300 rounded mt-1">
                        @error('shift_end_time') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit" class="mt-6 bg-blue-500 text-white p-2 rounded shadow-md hover:bg-blue-600 transition duration-300">{{ $isEdit ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
    </div>
</div>
