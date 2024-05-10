<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribe') }}
        </h2>
    </x-slot>

    <style>
        .custom-button {
            background-color: #17a3a8; /* Set the background color to red */
            color: #FFFFFF; /* Set the text color to white */
            /* Add any other desired styles */
        }
    </style>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class>
                <button class="p-6 text-gray-900 custom-button">
                    {{ __("Subscribe") }}
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
