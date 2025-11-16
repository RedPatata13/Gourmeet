@extends('layouts.AppLayout')

@section('content')
<div class="min-h-screen bg-gray-50 py-8 flex justify-center">
    <div class="w-4/5 px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-8">
            
            <div class="relative h-96 w-full">
                <img 
                    src="{{ $recipe->cover_image ? asset('storage/' . $recipe->cover_image) : 'https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=' }}" 
                    alt="{{ $recipe->title }}" 
                    class="w-full h-full object-cover"
                >
                
                <div class="absolute top-6 right-6 bg-black/70 text-white px-4 py-2 rounded-full text-lg font-medium backdrop-blur-sm">
                    ⏱ {{ $recipe->total_time }}min
                </div>
                
                <a href="{{ url()->previous() }}" class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-white transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span>Back</span>
                </a>
                
                @if(auth()->check() && auth()->id() === $recipe->user_id)
                    {{-- <a href="{{ route('recipes.edit', $recipe) }}" class="absolute top-6 right-36 bg-white/90 backdrop-blur-sm text-gray-700 px-4 py-2 rounded-full font-medium hover:bg-white transition-colors flex items-center space-x-2"> --}}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2M12 5v14m7-7h-2m-10 0H5"/>
                        </svg>
                        <span>Edit</span>
                    {{-- </a> --}}
                @endif
            </div>

            <!-- Recipe Info Section -->
            <div class="p-8">
                <!-- User Info and Actions -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-lg">
                            {{ substr($recipe->user->name ?? 'U', 0, 1) }}
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-lg">{{ $recipe->user->name ?? 'Unknown Chef' }}</h3>
                            <p class="text-sm text-gray-500">Posted {{ $recipe->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-red-500 transition-colors group">
                            <div class="p-2 rounded-full group-hover:bg-red-50 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <span class="font-medium">Like</span>
                        </button>
                        
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-green-600 transition-colors group">
                            <div class="p-2 rounded-full group-hover:bg-green-50 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                            </div>
                            <span class="font-medium">Save</span>
                        </button>
                    </div>
                </div>

                <!-- Recipe Title and Description -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $recipe->title }}</h1>
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $recipe->body }}</p>
                </div>

                <!-- Recipe Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gray-50 rounded-xl p-6 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-2">{{ $recipe->prep_time }}m</div>
                        <div class="text-gray-600 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Prep Time</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-6 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-2">{{ $recipe->cook_time }}m</div>
                        <div class="text-gray-600 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            <span>Cook Time</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-6 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-2">{{ $recipe->servings ?? '4' }}</div>
                        <div class="text-gray-600 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>Servings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ingredients and Instructions Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Ingredients Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Ingredients</span>
                </h2>
                
                <ul class="space-y-4">
                    @if(isset($recipe->ingredients) && is_array($recipe->ingredients))
                        @foreach($recipe->ingredients as $ingredient)
                            <li class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                                <span class="text-gray-700">{{ $ingredient }}</span>
                            </li>
                        @endforeach
                    @else
                        <li class="text-gray-500 italic">No ingredients listed</li>
                    @endif
                </ul>
            </div>

            <!-- Instructions Card -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <span>Instructions</span>
                </h2>
                
                <ol class="space-y-6">
                    @if(isset($recipe->instructions) && is_array($recipe->instructions))
                        @foreach($recipe->instructions as $index => $instruction)
                            <li class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center flex-shrink-0 font-semibold">
                                    {{ $index + 1 }}
                                </div>
                                <p class="text-gray-700 leading-relaxed">{{ $instruction }}</p>
                            </li>
                        @endforeach
                    @else
                        <li class="text-gray-500 italic">No instructions provided</li>
                    @endif
                </ol>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3">
                <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <span>Comments</span>
            </h2>
            
            <!-- Comment Form -->
            <div class="mb-8">
                <form action="{{ route('recipe.comment', $recipe) }}" method="POST" class="space-y-4">
                    @csrf
                    <textarea 
                        name="body"
                        placeholder="Share your thoughts about this recipe..." 
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                        rows="4"
                        required
                    ></textarea>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-xl hover:bg-blue-600 transition-colors font-medium">
                            Post Comment
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Comments List -->
            <div class="space-y-6">
                @forelse($recipe->comments as $comment)
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-orange-400 to-pink-500 rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                            {{ substr($comment->user->name ?? 'U', 0, 1) }}
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-2">
                                    <h4 class="font-semibold text-gray-900">{{ $comment->user->name ?? 'Anonymous' }}</h4>
                                    <span class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                @if(auth()->check() && auth()->id() === $comment->user_id)
                                    {{-- <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-500 text-sm">Delete</button>
                                    </form> --}}
                                @endif
                            </div>
                            <p class="text-gray-700">{{ $comment->body }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 italic">No comments yet. Be the first to comment!</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
