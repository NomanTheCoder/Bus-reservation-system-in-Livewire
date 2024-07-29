<div class="flex">
    <div class="w-full p-8">
        <div>
            <a href="{{ url('/dashboard') }}">
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
                        <th class="w-2/12 px-2 py-2">Name</th>
                        <th class="w-2/12 px-2 py-2">Phone</th>
                        <th class="w-2/12 px-2 py-2">License No</th>
                        <th class="w-1/12 px-2 py-2">Bus ID</th>
                        <th class="w-2/10 px-2 py-2">Status</th>
                        <th class="w-2/12 px-2 py-2">Shift Start</th>
                        <th class="w-2/12 px-2 py-2">Shift End</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($drivers as $driver)
                    <tr class="bg-gray-100">
                        <td class="border px-2 py-2">{{$driver->driver_id}}</td>
                        <td class="border px-2 py-2">{{$driver->name}}</td>
                        <td class="border px-2 py-2">{{$driver->phone_number}}</td>
                        <td class="border px-2 py-2">{{$driver->license_number}}</td>
                        <td class="border px-2 py-2">{{$driver->assigned_bus_id}}</td>
                        <td class="border px-2 py-2">
                            <button class="py-1 px-3 rounded-full font-semibold 
                                {{ $driver->is_active ? 'bg-green-500 text-white hover:bg-green-600' : 'bg-red-500 text-white hover:bg-red-600' }}">
                                {{ $driver->is_active ? 'Active' : 'Inactive' }}
                            </button>
                        </td>
                        <td class="border px-2 py-2">{{$driver->shift_start_time}}</td>
                        <td class="border px-2 py-2">{{$driver->shift_end_time}}</td>
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
