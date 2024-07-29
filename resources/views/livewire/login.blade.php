<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-teal-400 to-blue-500">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md bg-gradient-to-br from-yellow-300 via-red-300 to-pink-300">
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Login</h1>

        @if (session()->has('login'))

            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)" class="bg-green-100 text-green-800 p-2 rounded mb-4 shadow-md">
                {{ session('login') }}
            </div>

        @endif

        @if(session('Error'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="bg-white-500 text-red-800 p-2 rounded mb-4 shadow-md">
            {{ session('Error') }}
        </div>
        @endif

        <form wire:submit.prevent="Login">
            <div class="mb-4">
                <label class="block text-gray-800 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" wire:model="email" class="shadow-lg appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-800 text-sm font-bold mb-2" for="password">Password</label>
                <input type="password" id="password" wire:model="password" class="shadow-lg appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-between mb-4">
                <button type="submit" class="bg-gradient-to-r from-teal-500 to-blue-500 hover:from-teal-600 hover:to-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">
                    Login
                </button>
            </div>
        </form>

        <div class="flex justify-end mt-4">
            <a wire:navigate href="{{url('/')}}" class="text-gray-800 text-sm hover:text-blue-500 transition duration-300">Register -></a>
        </div>
    </div>
</div>
