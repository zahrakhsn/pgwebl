<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome card --}}
            <div class="bg-white shadow-xl sm:rounded-xl p-8 mb-8 text-center">
                <h3 class="text-3xl font-bold text-blue-600 mb-2">Welcome back, {{ auth()->user()->name }} 👋</h3>
                <p class="text-gray-500 text-lg">You're logged in and ready to explore your dashboard.</p>
                <button class="mt-6 px-5 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-medium shadow">
                    Get Started
                </button>
            </div>

        </div>
    </div>
</x-app-layout>
