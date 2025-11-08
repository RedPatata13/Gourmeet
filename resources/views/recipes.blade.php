<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Gourmeet</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        .card-shadow {
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .btn-primary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .ingredient-tag {
            background-color: #f3f4f6;
            border-radius: 20px;
            padding: 4px 12px;
            margin: 4px;
            display: inline-flex;
            align-items: center;
        }
        .ingredient-tag button {
            margin-left: 6px;
            color: #9ca3af;
        }
        .ingredient-tag button:hover {
            color: #ef4444;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="max-w-4xl w-full">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-white mb-2">Gourmeet Dashboard</h1>
            <p class="text-white text-lg">Create and share your delicious recipes</p>
        </div>
        
        <div class="bg-white rounded-2xl card-shadow p-6 md:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Recipe</h2>
            
            <form id="recipeForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Recipe Title</label>
                            <input type="text" id="title" name="title" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                placeholder="My Awesome Recipe">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Ingredients</label>
                            <div class="flex">
                                <input type="text" id="ingredientInput" 
                                    class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                    placeholder="Add an ingredient">
                                <button type="button" id="addIngredient" 
                                    class="bg-gray-200 text-gray-700 px-4 rounded-r-lg hover:bg-gray-300 transition-colors">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div id="ingredientsContainer" class="mt-2 flex flex-wrap"></div>
                            <input type="hidden" id="ingredients" name="ingredients">
                        </div>
                        
                        <div>
                            <label for="prep_time" class="block text-sm font-medium text-gray-700 mb-1">Preparation Time (minutes)</label>
                            <input type="number" id="prep_time" name="prep_time" required min="1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                placeholder="10">
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <div>
                            <label for="body" class="block text-sm font-medium text-gray-700 mb-1">Instructions</label>
                            <textarea id="body" name="body" rows="4" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                placeholder="Step 1: Do this. Step 2: Do that."></textarea>
                        </div>
                        
                        <div>
                            <label for="cook_time" class="block text-sm font-medium text-gray-700 mb-1">Cooking Time (minutes)</label>
                            <input type="number" id="cook_time" name="cook_time" required min="1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                placeholder="30">
                        </div>
                        
                        <div>
                            <label for="servings" class="block text-sm font-medium text-gray-700 mb-1">Servings</label>
                            <input type="number" id="servings" name="servings" required min="1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                placeholder="4">
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 flex justify-center">
                    <button type="submit" id="submitBtn" 
                        class="btn-primary text-white font-medium py-3 px-8 rounded-lg flex items-center">
                        <i class="fas fa-utensils mr-2"></i>
                        Create Recipe
                    </button>
                </div>
            </form>
            
            <div id="responseMessage" class="mt-6 hidden p-4 rounded-lg"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ingredientInput = document.getElementById('ingredientInput');
            const addIngredientBtn = document.getElementById('addIngredient');
            const ingredientsContainer = document.getElementById('ingredientsContainer');
            const ingredientsHidden = document.getElementById('ingredients');
            const recipeForm = document.getElementById('recipeForm');
            const responseMessage = document.getElementById('responseMessage');
            const submitBtn = document.getElementById('submitBtn');
            
            let ingredients = [];
            
            function addIngredient() {
                const ingredient = ingredientInput.value.trim();
                if (ingredient && !ingredients.includes(ingredient)) {
                    ingredients.push(ingredient);
                    updateIngredientsDisplay();
                    ingredientInput.value = '';
                }
            }
            
            function removeIngredient(ingredient) {
                ingredients = ingredients.filter(item => item !== ingredient);
                updateIngredientsDisplay();
            }
            
            function updateIngredientsDisplay() {
                ingredientsContainer.innerHTML = '';
                ingredients.forEach(ingredient => {
                    const tag = document.createElement('div');
                    tag.className = 'ingredient-tag';
                    tag.innerHTML = `
                        ${ingredient}
                        <button type="button" onclick="removeIngredient('${ingredient}')">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    ingredientsContainer.appendChild(tag);
                });
                
                ingredientsHidden.value = JSON.stringify(ingredients);
            }
            
            addIngredientBtn.addEventListener('click', addIngredient);
            ingredientInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addIngredient();
                }
            });
            
            recipeForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const formData = {
                    title: document.getElementById('title').value,
                    body: document.getElementById('body').value,
                    ingredients: JSON.stringify(ingredients),
                    prep_time: parseInt(document.getElementById('prep_time').value),
                    cook_time: parseInt(document.getElementById('cook_time').value),
                    servings: parseInt(document.getElementById('servings').value)
                };
                
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Creating Recipe...';
                
                try {
                    const response = await fetch('/recipes', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(formData)
                    });
                    
                    const result = await response.json();
                    
                    if (response.ok) {
                        showResponseMessage('Recipe created successfully!', 'success');
                        recipeForm.reset();
                        ingredients = [];
                        updateIngredientsDisplay();
                    } else {
                        showResponseMessage(`Error: ${result.message || 'Failed to create recipe'}`, 'error');
                    }
                } catch (error) {
                    showResponseMessage(`Network error: ${error.message}`, 'error');
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fas fa-utensils mr-2"></i> Create Recipe';
                }
            });
            
            function showResponseMessage(message, type) {
                responseMessage.textContent = message;
                responseMessage.className = `mt-6 p-4 rounded-lg ${type === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}`;
                responseMessage.classList.remove('hidden');
                
                setTimeout(() => {
                    responseMessage.classList.add('hidden');
                }, 5000);
            }
            
            window.removeIngredient = removeIngredient;
            // window.Echo.channel('recipes')
            //     .listen('.recipes.created', (e) => {
            //         console.log('New recipe created:', e.recipe);
                    
            //         // Show a notification or update the UI
            //         showNotification(`New recipe created: ${e.recipe.title}`);
            //     });
        });
    </script>
</body>
</html>
