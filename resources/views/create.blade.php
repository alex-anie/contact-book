<x-layout>
<x-nav>Create Contact</x-nav>
<main class="max-w-2xl mx-auto p-6 bg-white shadow rounded-xl mt-5">
    <h1 class="text-2xl font-bold text-gray-800 border-b pb-4">Create New Contact</h1>

    <form action="/contacts" method="POST" class="space-y-4">
        @csrf

        <!-- Full Name -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Full Name</label>
            <input type="text" name="full_name" value="{{ old('full_name') }}" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">

            @error('full_name')
                <p class="text-red-500 text-xs">{{$message}}</p>
            @enderror
        </div>

        <!-- Phone -->
        <div>
            <label class="block text-gray-700 font-medium mb-1" for="phone">Phone</label>
            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
            
            @error('phone')
                <p class="text-red-500 text-xs">{{$message}}</p>
            @enderror
        </div>

        <!-- Relationship Status -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Relationship Status</label>
            <input type="text" name="relationship" value="{{ old('relationship') }}" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">

            @error('relationship')
                <p class="text-red-500 text-xs">{{$message}}</p>
            @enderror
        </div>

        <!-- Bio -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Bio</label>
            <textarea name="bio" rows="4"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">{{ old('bio') }}</textarea>
            @error('bio')
                <p class="text-red-500 text-xs">{{$message}}</p>
            @enderror
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-3 justify-between">
           
            <a href="/" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
                Cancel
            </a>

             <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                Create Contact
            </button>
        </div>
    </form>
</main>
</x-layout>