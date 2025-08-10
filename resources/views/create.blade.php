<x-layout>
<x-nav>Create Contact</x-nav>
<main class="max-w-2xl mx-auto p-6 bg-white shadow rounded-xl mt-5">
    <h1 class="text-2xl font-bold text-gray-800 border-b pb-4">Create New Contact</h1>

    <form action="" method="POST" class="space-y-4">
        @csrf

        <!-- Full Name -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Full Name</label>
            <input type="text" name="name" value="" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
        </div>

        <!-- Phone -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Phone</label>
            <input type="text" name="phone" value="" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
        </div>

        <!-- Relationship Status -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Relationship Status</label>
            <input type="text" name="relationship" value="" 
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2">
        </div>

        <!-- Bio -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Bio</label>
            <textarea name="bio" rows="4" 
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-2"></textarea>
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