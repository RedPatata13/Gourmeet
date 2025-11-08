@extends('layouts.AppLayout')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
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

        <!-- Additional Information Section -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Additional Information</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @if($recipe->difficulty)
                <div>
                    <h3 class="font-semibold text-gray-900 mb-2">Difficulty Level</h3>
                    <div class="flex items-center space-x-2">
                        @php
                            $difficultyLevels = [
                                'easy' => 1,
                                'medium' => 2,
                                'hard' => 3
                            ];
                            $currentLevel = $difficultyLevels[strtolower($recipe->difficulty)] ?? 1;
                        @endphp
                        
                        @for($i = 1; $i <= 3; $i++)
                            <div class="w-3 h-3 rounded-full {{ $i <= $currentLevel ? 'bg-green-500' : 'bg-gray-300' }}"></div>
                        @endfor
                        <span class="text-gray-700 ml-2 capitalize">{{ $recipe->difficulty }}</span>
                    </div>
                </div>
                @endif
                
                @if($recipe->cuisine)
                <div>
                    <h3 class="font-semibold text-gray-900 mb-2">Cuisine</h3>
                    <p class="text-gray-700">{{ $recipe->cuisine }}</p>
                </div>
                @endif
                
                @if(isset($recipe->tags) && is_array($recipe->tags) && count($recipe->tags) > 0)
                <div class="md:col-span-2">
                    <h3 class="font-semibold text-gray-900 mb-2">Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($recipe->tags as $tag)
                            <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Comments Section -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3">
                <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <span>Comments</span>
            </h2>
            
            <!-- Comment Form -->
            <div class="mb-8">
                <form class="space-y-4">
                    <textarea 
                        placeholder="Share your thoughts about this recipe..." 
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"
                        rows="4"
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
                <!-- Sample Comment (replace with dynamic data) -->
                <div class="flex space-x-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-orange-400 to-pink-500 rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                        A
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <h4 class="font-semibold text-gray-900">Alex Johnson</h4>
                            <span class="text-gray-500 text-sm">2 days ago</span>
                        </div>
                        <p class="text-gray-700">This recipe was amazing! My whole family loved it. The instructions were clear and easy to follow.</p>
                        <div class="flex items-center space-x-4 mt-2">
                            <button class="text-gray-500 hover:text-red-500 text-sm flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                </svg>
                                <span>12</span>
                            </button>
                            <button class="text-gray-500 hover:text-blue-500 text-sm">Reply</button>
                        </div>
                    </div>
                </div>
                
                <!-- Add more comments dynamically here -->
            </div>
        </div>
    </div>
</div>
@endsection