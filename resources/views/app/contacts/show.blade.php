<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact :: Show
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <x-slot name="title">
                    <a href="{{ route('dashboard') }}" class="mr-4"><i
                            class="mr-1 icon ion-md-arrow-back"></i></a>
                </x-slot>

                <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
                    <div class="lg:flex items-center justify-center w-full">

                        <div aria-label="card" tabindex="0"
                            class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                            <div class="flex items-center border-b border-gray-200 pb-6">
                                <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                                <div class="flex items-start justify-between w-full">
                                    <div class="pl-3 w-full">
                                        <p tabindex="0"
                                            class="focus:outline-none text-xl font-bold leading-5 text-gray-800  ">
                                            {{ $contact->name }}</p>
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">
                                            Contact: {{ $contact->contact_number }}</p>
                                    </div>
                                    <div aria-label="bookmark" role="img">
                                        <svg class="focus:outline-none text-gray-800" width="28" height="28"
                                            viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                                stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2">
                                <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">
                                   Email: {{ $contact->email }}
                                </p>
                                <div tabindex="0" class="focus:outline-none flex">

                                    <div class="py-2 flex items-center justify-center">

                                        <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                                            </svg>
                                            {{__('Back')}}
                                        </a>

                                        <a href="{{ route('contacts.edit', $contact) }}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            Edit
                                        </a>

                                        <form action="{{ route('contacts.delete', $contact) }}" method="POST" onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
