<!-- Well begun is half done. - Aristotle -->
<div onclick="document.getElementById('viewRecipe').classList.remove('hidden'); document.body.classList.add('overflow-hidden'); " class="w-[280px] h-[478px] bg-white border border-gray-200 rounded-lg shadow-lg">
    <!-- Image Container with Category Tag -->
    <div class="relative">
        <a>
            <img class="w-full h-48 object-cover" src="{{ $image }}" alt="{{ $title }}" />
             <!-- <img class="rounded-t-lg object-cover h-59 w-full" src="" alt="There's food in here somewhere..." /> -->
        </a>
        <!-- Category Tag -->
        <div class="absolute top-3 right-3">
            <span class="px-3 py-1 rounded-full text-xs font-medium text-white {{ $categoryColor }}">
                {{ $category }}
            </span>
        </div>
    </div>
        
    <!-- Content Area -->
    <div class="p-5 flex-1 flex flex-col">
        <a href="#">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $title }}</h5>
        </a>
        
        <p class="mb-4 line-clamp-2 text-gray-600 text-sm leading-relaxed flex-1">{{ $description }}</p>
                        
        <!-- Metadata Row: Time, Servings, and Likes -->
        <div class="flex items-center gap-4 mb-4">
            <!-- Time -->
            <div class="flex items-center">
                <svg class="text-gray-500 w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-gray-600 text-sm">{{ $prepTime }}</p>
            </div>

            <!-- Servings -->
            <div class="flex items-center">
                <svg class="text-gray-500 w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <p class="text-gray-600 text-sm">{{ $servings }}</p>
            </div>

            <!-- Likes -->
            <div class="flex items-center ml-auto">
                <svg class="text-gray-500 w-4 h-4 mr-1.5 cursor-pointer hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <p class="text-gray-600 text-sm">{{ $likes }}</p>
            </div>
        </div>

        <!-- User/Author Section -->
        <div class="flex items-center pt-3 border-t border-gray-100">
            <img 
                src="{{ $userAvatar }}" 
                alt="{{ $userName }}" 
                class="w-8 h-8 rounded-full mr-2 object-cover"
            />
            <p class="text-gray-600 text-sm">{{ $userName }}</p>
        </div>
    </div>
</div>
