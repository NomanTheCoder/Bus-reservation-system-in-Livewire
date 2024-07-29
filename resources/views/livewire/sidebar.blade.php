<div class="h-screen bg-gray-800 text-white w-64">
    <div class="p-4">
        <div class="text-2xl font-bold text-center">
            <i class="fas fa-ticket-alt"></i> Ticket System
        </div>
    </div>
    <nav class="mt-5">
        <a href="{{ url('/dashboard') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-tachometer-alt h-6 w-6 mr-2"></i> <!-- Dashboard icon -->
            Dashboard
        </a>
        <a href="{{ url('/tickets') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-calendar-check h-6 w-6 mr-2"></i> <!-- Ticket Booking icon -->
            Ticket Booking
        </a>
        <a href="{{ url('/info') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-users h-6 w-6 mr-2"></i> <!-- Drivers icon -->
            Drivers
        </a>
        <a href="{{ url('/record') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-archive h-6 w-6 mr-2"></i> <!-- Ticket Records icon -->
            Ticket Records
        </a>
        <a href="{{ url('/driver') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-user-plus h-6 w-6 mr-2"></i> <!-- Add Drivers icon -->
            Add Drivers
        </a>
        <a href="{{ url('/routes') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-route h-6 w-6 mr-2"></i> <!-- Routes icon -->
            Routes
        </a>
        <a href="{{ url('/shifts') }}" wire:navigate class="flex items-center p-4 text-white hover:bg-gray-700 transition duration-300">
            <i class="fas fa-clock h-6 w-6 mr-2"></i> <!-- Current Shifts icon -->
            Current Shifts
        </a>
    </nav>
</div>
