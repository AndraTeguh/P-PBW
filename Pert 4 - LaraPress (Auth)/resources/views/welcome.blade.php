<x-guest-layout>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Selamat Datang di Blog LaraPress
        </h1>
        <p class="text-gray-700 leading-relaxed mb-6">
            Ini adalah halaman utama dari aplikasi blog kita. Untuk memulai, silakan masuk atau daftar.
        </p>

        <div class="flex space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border  border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</x-guest-layout>
