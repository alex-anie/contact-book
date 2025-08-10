<x-layout>
    <x-nav>Contact Lists</x-nav>
    <main class="w-[40%] mx-auto mt-10 space-y-2">
            <section class="w-full">
                <a href="show/1" 
                class="w-full flex items-center gap-4 p-4 bg-white rounded-xl shadow hover:shadow-md transition">
                    <!-- First letter as an avatar -->
                    <p class="flex items-center justify-center w-12 h-12 bg-blue-500 text-white text-lg font-bold rounded-full">
                        A
                    </p>
                    <!-- Contact name -->
                    <p class="text-gray-800 font-medium">Alex Anie</p>
                </a>
            </section>

            <section class="w-full">
                <a href="show/2" 
                class="w-full flex items-center gap-4 p-4 bg-white rounded-xl shadow hover:shadow-md transition">
                    <!-- First letter as an avatar -->
                    <p class="flex items-center justify-center w-12 h-12 bg-blue-500 text-white text-lg font-bold rounded-full">
                        A
                    </p>
                    <!-- Contact name -->
                    <p class="text-gray-800 font-medium">Alex Anie</p>
                </a>
            </section>

            <section class="w-full">
                <a href="show/3" 
                class="w-full flex items-center gap-4 p-4 bg-white rounded-xl shadow hover:shadow-md transition">
                    <!-- First letter as an avatar -->
                    <p class="flex items-center justify-center w-12 h-12 bg-blue-500 text-white text-lg font-bold rounded-full">
                        A
                    </p>
                    <!-- Contact name -->
                    <p class="text-gray-800 font-medium">Alex Anie</p>
                </a>
            </section>
        </main>

        <section class="absolute right-20 bottom-20">
            <a href="/create">
            <span
                class="flex items-center justify-center w-10 h-10 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" 
                    xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                    <path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z" 
                        fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"/>
                </svg>
            </span>
        </a>
        </section>
</x-layout>