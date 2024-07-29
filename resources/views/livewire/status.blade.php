<div class="container mx-auto px-4 py-8">
    {{-- @if($tickets->isEmpty())
        <div class="bg-red-100 text-red-700 p-4 rounded">
            <p>No tickets available.</p>
        </div>
    @else --}}
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Ticket Number</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Route Name</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Customer Name</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Departure City</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Departure Date</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Destination City</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Arrival Date</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Price</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Category</th>
                        <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($tickets as $ticket)
                        <tr class="bg-gray-100 border-b border-gray-200 hover:bg-gray-200">
                            <td class="w-1/6 py-3 px-4">{{ $ticket->ticket_number }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->route_name}}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->customer_name }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->departure_city }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->departure_date }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->destination_city }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->destination_arrival_time }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->price }}</td>
                            <td class="w-1/6 py-3 px-4">{{ $ticket->category }}</td>
                            <td class="w-1/6 py-3 px-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $ticket->status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $ticket->status === 'confirmed' ? 'Confirmed' : 'Pending' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {{-- @endif --}}
</div>
