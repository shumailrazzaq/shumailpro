<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"style="margin-left:50px;margin-top:50px;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"style="margin-top:50px;">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
