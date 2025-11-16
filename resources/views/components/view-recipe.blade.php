<div id="viewRecipe" class="fixed inset-0 overflow-y-auto hidden z-50" aria-labelledby="modal-title-viewRecipe" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div id="viewRecipeBackdrop" class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-opacity"></div>    

    <!-- Modal container -->
    <div class="fixed inset-0 flex items-center justify-center p-4 z-50 pointer-events-none">
        <!-- Modal panel -->
        <div id="view-recipe-modal" class="bg-white rounded-xl shadow-2xl w-full max-w-4xl overflow-hidden text-left max-h-[95vh] flex flex-col relative z-50 pointer-events-auto" data-recipe-id="">
            <!-- Close button -->
            <button 
                onclick="document.getElementById('viewRecipe').classList.add('hidden'); document.body.classList.remove('overflow-hidden');" 
                class="absolute top-4 left-4 z-10 text-gray-400 hover:text-gray-700 transition bg-white rounded-full p-2 shadow-lg"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Content Area - Scrollable -->
            <div class="overflow-y-auto flex-grow" style="max-height: calc(95vh - 140px);">
                <!-- Recipe Image with Category Tag -->
                <div class="relative">
                    <img id="modal-recipe-image" class="w-full h-80 object-cover" src="" alt="" />
                    <!-- Category Tag -->
                    <div class="absolute top-4 right-4">
                        <span id="modal-category-tag" class="px-3 py-1 rounded-full text-xs font-medium text-white">
                        </span>
                    </div>
                </div>

                <!-- Recipe Information -->
                <div class="px-6 py-6">
                    <!-- Title and Description -->
                    <div class="mb-6">
                        <h2 id="modal-recipe-title" class="text-3xl font-bold text-gray-900 mb-3"></h2>
                        <p id="modal-recipe-description" class="text-gray-600 text-base leading-relaxed"></p>
                    </div>

                    <!-- Metadata Row: Time, Servings, and Likes -->
                    <div class="flex items-center gap-6 mb-6 pb-6 border-b border-gray-200">
                        <!-- Time -->
                        <div class="flex items-center">
                            <svg class="text-gray-500 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p id="modal-prep-time" class="text-gray-600"></p>
                        </div>

                        <!-- Servings -->
                        <div class="flex items-center">
                            <svg class="text-gray-500 w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <p id="modal-servings" class="text-gray-600"></p>
                        </div>

                        <!-- Likes -->
                        <div class="flex items-center ml-auto">
                            <svg class="text-gray-500 w-5 h-5 mr-2 cursor-pointer hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <p id="modal-likes" class="text-gray-600"></p>
                        </div>
                    </div>

                    <!-- User/Author Section -->
                    <div class="flex items-center mb-8 pb-6 border-b border-gray-200">
                        <img 
                            id="modal-user-avatar"
                            src="" 
                            alt="" 
                            class="w-10 h-10 rounded-full mr-3 object-cover"
                        />
                        <div class="flex flex-col">
                            <p id="modal-user-name" class="text-gray-900 font-medium"></p>
                            <p class="text-gray-500 text-sm">{{ now()->format('F j, Y') }}</p>
                        </div>
                    </div>

                    <!-- Ingredients Section -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Ingredients</h3>
                        <ul id="modal-ingredients" class="space-y-2 list-none">
                            <li class="flex items-start text-gray-500 italic">
                                <span class="text-gray-400 mr-2 mt-1">•</span>
                                <span>Example ingredient 1</span>
                            </li>
                            <li class="flex items-start text-gray-500 italic">
                                <span class="text-gray-400 mr-2 mt-1">•</span>
                                <span>Example ingredient 2</span>
                            </li>
                            <li class="flex items-start text-gray-500 italic">
                                <span class="text-gray-400 mr-2 mt-1">•</span>
                                <span>Example ingredient 3</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Instructions Section -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Instructions</h3>
                        <ol id="modal-instructions" class="space-y-4 list-none">
                            <li class="flex items-start text-gray-500 italic">
                                <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">1</span>
                                <span class="leading-relaxed flex-1">Example instruction step 1</span>
                            </li>
                            <li class="flex items-start text-gray-500 italic">
                                <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">2</span>
                                <span class="leading-relaxed flex-1">Example instruction step 2</span>
                            </li>
                        </ol>
                    </div>

                    <!-- Comments Section -->
                    <div class="mb-8 pt-6 border-t border-gray-200">
                        <h3 id="modal-comments-header" class="text-2xl font-bold text-gray-900 mb-4">Comments (<span id="modal-comments-count">0</span>)</h3>
                        
                        <!-- Comment Input Area -->
                        <div class="mb-6">
                            <div class="flex gap-3">
                                <textarea 
                                    id="comment-input"
                                    placeholder="Write a comment..." 
                                    rows="2"
                                    class="flex-1 px-4 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none"
                                ></textarea>
                                <button 
                                    type="button"
                                    onclick="postComment()"
                                    class="flex items-center px-4 py-2 bg-[#111827] text-white rounded-lg hover:bg-[#2d3441] transition-colors font-medium text-sm whitespace-nowrap"
                                >
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                    Post Comment
                                </button>
                            </div>
                        </div>

                        <!-- Comments List -->
                        <div id="modal-comments-list" class="space-y-4">
                            <!-- Comments will be dynamically populated here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons Footer -->
            <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 bg-gray-50">
                <button 
                    type="button"
                    onclick="editRecipe()"
                    class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </button>
                <button 
                    type="button"
                    onclick="deleteRecipe()"
                    class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to open recipe modal with data from clicked card
    function openRecipeModal(cardElement) {
        // Get data from the clicked card
        const recipeId = cardElement.getAttribute('data-recipe-id');
        const title = cardElement.getAttribute('data-title');
        const description = cardElement.getAttribute('data-description');
        const image = cardElement.getAttribute('data-image');
        const category = cardElement.getAttribute('data-category');
        const categoryColor = cardElement.getAttribute('data-category-color');
        const prepTime = cardElement.getAttribute('data-prep-time');
        const servings = cardElement.getAttribute('data-servings');
        const likes = cardElement.getAttribute('data-likes');
        const userName = cardElement.getAttribute('data-user-name');
        const userAvatar = cardElement.getAttribute('data-user-avatar');
        let ingredients = cardElement.getAttribute('data-ingredients');
        let instructions = cardElement.getAttribute('data-instructions');
        let comments = cardElement.getAttribute('data-comments');

        // Store recipeId in modal for Edit/Delete operations
        document.getElementById('view-recipe-modal').setAttribute('data-recipe-id', recipeId || '');

        // Populate modal with data
        document.getElementById('modal-recipe-image').src = image;
        document.getElementById('modal-recipe-image').alt = title;
        document.getElementById('modal-recipe-title').textContent = title;
        document.getElementById('modal-recipe-description').textContent = description;
        document.getElementById('modal-category-tag').textContent = category;
        document.getElementById('modal-category-tag').className = `px-3 py-1 rounded-full text-xs font-medium text-white ${categoryColor}`;
        document.getElementById('modal-prep-time').textContent = prepTime;
        document.getElementById('modal-servings').textContent = servings + ' servings';
        document.getElementById('modal-likes').textContent = likes;
        document.getElementById('modal-user-name').textContent = userName;
        document.getElementById('modal-user-avatar').src = userAvatar;
        document.getElementById('modal-user-avatar').alt = userName;

        // Populate Ingredients
        const ingredientsContainer = document.getElementById('modal-ingredients');
        ingredientsContainer.innerHTML = '';
        
        // Decode HTML entities if present
        let ingredientsData = ingredients;
        if (ingredientsData) {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = ingredientsData;
            ingredientsData = tempDiv.textContent || tempDiv.innerText || ingredientsData;
        }
        
        if (ingredientsData && ingredientsData.trim() !== '' && ingredientsData.trim() !== '[]') {
            try {
                let ingredientsList;
                if (typeof ingredientsData === 'string') {
                    // Try to parse as JSON
                    ingredientsList = JSON.parse(ingredientsData);
                } else {
                    ingredientsList = ingredientsData;
                }
                
                if (Array.isArray(ingredientsList) && ingredientsList.length > 0) {
                    ingredientsList.forEach(ingredient => {
                        if (ingredient) {
                            const li = document.createElement('li');
                            li.className = 'flex items-start text-gray-700';
                            li.innerHTML = `
                                <span class="text-gray-900 mr-2 mt-1">•</span>
                                <span>${ingredient}</span>
                            `;
                            ingredientsContainer.appendChild(li);
                        }
                    });
                } else {
                    // If parsing succeeded but result is not an array or is empty, show placeholders
                    throw new Error('Empty or invalid array');
                }
            } catch (e) {
                // If not JSON, treat as single string or comma-separated
                if (ingredientsData && ingredientsData.trim() !== '') {
                    const ingredientsArray = ingredientsData.split(',').map(i => i.trim()).filter(i => i);
                    if (ingredientsArray.length > 0) {
                        ingredientsArray.forEach(ingredient => {
                            if (ingredient) {
                                const li = document.createElement('li');
                                li.className = 'flex items-start text-gray-700';
                                li.innerHTML = `
                                    <span class="text-gray-900 mr-2 mt-1">•</span>
                                    <span>${ingredient}</span>
                                `;
                                ingredientsContainer.appendChild(li);
                            }
                        });
                    } else {
                        // Show placeholder ingredients when no data is available
                        ingredientsContainer.innerHTML = `
                            <li class="flex items-start text-gray-500 italic">
                                <span class="text-gray-400 mr-2 mt-1">•</span>
                                <span>Example ingredient 1</span>
                            </li>
                            <li class="flex items-start text-gray-500 italic">
                                <span class="text-gray-400 mr-2 mt-1">•</span>
                                <span>Example ingredient 2</span>
                            </li>
                            <li class="flex items-start text-gray-500 italic">
                                <span class="text-gray-400 mr-2 mt-1">•</span>
                                <span>Example ingredient 3</span>
                            </li>
                        `;
                    }
                } else {
                    // Show placeholder ingredients when no data is available
                    ingredientsContainer.innerHTML = `
                        <li class="flex items-start text-gray-500 italic">
                            <span class="text-gray-400 mr-2 mt-1">•</span>
                            <span>Example ingredient 1</span>
                        </li>
                        <li class="flex items-start text-gray-500 italic">
                            <span class="text-gray-400 mr-2 mt-1">•</span>
                            <span>Example ingredient 2</span>
                        </li>
                        <li class="flex items-start text-gray-500 italic">
                            <span class="text-gray-400 mr-2 mt-1">•</span>
                            <span>Example ingredient 3</span>
                        </li>
                    `;
                }
            }
        } else {
            // Show placeholder ingredients when no data is available
            ingredientsContainer.innerHTML = `
                <li class="flex items-start text-gray-500 italic">
                    <span class="text-gray-400 mr-2 mt-1">•</span>
                    <span>Example ingredient 1</span>
                </li>
                <li class="flex items-start text-gray-500 italic">
                    <span class="text-gray-400 mr-2 mt-1">•</span>
                    <span>Example ingredient 2</span>
                </li>
                <li class="flex items-start text-gray-500 italic">
                    <span class="text-gray-400 mr-2 mt-1">•</span>
                    <span>Example ingredient 3</span>
                </li>
            `;
        }

        // Populate Instructions
        const instructionsContainer = document.getElementById('modal-instructions');
        instructionsContainer.innerHTML = '';
        
        // Decode HTML entities if present
        let instructionsData = instructions;
        if (instructionsData) {
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = instructionsData;
            instructionsData = tempDiv.textContent || tempDiv.innerText || instructionsData;
        }
        
        if (instructionsData && instructionsData.trim() !== '' && instructionsData.trim() !== '[]') {
            try {
                let instructionsList;
                if (typeof instructionsData === 'string') {
                    // Try to parse as JSON
                    instructionsList = JSON.parse(instructionsData);
                } else {
                    instructionsList = instructionsData;
                }
                
                if (Array.isArray(instructionsList) && instructionsList.length > 0) {
                    instructionsList.forEach((instruction, index) => {
                        if (instruction) {
                            const li = document.createElement('li');
                            li.className = 'flex items-start';
                            li.innerHTML = `
                                <span class="flex-shrink-0 w-8 h-8 bg-gray-900 rounded-full flex items-center justify-center text-white font-medium mr-4 mt-0.5">${index + 1}</span>
                                <span class="text-gray-700 leading-relaxed flex-1">${instruction}</span>
                            `;
                            instructionsContainer.appendChild(li);
                        }
                    });
                } else {
                    // If parsing succeeded but result is not an array or is empty, show placeholders
                    throw new Error('Empty or invalid array');
                }
            } catch (e) {
                // If not JSON, treat as single string or newline-separated
                if (instructionsData && instructionsData.trim() !== '') {
                    const instructionsArray = instructionsData.split('\n').filter(i => i.trim());
                    if (instructionsArray.length > 0) {
                        instructionsArray.forEach((instruction, index) => {
                            if (instruction.trim()) {
                                const li = document.createElement('li');
                                li.className = 'flex items-start';
                                li.innerHTML = `
                                    <span class="flex-shrink-0 w-8 h-8 bg-gray-900 rounded-full flex items-center justify-center text-white font-medium mr-4 mt-0.5">${index + 1}</span>
                                    <span class="text-gray-700 leading-relaxed flex-1">${instruction.trim()}</span>
                                `;
                                instructionsContainer.appendChild(li);
                            }
                        });
                    } else {
                        // Show placeholder instructions when no data is available
                        instructionsContainer.innerHTML = `
                            <li class="flex items-start text-gray-500 italic">
                                <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">1</span>
                                <span class="leading-relaxed flex-1">Example instruction step 1</span>
                            </li>
                            <li class="flex items-start text-gray-500 italic">
                                <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">2</span>
                                <span class="leading-relaxed flex-1">Example instruction step 2</span>
                            </li>
                        `;
                    }
                } else {
                    // Show placeholder instructions when no data is available
                    instructionsContainer.innerHTML = `
                        <li class="flex items-start text-gray-500 italic">
                            <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">1</span>
                            <span class="leading-relaxed flex-1">Example instruction step 1</span>
                        </li>
                        <li class="flex items-start text-gray-500 italic">
                            <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">2</span>
                            <span class="leading-relaxed flex-1">Example instruction step 2</span>
                        </li>
                    `;
                }
            }
        } else {
            // Show placeholder instructions when no data is available
            instructionsContainer.innerHTML = `
                <li class="flex items-start text-gray-500 italic">
                    <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">1</span>
                    <span class="leading-relaxed flex-1">Example instruction step 1</span>
                </li>
                <li class="flex items-start text-gray-500 italic">
                    <span class="flex-shrink-0 w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-gray-500 font-medium mr-4 mt-0.5">2</span>
                    <span class="leading-relaxed flex-1">Example instruction step 2</span>
                </li>
            `;
        }

        // Populate Comments
        loadComments(comments);

        // Show modal
        document.getElementById('viewRecipe').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    // Function to load and display comments
    function loadComments(commentsData) {
        const commentsContainer = document.getElementById('modal-comments-list');
        const commentsCountElement = document.getElementById('modal-comments-count');
        commentsContainer.innerHTML = '';

        // Decode HTML entities if present
        let commentsList = [];
        if (commentsData && commentsData.trim() !== '' && commentsData.trim() !== '[]') {
            try {
                // Decode HTML entities
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = commentsData;
                const decodedData = tempDiv.textContent || tempDiv.innerText || commentsData;
                
                commentsList = JSON.parse(decodedData);
            } catch (e) {
                console.error('Error parsing comments:', e);
                commentsList = [];
            }
        }

        // Update comments count
        const commentsCount = Array.isArray(commentsList) ? commentsList.length : 0;
        commentsCountElement.textContent = commentsCount;

        // Display comments
        if (Array.isArray(commentsList) && commentsList.length > 0) {
            commentsList.forEach(comment => {
                if (comment) {
                    const commentDiv = document.createElement('div');
                    commentDiv.className = 'flex gap-3';
                    
                    // Format date
                    let formattedDate = comment.created_at || comment.date || comment.createdAt || 'Recently';
                    if (formattedDate && formattedDate !== 'Recently') {
                        try {
                            const date = new Date(formattedDate);
                            formattedDate = date.toLocaleDateString('en-US', { 
                                year: 'numeric', 
                                month: 'short', 
                                day: 'numeric' 
                            });
                        } catch (e) {
                            // Keep original format if parsing fails
                        }
                    }

                    commentDiv.innerHTML = `
                        <img 
                            src="${comment.user_avatar || comment.user?.avatar || 'https://ui-avatars.com/api/?name=' + encodeURIComponent(comment.user_name || comment.user?.name || 'User') + '&background=random'}" 
                            alt="${comment.user_name || comment.user?.name || 'User'}" 
                            class="w-10 h-10 rounded-full object-cover flex-shrink-0"
                        />
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <p class="font-semibold text-gray-900 text-sm">${comment.user_name || comment.user?.name || 'Anonymous'}</p>
                                <span class="text-gray-400">•</span>
                                <p class="text-gray-500 text-sm">${formattedDate}</p>
                            </div>
                            <p class="text-gray-700 text-sm leading-relaxed">${comment.body || comment.comment || comment.text || ''}</p>
                        </div>
                    `;
                    commentsContainer.appendChild(commentDiv);
                }
            });
        } else {
            // Show empty state
            commentsContainer.innerHTML = '<p class="text-gray-500 text-sm italic">No comments yet. Be the first to comment!</p>';
        }
    }

    // Function to post a new comment
    function postComment() {
        const commentInput = document.getElementById('comment-input');
        const commentText = commentInput.value.trim();
        const recipeId = document.getElementById('view-recipe-modal').getAttribute('data-recipe-id');

        if (!commentText) {
            alert('Please enter a comment');
            return;
        }

        if (!recipeId) {
            alert('Recipe ID not found');
            return;
        }

        // Get CSRF token from meta tag (Laravel default)
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        // Prepare comment data
        const commentData = {
            recipe_id: recipeId,
            body: commentText,
            // Add other fields as needed: user_id, etc.
        };

        // Backend integration point
        // Replace this with actual API call when backend is ready
        fetch(`/api/recipes/${recipeId}/comments`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken || '',
                'Accept': 'application/json',
            },
            body: JSON.stringify(commentData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to post comment');
            }
            return response.json();
        })
        .then(data => {
            // Clear input
            commentInput.value = '';
            
            // Reload comments
            // Option 1: Add the new comment to the list immediately
            const newComment = {
                id: data.id || Date.now(),
                user_name: data.user_name || data.user?.name || 'You',
                user_avatar: data.user_avatar || data.user?.avatar || 'https://ui-avatars.com/api/?name=You&background=random',
                body: commentText,
                created_at: new Date().toISOString()
            };
            
            // Get current comments
            const commentsContainer = document.getElementById('modal-comments-list');
            const currentComments = Array.from(commentsContainer.children).map(child => {
                // Extract comment data from DOM (simplified - in real app, maintain state)
                return null; // This would need proper state management
            }).filter(c => c !== null);
            
            // Reload all comments from backend
            // Better approach (when backend is ready):
            fetch(`/api/recipes/${recipeId}/comments`)
                .then(res => res.json())
                .then(comments => {
                    // Update the card element's data attribute
                    const cardElement = document.querySelector(`[data-recipe-id="${recipeId}"]`);
                    if (cardElement) {
                        cardElement.setAttribute('data-comments', JSON.stringify(comments));
                    }
                    loadComments(JSON.stringify(comments));
                })
                .catch(err => {
                    console.error('Error fetching comments:', err);
                    // Fallback: add comment locally
                    const cardElement = document.querySelector(`[data-recipe-id="${recipeId}"]`);
                    if (cardElement) {
                        let currentComments = [];
                        try {
                            const commentsData = cardElement.getAttribute('data-comments');
                            if (commentsData && commentsData !== '[]') {
                                const tempDiv = document.createElement('div');
                                tempDiv.innerHTML = commentsData;
                                const decoded = tempDiv.textContent || tempDiv.innerText || commentsData;
                                currentComments = JSON.parse(decoded);
                            }
                        } catch (e) {
                            console.error('Error loading comments:', e);
                        }
                        
                        currentComments.push(newComment);
                        cardElement.setAttribute('data-comments', JSON.stringify(currentComments));
                        loadComments(JSON.stringify(currentComments));
                    }
                });
        })
        .catch(error => {
            console.error('Error posting comment:', error);
            // For development: Add comment locally without backend
            // In production, remove this and handle errors properly
            alert('Comment posted (demo mode - backend integration needed)');
            commentInput.value = '';
            
            // Add comment locally for demo
            const newComment = {
                id: Date.now(),
                user_name: 'You',
                user_avatar: 'https://ui-avatars.com/api/?name=You&background=random',
                body: commentText,
                created_at: new Date().toISOString()
            };
            
            // Get current comments from data attribute
            const cardElement = document.querySelector(`[data-recipe-id="${recipeId}"]`);
            if (cardElement) {
                let currentComments = [];
                try {
                    const commentsData = cardElement.getAttribute('data-comments');
                    if (commentsData && commentsData !== '[]') {
                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = commentsData;
                        const decoded = tempDiv.textContent || tempDiv.innerText || commentsData;
                        currentComments = JSON.parse(decoded);
                    }
                } catch (e) {
                    console.error('Error loading comments:', e);
                }
                
                currentComments.push(newComment);
                cardElement.setAttribute('data-comments', JSON.stringify(currentComments));
                loadComments(JSON.stringify(currentComments));
            }
        });
    }

    // Close modal on backdrop click
    document.getElementById('viewRecipeBackdrop')?.addEventListener('click', function() {
        document.getElementById('viewRecipe').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('viewRecipe');
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }
    });

    function editRecipe() {
        const recipeId = document.getElementById('view-recipe-modal').getAttribute('data-recipe-id');
        if (!recipeId) {
            alert('Recipe ID not found');
            return;
        }

        // Get recipe data from the modal
        const recipeData = {
            recipeId: recipeId,
            title: document.getElementById('modal-recipe-title').textContent,
            description: document.getElementById('modal-recipe-description').textContent,
            image: document.getElementById('modal-recipe-image').src,
            category: document.getElementById('modal-category-tag').textContent,
            prepTime: document.getElementById('modal-prep-time').textContent,
            servings: document.getElementById('modal-servings').textContent.replace(' servings', ''),
            cookTime: '', // Not currently displayed, will need to be added to data attributes
            ingredients: [],
            instructions: []
        };

        // Get ingredients from the modal
        const ingredientsList = document.getElementById('modal-ingredients');
        const ingredientItems = ingredientsList.querySelectorAll('li');
        ingredientItems.forEach(item => {
            const text = item.textContent.trim();
            if (text && !text.includes('Example ingredient')) {
                recipeData.ingredients.push(text.replace(/^•\s*/, ''));
            }
        });

        // Get instructions from the modal
        const instructionsList = document.getElementById('modal-instructions');
        const instructionItems = instructionsList.querySelectorAll('li');
        instructionItems.forEach(item => {
            const textSpan = item.querySelector('span:last-child');
            if (textSpan) {
                const text = textSpan.textContent.trim();
                if (text && !text.includes('Example instruction')) {
                    recipeData.instructions.push(text);
                }
            }
        });

        // Get cook time from data attributes if available
        const cardElement = document.querySelector(`[data-recipe-id="${recipeId}"]`);
        if (cardElement) {
            const cookTime = cardElement.getAttribute('data-cook-time');
            if (cookTime) {
                recipeData.cookTime = cookTime;
            }
        }

        // Close view modal
        document.getElementById('viewRecipe').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
        
        // Small delay to ensure view modal is closed
        setTimeout(function() {
            // Try to show edit modal directly first
            const editModal = document.getElementById('editRecipe');
            if (!editModal) {
                console.error('Edit modal element not found in DOM');
                alert('Edit modal not found. Please refresh the page.');
                return;
            }

            console.log('Edit modal element found, attempting to show...');
            
            // Populate form fields directly
            const recipeIdEl = document.getElementById('edit-recipe-id');
            const titleEl = document.getElementById('edit-recipe-title');
            const descriptionEl = document.getElementById('edit-recipe-description');
            const servingsEl = document.getElementById('edit-recipe-servings');
            const prepTimeEl = document.getElementById('edit-recipe-prep-time');
            const cookTimeEl = document.getElementById('edit-recipe-cook-time');
            const imageEl = document.getElementById('edit-recipe-image-url');

            if (recipeIdEl) recipeIdEl.value = recipeData.recipeId || '';
            if (titleEl) titleEl.value = recipeData.title || '';
            if (descriptionEl) descriptionEl.value = recipeData.description || '';
            if (servingsEl) servingsEl.value = recipeData.servings || '';
            if (prepTimeEl) prepTimeEl.value = recipeData.prepTime || '';
            if (cookTimeEl) cookTimeEl.value = recipeData.cookTime || '';
            if (imageEl) imageEl.value = recipeData.image || '';

            // Set category
            if (recipeData.category) {
                const categorySelect = document.getElementById('edit-recipe-category');
                const categorySelectedText = document.getElementById('edit-category-selected-text');
                if (categorySelect) categorySelect.value = recipeData.category;
                if (categorySelectedText) categorySelectedText.textContent = recipeData.category;
                
                // Update checkmarks
                document.querySelectorAll('.edit-category-option').forEach(opt => {
                    const checkmark = opt.querySelector('.checkmark');
                    if (opt.getAttribute('data-value') === recipeData.category) {
                        if (checkmark) checkmark.classList.remove('hidden');
                    } else {
                        if (checkmark) checkmark.classList.add('hidden');
                    }
                });
            }

            // Populate ingredients
            const ingredientsContainer = document.getElementById('edit-ingredients-container');
            if (ingredientsContainer) {
                ingredientsContainer.innerHTML = '';
                if (recipeData.ingredients && Array.isArray(recipeData.ingredients) && recipeData.ingredients.length > 0) {
                    recipeData.ingredients.forEach((ingredient, index) => {
                        const ingredientDiv = document.createElement('div');
                        ingredientDiv.className = 'edit-ingredient-item flex gap-2';
                        ingredientDiv.innerHTML = `
                            <input 
                                type="text" 
                                name="ingredients[]"
                                value="${(ingredient || '').replace(/"/g, '&quot;').replace(/'/g, '&#39;')}" 
                                placeholder="Ingredient ${index + 1}" 
                                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                                required
                            />
                            <button 
                                type="button" 
                                class="edit-remove-ingredient-btn text-gray-400 hover:text-red-600 transition p-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        `;
                        ingredientsContainer.appendChild(ingredientDiv);
                    });
                } else {
                    // Add one empty ingredient field
                    const ingredientDiv = document.createElement('div');
                    ingredientDiv.className = 'edit-ingredient-item flex gap-2';
                    ingredientDiv.innerHTML = `
                        <input 
                            type="text" 
                            name="ingredients[]"
                            placeholder="Ingredient 1" 
                            class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                            required
                        />
                        <button 
                            type="button" 
                            class="edit-remove-ingredient-btn hidden text-gray-400 hover:text-red-600 transition p-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    `;
                    ingredientsContainer.appendChild(ingredientDiv);
                }
            }

            // Populate instructions
            const instructionsContainer = document.getElementById('edit-instructions-container');
            if (instructionsContainer) {
                instructionsContainer.innerHTML = '';
                if (recipeData.instructions && Array.isArray(recipeData.instructions) && recipeData.instructions.length > 0) {
                    recipeData.instructions.forEach((instruction, index) => {
                        const instructionDiv = document.createElement('div');
                        instructionDiv.className = 'edit-instruction-item flex gap-2';
                        instructionDiv.innerHTML = `
                            <span class="flex items-center text-gray-500 font-medium pt-2">${index + 1}.</span>
                            <textarea 
                                name="instructions[]"
                                rows="2" 
                                placeholder="Step ${index + 1}" 
                                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition"
                                required
                            >${(instruction || '').replace(/</g, '&lt;').replace(/>/g, '&gt;')}</textarea>
                            <button 
                                type="button" 
                                class="edit-remove-instruction-btn text-gray-400 hover:text-red-600 transition p-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        `;
                        instructionsContainer.appendChild(instructionDiv);
                    });
                } else {
                    // Add one empty instruction field
                    const instructionDiv = document.createElement('div');
                    instructionDiv.className = 'edit-instruction-item flex gap-2';
                    instructionDiv.innerHTML = `
                        <span class="flex items-center text-gray-500 font-medium pt-2">1.</span>
                        <textarea 
                            name="instructions[]"
                            rows="2" 
                            placeholder="Step 1" 
                            class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition"
                            required
                        ></textarea>
                        <button 
                            type="button" 
                            class="edit-remove-instruction-btn hidden text-gray-400 hover:text-red-600 transition p-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    `;
                    instructionsContainer.appendChild(instructionDiv);
                }
            }

            // Show modal
            console.log('Removing hidden class from edit modal');
            editModal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            console.log('Edit modal should now be visible');
            
            // Call the function if it exists (for additional setup)
            if (typeof window.openEditRecipeModal === 'function') {
                window.openEditRecipeModal(recipeData);
            }
        }, 100);
    }

    function deleteRecipe() {
        const recipeId = document.getElementById('view-recipe-modal').getAttribute('data-recipe-id');
        if (!recipeId) {
            alert('Recipe ID not found');
            return;
        }
        
        if (!confirm('Are you sure you want to delete this recipe?')) {
            return;
        }
        console.log('Delete recipe:', recipeId);
    }
</script>
