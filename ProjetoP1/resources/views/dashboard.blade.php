<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen flex items-center justify-center">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
            Bem-vindo, {{ Auth::user()->name }}!
        </h3>
    </div>
</x-app-layout>
