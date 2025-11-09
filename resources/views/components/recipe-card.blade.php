<div class="relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100 h-260 w-200 flex flex-col">

    <!-- Clickable area only for image -->
    <div class="relative flex-shrink-0">
        <a href="{{ route('recipeDetails', $recipe) }}">

        <img 
            src="{{ $recipe->cover_image ? asset('storage/' . $recipe->cover_image) : 'https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=' }}" 
            alt="{{ $recipe->title }}" 
            class="w-full h-full object-cover"
        >

        </a>

        <!-- Time badge -->
        <div class="absolute top-4 right-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm font-medium backdrop-blur-sm">
            ⏱ {{ $recipe->total_time }}min
        </div>
    </div>

    <!-- Information section -->
    <div class="relative bg-white/90 backdrop-blur-sm p-4 flex flex-col space-y-3 mt-auto">
        <!-- Header with user info -->
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                {{ substr($recipe->user->name ?? 'U', 0, 1) }}
            </div>
            <div class="flex-1">
                <h3 class="font-semibold text-gray-900 cursor-pointer hover:underline" onclick="window.location='{{ route('profile', $recipe->user->id ?? '#') }}'">
                    {{ $recipe->user->name ?? 'Unknown Chef' }}
                </h3>
                <p class="text-xs text-gray-500">Posted recipe</p>
            </div>
            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                </svg>
            </button>
        </div>

        <!-- Title -->
        <h2 
            class="text-xl font-bold text-gray-900 cursor-pointer hover:underline"
            onclick="window.location='{{ route('recipeDetails', $recipe) }}'">
            {{ $recipe->title }}
        </h2>

        <!-- Description -->
        <p class="text-gray-700 leading-relaxed text-sm">{{ Str::limit($recipe->description ?? "Not Set", 120) }}</p>

        <!-- Stats bar -->
        <div class="flex items-center justify-between text-sm text-gray-500">
            <div class="flex items-center space-x-6">
                <div class="flex items-center space-x-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Prep: {{ $recipe->prep_time }}m</span>
                </div>
                <div class="flex items-center space-x-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                    <span>Cook: {{ $recipe->cook_time }}m</span>
                </div>
            </div>
        </div>

        <!-- Action buttons -->
        <div class="flex items-center justify-between border-t border-gray-100 pt-2">
            <div class="flex items-center space-x-4">
                <button 
                    class="flex items-center space-x-2 text-gray-600 hover:text-red-500 transition-colors group like-btn"
                    data-id="{{ $recipe->id }}"
                    onclick="toggleLike(event, {{ $recipe->id }})"
                    >
                    <div class="p-1 rounded-full group-hover:bg-red-50 transition-colors">
                        <svg class="w-5 h-5 heart-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <span class="text-sm like-text">Like</span>
                </button>
                <script>
                        async function toggleLike(event, recipeId) {
                            event.preventDefault();
                            // const csrf_token = csrf_token() ;
                            const button = event.currentTarget;
                            const icon = button.querySelector('.heart-icon');
                            const text = button.querySelector('.like-text');
                                try {
                                    const response = await fetch(`/recipes/${recipeId}/like`, {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                            'Accept': 'application/json',
                                            'Content-Type': 'application/json'
                                        },
                                    });

                                    const data = await response.json();

                                    if (data.status === 'liked') {
                                        icon.setAttribute('fill', 'red');
                                        text.textContent = 'Liked';
                                    } else {
                                        icon.setAttribute('fill', 'none');
                                        text.textContent = 'Like';
                                    }

                                } catch (error) {
                                    console.error('Error toggling like:', error);
                                    alert('Something went wrong while liking this recipe.');
                                }
                            }
                            </script>
                
                <button class="flex items-center space-x-2 text-gray-600 hover:text-blue-500 transition-colors group z-20">
                    <div class="p-1 rounded-full group-hover:bg-blue-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <span class="text-sm">Comment</span>
                </button>
            </div>
            
            <button class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors group">
                <div class="p-1 rounded-full group-hover:bg-green-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                    </svg>
                </div>
                <span class="text-sm">Save</span>
            </button>
        </div>
    </div>
</div>




