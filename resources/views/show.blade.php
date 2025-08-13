<x-layout>
<x-nav>Details Page</x-nav>

@if (session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

<main class="max-w-2xl mx-auto p-6 bg-white shadow rounded-xl space-y-6 mt-4">
    <!-- Header Section -->
    <section class="flex items-center gap-4 border-b pb-4">
        <div class="flex items-center justify-center w-14 h-14 bg-blue-500 text-white text-2xl font-bold rounded-full">
            {{ $contact->full_name[0] }}
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-800">{{ $contact->full_name }}</p>
        </div>
    </section>

    <!-- Action Buttons -->
    <div class="flex gap-3 border-b pb-4">
        <a href="/" 
           class="flex items-center gap-2 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
            <span>
                <!-- Home Icon -->
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07926 0.222253C7.31275 -0.007434 7.6873 -0.007434 7.92079 0.222253L14.6708 6.86227C14.907 7.09465 14.9101 7.47453 14.6778 7.71076C14.4454 7.947 14.0655 7.95012 13.8293 7.71773L13 6.90201V12.5C13 12.7761 12.7762 13 12.5 13H2.50002C2.22388 13 2.00002 12.7761 2.00002 12.5V6.90201L1.17079 7.71773C0.934558 7.95012 0.554672 7.947 0.32229 7.71076C0.0899079 7.47453 0.0930283 7.09465 0.32926 6.86227L7.07926 0.222253ZM7.50002 1.49163L12 5.91831V12H10V8.49999C10 8.22385 9.77617 7.99999 9.50002 7.99999H6.50002C6.22388 7.99999 6.00002 8.22385 6.00002 8.49999V12H3.00002V5.91831L7.50002 1.49163ZM7.00002 12H9.00002V8.99999H7.00002V12Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </span>
            <span>Home</span>
        </a>

        <a href="/{{ $contact->id }}/edit" 
           class="flex items-center gap-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
            <span>
                <!-- Edit Icon -->
                <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor"><path d="M11.8536 1.14645C11.6583 0.951184 11.3417 0.951184 11.1465 1.14645L3.71455 8.57836C3.62459 8.66832 3.55263 8.77461 3.50251 8.89155L2.04044 12.303C1.9599 12.491 2.00189 12.709 2.14646 12.8536C2.29103 12.9981 2.50905 13.0401 2.69697 12.9596L6.10847 11.4975C6.2254 11.4474 6.3317 11.3754 6.42166 11.2855L13.8536 3.85355C14.0488 3.65829 14.0488 3.34171 13.8536 3.14645L11.8536 1.14645Z"/></svg>
            </span>
            <span>Edit</span>
        </a>

        <a href="#" 
           class="flex items-center gap-2 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
            <span>
                <!-- Delete Icon -->
                <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor"><path d="M5.5 1C5.22386 1 5 1.22386 5 1.5C5 1.77614 5.22386 2 5.5 2H9.5C9.77614 2 10 1.77614 10 1.5C10 1.22386 9.77614 1 9.5 1H5.5ZM3 3.5C3 3.22386 3.22386 3 3.5 3H5H10H11.5C11.7761 3 12 3.22386 12 3.5C12 3.77614 11.7761 4 11.5 4H11V12C11 12.5523 10.5523 13 10 13H5C4.44772 13 4 12.5523 4 12V4L3.5 4C3.22386 4 3 3.77614 3 3.5ZM5 4H10V12H5V4Z"/></svg>
            </span>
            <span>Delete</span>
        </a>
    </div>

    <!-- Contact Info -->
    <div class="space-y-2 border-b pb-4">
        <h2 class="text-lg font-semibold text-gray-800">Contact info</h2>
        <div class="flex items-center gap-3 text-gray-700">
            <span class="text-blue-500">
                <!-- Phone Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
            </span>
            <p>{{ $contact->phone }}</p>
        </div>
    </div>

    <!-- Relationship Status -->
    <div class="space-y-2 border-b pb-4">
        <h2 class="text-lg font-semibold text-gray-800">Relationship Status</h2>
        <div class="flex items-center gap-3 text-gray-700">
            <span class="text-purple-500">
                <!-- Icon -->
                <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor"><path d="M7.5 0.875C5.49797 0.875 3.875 2.49797 3.875 4.5C3.875 6.15288 4.98124 7.54738 6.49373 7.98351C5.2997 8.12901 4.27557 8.55134 3.50407 9.31167C2.52216 10.2794 2.02502 11.72 2.02502 13.5999C2.02502 13.8623 2.23769 14.0749 2.50002 14.0749C2.76236 14.0749 2.97502 13.8623 2.97502 13.5999C2.97502 11.8799 3.42786 10.7206 4.17091 9.9883C4.91536 9.25463 6.02674 8.87499 7.49995 8.87499C8.97317 8.87499 10.0846 9.25463 10.8291 9.98831C11.5721 10.7206 12.025 11.8799 12.025 13.5999C12.025 13.8623 12.2376 14.0749 12.5 14.0749C12.7623 14.075 12.975 13.8623 12.975 13.6C12.975 11.72 12.4778 10.2794 11.4959 9.31166C10.7244 8.55135 9.70025 8.12903 8.50625 7.98352C10.0187 7.5474 11.125 6.15289 11.125 4.5C11.125 2.49797 9.50203 0.875 7.5 0.875ZM4.825 4.5C4.825 3.02264 6.02264 1.825 7.5 1.825C8.97736 1.825 10.175 3.02264 10.175 4.5C10.175 5.97736 8.97736 7.175 7.5 7.175C6.02264 7.175 4.825 5.97736 4.825 4.5Z"/></svg>
            </span>
            <p>{{ $contact->relationship }}</p>
        </div>
    </div>

    <!-- Bio -->
    <div class="space-y-2">
        <h2 class="text-lg font-semibold text-gray-800">Bio</h2>
        <div>
            <p class="text-gray-700 leading-relaxed">
                {{ $contact->bio }}
            </p>
        </div>
    </div>
</main>
</x-layout>
