<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts List') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 mb-4 shadow-md" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">{{ session()->get('message') }}</p>
                  </div>
                </div>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="p-4">
                                <div class="relative mt-1">
                                    <div class="flex items-center justify-between">
                                        <a href="{{ route('contacts.create') }}" class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            {{__('Create New')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>

                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Contact
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Edit
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr class="bg-white border-bhover:bg-gray-50">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            <a href="{{ route('contacts.show', $contact) }}">{{ $contact->id }}</a>
                                        </th>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('contacts.show', $contact) }}"><span class="underline">{{ $contact->name }}</span></a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('contacts.show', $contact) }}">{{ $contact->contact_number }}</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('contacts.show', $contact) }}">{{ $contact->email }}</a>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('contacts.edit', $contact) }}" class="text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <form action="{{ route('contacts.delete', $contact) }}" method="POST" onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                                @csrf @method('DELETE')
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($contacts->hasPages())
                            <div class="py-2 px-2 bg-gray-50 border-t">
                                {{ $contacts->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
