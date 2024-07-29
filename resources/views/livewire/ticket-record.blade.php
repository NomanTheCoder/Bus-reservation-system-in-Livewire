<div class="flex">

    <div class="w-full p-8">
       <div> <a href="{{url('/dashboard')}}" wire:navigate><button class=" text-black font-bold py-2">
           <- Back
        </button></a></div>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                   <tr>
                        <th class="w-1/12 px-4 py-2">ID</th>
                        <th class="w-2/12 px-4 py-2">Ticket Number</th>
                        <th class="w-2/12 px-4 py-2">Customer Name</th>
                        <th class="w-2/12 px-4 py-2">Customer CNIC</th>
                        <th class="w-2/12 px-4 py-2">Departure Date</th>
                        <th class="w-2/12 px-4 py-2">Departure City</th>
                        <th class="w-2/12 px-4 py-2">Destination City</th>
                        <th class="w-2/12 px-4 py-2">Arrival Time</th>
                        <th class="w-1/14 px-4 py-2">Confirmed</th>
                        <th class="w-1/12 px-4 py-2">Price</th>
                        <th class="w-1/12 px-4 py-2">Category</th>
                        <th class="w-2/12 px-4 py-2">Created At</th>
                        <th class="w-2/12 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($tickets as $ticket)
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">{{ $ticket->id }}</td>
                            <td class="border px-4 py-2">{{$ticket->ticket_number}}</td>
                            <td class="border px-4 py-2">{{$ticket->customer_name}}</td>
                            <td class="border px-4 py-2">{{$ticket->customer_cnic}}</td>
                            <td class="border px-4 py-2">{{$ticket->departure_date}}</td>
                            <td class="border px-4 py-2">{{$ticket->departure_city}}</td>
                            <td class="border px-4 py-2">{{$ticket->destination_city}}</td>
                            <td class="border px-4 py-2">{{$ticket->destination_arrival_time}}</td>
                            <td class="border px-4 py-2">{{$ticket->ticket_confirm}}</td>
                            <td class="border px-4 py-2">{{$ticket->price}}</td>
                            <td class="border px-4 py-2">{{$ticket->category}}</td>
                            <td class="border px-4 py-2">{{$ticket->created_at}}</td>
                            <td class="border px-4 py-2">
                                <div class="flex space-x-2">
                                    <button wire:click="navigateToEdit({{ $ticket->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </button>
                                    
                                    <button wire:click='delete("{{$ticket->id}}")' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </div>
                            </td>
                           
                        </tr>
                   
                        
                        @endforeach
                </tbody>
            </table>
            <div>{{$tickets->links()}}</div>
        </div>
    </div>
</div>

