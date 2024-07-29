<div class="flex">
    <div class="w-1/7">
        @include('livewire.sidebar')
    </div>
    <div class="w-3/4 p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="bg-white shadow-lg p-6 rounded-lg flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-center">Available Tickets</h2>
                <p class="text-lg mt-6 text-center">
                    {{ $availableTickets }}
                </p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-center">Total Routes</h2>
                <p class="text-lg mt-6 text-center">
                    {{ $totalRoutes }}
                </p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-center">Active Routes</h2>
                <p class="text-lg mt-6 text-center">
                    {{ $activeRoutes }}
                </p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-center">Total Sales</h2>
                <p class="text-lg mt-6 text-center">
                    {{ $totalSales }}
                </p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-center">Total Drivers</h2>
                <p class="text-lg mt-6 text-center">
                    {{ $totalDrivers }}
                </p>
            </div>
            <div class="bg-white shadow-lg p-6 rounded-lg flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold text-center">Active Drivers</h2>
                <p class="text-lg mt-6 text-center">
                    {{ $activeDrivers }}
                </p>
            </div>
        </div>
    </div>
</div>
