<div class="flex">
    <div class="w-full p-8">
        <div>
            <a href="{{url('/dashboard')}}" wire:navigate>
                <button class="text-black font-bold py-2">
                    <- Back
                </button>
            </a>
        </div>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg mt-4">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/12 px-2 py-2">ID</th>
                        <th class="w-1/12 px-2 py-2">Name</th>
                        <th class="w-1/12 px-2 py-2">Email</th>
                        <th class="w-1/12 px-2 py-2">Phone</th>
                        <th class="w-1/12 px-2 py-2">License No</th>
                        <th class="w-1/12 px-2 py-2">Expiry Date</th>
                        <th class="w-2/12 px-2 py-2">Address</th>
                        <th class="w-1/12 px-2 py-2">DOB</th>
                        <th class="w-1/12 px-2 py-2">Emergency Contact</th>
                        <th class="w-1/12 px-2 py-2">Experience</th>
                        <th class="w-1/12 px-2 py-2">Bus ID</th>
                        <th class="w-1/12 px-2 py-2">Status</th>
                        <th class="w-2/12 px-2 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($drivers as $driver)
                        <tr class="bg-gray-100">
                            <td class="border px-2 py-2">{{ $driver->driver_id }}</td>
                            <td class="border px-2 py-2">{{ $driver->name }}</td>
                            <td class="border px-2 py-2">{{ $driver->email }}</td>
                            <td class="border px-2 py-2">{{ $driver->phone_number }}</td>
                            <td class="border px-2 py-2">{{ $driver->license_number }}</td>
                            <td class="border px-2 py-2">{{ $driver->license_expiry_date }}</td>
                            <td class="border px-2 py-2">{{ $driver->address }}</td>
                            <td class="border px-2 py-2">{{ $driver->date_of_birth }}</td>
                            <td class="border px-2 py-2">{{ $driver->emergency_contact_number }}</td>
                            <td class="border px-2 py-2">{{ $driver->years_of_experience }}</td>
                            <td class="border px-2 py-2">{{ $driver->assigned_bus_id }}</td>
                            <td class="border px-2 py-2">
                                <button class="py-1 px-3 rounded-full font-semibold 
                                {{ $driver->is_active ? 'bg-green-500 text-white hover:bg-green-600' : 'bg-red-500 text-white hover:bg-red-600' }}">
                                {{ $driver->is_active ? 'Active' : 'Inactive' }}
                            </button>
                            
                            
                            </td>
                            <td class="border px-2 py-2">
                                <div class="flex space-x-2">
                                    <button wire:click="navigateToEdit('{{ $driver->driver_id }}')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                        Edit
                                    </button>
                                    <button wire:click='delete("{{$driver->driver_id}}")' class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $drivers->links() }}
            </div>
        </div>
    </div>
</div>
