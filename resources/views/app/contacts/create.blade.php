<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact :: Create
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-slot name="title">
                    <a href="{{ route('dashboard') }}" class="mr-4"><i class="mr-1 icon ion-md-arrow-back"></i></a>
                </x-slot>

                <form method="POST" action="{{ route('contacts.store') }}" class="mt-4" >
                    @include('app.contacts.form')

                    <div class="mt-10">
                        <a href="{{ route('dashboard') }}" class="button inline-flex items-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                            </svg>
                            {{__('Back')}}
                        </a>

                        <button type="submit" class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{__('Create')}}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
