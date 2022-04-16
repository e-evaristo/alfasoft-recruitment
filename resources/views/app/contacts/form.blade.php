@php $editing = isset($contact) @endphp
@csrf
<div class="flex flex-wrap -mx-3 mb-6">

    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Name
        </label>
        <input
            class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            id="name" name="name" type="text" placeholder="Full name"
            value="{{ old('name', $editing ? $contact->name : '') }}">
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Contact
        </label>
        <input
            class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="contact_number" name="contact_number" type="text" placeholder="Contact number"
            value="{{ old('contact_number', $editing ? $contact->contact_number : '') }}">
        @error('contact_number')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            Email Address
        </label>
        <input
            class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="email" name="email" type="text" placeholder="Your best email address"
            value="{{ old('email', $editing ? $contact->email : '') }}">
        @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>
