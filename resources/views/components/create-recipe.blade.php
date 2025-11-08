<div id="createRecipe" class="fixed inset-0 overflow-y-auto hidden z-50" aria-labelledby="modal-title-createRecipe" role="dialog" aria-modal="true">

    <!-- Backdrop -->
    <div id="modalBackdrop" class="fixed inset-0 bg-black/50 backdrop-blur-sm transition-opacity"></div>    

    <!-- Modal container -->
    <div class="fixed inset-0 flex items-center justify-center p-4 z-50 pointer-events-none">
        <!-- Modal panel -->
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-5xl overflow-hidden text-left max-h-[95vh] flex flex-col relative z-50 pointer-events-auto">
                    <div class="bg-white">
                           <div class="px-6 pt-6 pb-4 flex justify-between items-center border-b border-gray-100">
                                <h3 class="text-xl font-semibold text-gray-900">Create New Recipe</h3>
                                <button onclick="document.getElementById('createRecipe').classList.add('hidden')" id="close-recipe-modal-x" class="text-gray-400 hover:text-gray-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <form id="recipeForm" data-modal-content class="px-6 py-6 space-y-5 overflow-y-auto flex-grow" style="max-height: calc(95vh - 200px);">
                
                <div>
                    <label for="recipe-title" class="block text-sm font-medium text-gray-700 mb-1">Recipe Title</label>
                    <input type="text" id="recipe-title" name="title" placeholder="e.g., Chocolate Chip Cookies" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]" required>
                </div>
                
                <div>
                    <label for="recipe-description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="recipe-description" name="description" rows="2" placeholder="Brief description of your recipe" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827] resize-none" required></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="recipe-category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <div class="relative mt-1">
                            <!-- Hidden select for form submission -->
                            <select id="recipe-category" name="category" class="hidden" required>
                                <option value="">Select a category</option>
                                <option value="Breakfast" selected>Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                                <option value="Dessert">Dessert</option>
                                <option value="Snack">Snack</option>
                                <option value="Appetizer">Appetizer</option>
                            </select>
                            
                            <!-- Custom Dropdown -->
                            <div class="relative">
                                <button 
                                    type="button"
                                    id="category-dropdown-button"
                                    class="w-full bg-gray-50 border border-gray-300 rounded-lg shadow-sm p-2.5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                                >
                                    <span id="category-selected-text" class="text-gray-700">Breakfast</span>
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                
                                <!-- Dropdown Menu -->
                                <div 
                                    id="category-dropdown-menu"
                                    class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg"
                                >
                                    <div class="py-1">
                                        <button 
                                            type="button"
                                            data-value=""
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Select a category</span>
                                        </button>
                                        <button 
                                            type="button"
                                            data-value="Breakfast"
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Breakfast</span>
                                            <svg class="w-4 h-4 text-gray-500 checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                        <button 
                                            type="button"
                                            data-value="Lunch"
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Lunch</span>
                                            <svg class="w-4 h-4 text-gray-500 hidden checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                        <button 
                                            type="button"
                                            data-value="Dinner"
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Dinner</span>
                                            <svg class="w-4 h-4 text-gray-500 hidden checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                        <button 
                                            type="button"
                                            data-value="Dessert"
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Dessert</span>
                                            <svg class="w-4 h-4 text-gray-500 hidden checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                        <button 
                                            type="button"
                                            data-value="Snack"
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Snack</span>
                                            <svg class="w-4 h-4 text-gray-500 hidden checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                        <button 
                                            type="button"
                                            data-value="Appetizer"
                                            class="category-option w-full px-3 py-2 text-left text-gray-700 hover:bg-gray-100 flex items-center justify-between"
                                        >
                                            <span>Appetizer</span>
                                            <svg class="w-4 h-4 text-gray-500 hidden checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="recipe-servings" class="block text-sm font-medium text-gray-700 mb-1">Servings</label>
                        <div class="relative">
                            <input type="number" id="recipe-servings" name="servings" placeholder="4" min="1" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 pr-10 focus:border-[#111827]" required>
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="recipe-prep-time" class="block text-sm font-medium text-gray-700 mb-1">Prep Time</label>
                        <input type="text" id="recipe-prep-time" name="prep_time" placeholder="e.g., 15 mins" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                    <div>
                        <label for="recipe-cook-time" class="block text-sm font-medium text-gray-700 mb-1">Cook Time</label>
                        <input type="text" id="recipe-cook-time" name="cook_time" placeholder="e.g., 30 mins" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]">
                    </div>
                </div>

                <div>
                    <label for="recipe-image-url" class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
                    <input type="url" id="recipe-image-url" name="image_url" placeholder="https://example.com/image.jpg" class="block w-full border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:border-[#111827]">
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Ingredients</label>
                        <button 
                            type="button" 
                            id="add-ingredient-btn"
                            class="flex items-center text-[#111827] border border-gray-300 rounded-lg px-3 py-1.5 hover:bg-gray-50 hover:border-[#111827] hover:scale-105 transition-all duration-200 font-medium text-sm shadow-sm"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add
                        </button>
                    </div>
                    <div id="ingredients-container" class="space-y-2 max-h-48 overflow-y-auto">
                        <div class="ingredient-item flex gap-2">
                            <input 
                                type="text" 
                                name="ingredients[]"
                                placeholder="Ingredient 1" 
                                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                                required
                            />
                            <button 
                                type="button" 
                                class="remove-ingredient-btn hidden text-gray-400 hover:text-red-600 transition p-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Instructions</label>
                        <button 
                            type="button" 
                            id="add-instruction-btn"
                            class="flex items-center text-[#111827] border border-gray-300 rounded-lg px-3 py-1.5 hover:bg-gray-50 hover:border-[#111827] hover:scale-105 transition-all duration-200 font-medium text-sm shadow-sm"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add
                        </button>
                    </div>
                    <div id="instructions-container" class="space-y-2 max-h-48 overflow-y-auto">
                        <div class="instruction-item flex gap-2">
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
                                class="remove-instruction-btn hidden text-gray-400 hover:text-red-600 transition p-2"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </form>  
                    </div>

                    <div class="flex justify-end gap-3 px-6 py-4 border-t border-gray-200 mt-4">
                        <button 
                            onclick="document.getElementById('createRecipe').classList.add('hidden')"
                            type="button" 
                            class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition"
                        >
                            Cancel
                        </button>                
                        <button 
                            type="submit"
                            class="px-6 py-2.5 text-sm font-medium text-white bg-[#111827] rounded-lg hover:bg-[#2d3441] transition"
                        >
                            Create Recipe
                        </button>    
                    </div>

                </div>
        </div>
    </div>
</div>

<script>
    let ingredientCount = 1;
    let instructionCount = 1;

    // Add Ingredient
    document.getElementById('add-ingredient-btn').addEventListener('click', function() {
        ingredientCount++;
        const container = document.getElementById('ingredients-container');
        const newItem = document.createElement('div');
        newItem.className = 'ingredient-item flex gap-2';
        newItem.innerHTML = `
            <input 
                type="text" 
                name="ingredients[]"
                placeholder="Ingredient ${ingredientCount}" 
                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] transition"
                                required
                            />
                            <button 
                                type="button" 
                                class="remove-ingredient-btn text-gray-400 hover:text-red-600 transition p-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newItem);
        updateRemoveButtons();
    });

    // Add Instruction
    document.getElementById('add-instruction-btn').addEventListener('click', function() {
        instructionCount++;
        const container = document.getElementById('instructions-container');
        const newItem = document.createElement('div');
        newItem.className = 'instruction-item flex gap-2';
        newItem.innerHTML = `
            <span class="flex items-center text-gray-500 font-medium">${instructionCount}.</span>
            <textarea 
                name="instructions[]"
                rows="2" 
                placeholder="Step ${instructionCount}" 
                class="flex-1 border border-gray-300 rounded-lg shadow-sm p-2.5 placeholder-gray-400 focus:ring-2 focus:ring-[#111827] focus:border-[#111827] resize-none transition"
                                required
                            ></textarea>
                            <button 
                                type="button" 
                                class="remove-instruction-btn text-gray-400 hover:text-red-600 transition p-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newItem);
        updateRemoveButtons();
        updateInstructionNumbers();
    });

    // Update remove buttons visibility
    function updateRemoveButtons() {
        const ingredientItems = document.querySelectorAll('.ingredient-item');
        const instructionItems = document.querySelectorAll('.instruction-item');
        
        // Show remove buttons if more than one item
        ingredientItems.forEach((item, index) => {
            const removeBtn = item.querySelector('.remove-ingredient-btn');
            if (ingredientItems.length > 1) {
                removeBtn.classList.remove('hidden');
            } else {
                removeBtn.classList.add('hidden');
            }
        });

        instructionItems.forEach((item, index) => {
            const removeBtn = item.querySelector('.remove-instruction-btn');
            if (instructionItems.length > 1) {
                removeBtn.classList.remove('hidden');
            } else {
                removeBtn.classList.add('hidden');
            }
        });
    }

    // Update instruction step numbers
    function updateInstructionNumbers() {
        const instructionItems = document.querySelectorAll('.instruction-item');
        instructionItems.forEach((item, index) => {
            const numberSpan = item.querySelector('span');
            numberSpan.textContent = `${index + 1}.`;
        });
    }

    // Remove ingredient
    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-ingredient-btn')) {
            const item = e.target.closest('.ingredient-item');
            if (document.querySelectorAll('.ingredient-item').length > 1) {
                item.remove();
                updateRemoveButtons();
            }
        }
    });

    // Remove instruction
    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-instruction-btn')) {
            const item = e.target.closest('.instruction-item');
            if (document.querySelectorAll('.instruction-item').length > 1) {
                item.remove();
                updateRemoveButtons();
                updateInstructionNumbers();
            }
        }
    });

    // Form submission (placeholder for now)
    document.getElementById('recipeForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Form submission logic will be added later
        console.log('Recipe form submitted');
        // TODO: Add form submission logic here
        // After successful submission, close modal:
        // document.getElementById('createRecipe').classList.add('hidden');
    });

    // Custom Dropdown Functionality
    const categoryButton = document.getElementById('category-dropdown-button');
    const categoryMenu = document.getElementById('category-dropdown-menu');
    const categorySelect = document.getElementById('recipe-category');
    const categorySelectedText = document.getElementById('category-selected-text');
    const categoryOptions = document.querySelectorAll('.category-option');

    // Toggle dropdown
    categoryButton.addEventListener('click', function(e) {
        e.stopPropagation();
        categoryMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!categoryButton.contains(e.target) && !categoryMenu.contains(e.target)) {
            categoryMenu.classList.add('hidden');
        }
    });

    // Handle option selection
    categoryOptions.forEach(option => {
        option.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            const text = this.querySelector('span').textContent;
            
            // Update hidden select
            categorySelect.value = value;
            
            // Update button text
            categorySelectedText.textContent = text || 'Select a category';
            
            // Update checkmarks
            categoryOptions.forEach(opt => {
                const checkmark = opt.querySelector('.checkmark');
                if (opt.getAttribute('data-value') === value && value !== '') {
                    checkmark.classList.remove('hidden');
                } else {
                    checkmark.classList.add('hidden');
                }
            });
            
            // Close dropdown
            categoryMenu.classList.add('hidden');
        });
    });

    // Close modal on backdrop click
    document.getElementById('modalBackdrop').addEventListener('click', function() {
        document.getElementById('createRecipe').classList.add('hidden');
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('createRecipe');
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden');
            }
        }
    });

    // Initialize remove buttons visibility
    updateRemoveButtons();
</script>