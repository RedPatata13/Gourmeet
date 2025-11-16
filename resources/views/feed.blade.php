<x-app-layout> 
        <!-- main stuff goes here -->
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Header Section -->
        <div class="mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Discover Recipes</h2>
            <p class="text-[#717182] text-sm sm:text-base">Explore delicious recipes shared by our community</p>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <form class="flex flex-col sm:flex-row gap-3 max-w-md">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                    <input 
                        type="search" 
                        id="default-search" 
                        class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Search recipes by name..." 
                        required 
                    />
                </div>
                <button 
                    type="submit" 
                    class="text-white bg-[#111827] hover:bg-[#2d3441] font-medium rounded-lg text-sm px-6 py-2.5 whitespace-nowrap transition-colors"
                >
                    Search
                </button>
            </form>
            </div>

        <!-- Category Buttons -->
        <div id="button-group" class="mb-8 flex flex-wrap gap-2 sm:gap-3">
            <button 
                aria-pressed="true" 
                onclick="handleSelection(this)" 
                class="bg-[#111827] text-white ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                All
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Breakfast
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Lunch
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Dinner
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Dessert
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Snack
            </button>
            <button 
                aria-pressed="false" 
                onclick="handleSelection(this)" 
                class="bg-white text-[#111827] ring-1 ring-[#d3d7dd] hover:bg-gray-200 hover:text-gray-700 font-medium rounded-lg text-sm px-4 py-2 transition-colors"
            >
                Appetizer
            </button>
        </div>

        <!-- Recipe Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
            <!-- Chocolate Lava Cake -->
            <x-food-card 
                recipeId="1"
                title="Chocolate Lava Cake"
                description="Decadent individual chocolate cakes with a molten chocolate center. Pure indulgence!"
                image="https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=400&h=300&fit=crop"
                category="Dessert"
                prepTime="15 mins"
                servings="4"
                likes="24"
                userName="James Wilson"
                :ingredients="['4 oz dark chocolate', '1/2 cup butter', '2 large eggs', '2 egg yolks', '1/4 cup sugar', '2 tbsp all-purpose flour', '1/4 tsp salt', 'Vanilla ice cream for serving']"
                :instructions="['Preheat oven to 425°F. Grease and flour 4 ramekins.', 'Melt chocolate and butter in a double boiler, stirring until smooth.', 'In a separate bowl, whisk eggs, egg yolks, and sugar until pale and thick.', 'Fold melted chocolate into egg mixture, then add flour and salt.', 'Pour batter into prepared ramekins and bake for 12-14 minutes.', 'The edges should be set but the center should still be soft.', 'Serve immediately with vanilla ice cream.']"
            />

            <!-- Avocado Toast with Poached Egg -->
            <x-food-card 
                recipeId="2"
                title="Avocado Toast with Poached Egg"
                description="Creamy avocado on crispy sourdough topped with a perfectly poached egg."
                image="https://images.unsplash.com/photo-1541519227354-08fa5d50c44d?w=400&h=300&fit=crop"
                category="Breakfast"
                prepTime="5 mins"
                servings="2"
                likes="18"
                userName="Michael Chen"
                :ingredients="['2 slices sourdough bread', '1 ripe avocado', '2 eggs', '1 tbsp white vinegar', 'Salt and pepper to taste', 'Red pepper flakes (optional)', 'Fresh chives for garnish']"
                :instructions="['Bring a pot of water to a gentle boil and add vinegar.', 'Crack eggs into small cups, then slide into the simmering water.', 'Poach eggs for 3-4 minutes until whites are set but yolks are runny.', 'While eggs cook, toast bread until golden and crispy.', 'Mash avocado with salt and pepper, then spread on toast.', 'Remove eggs with a slotted spoon and place on avocado toast.', 'Garnish with red pepper flakes and chives, then serve immediately.']"
            />

            <!-- Margherita Pizza -->
            <x-food-card 
                recipeId="3"
                title="Margherita Pizza"
                description="Classic Italian pizza with fresh mozzarella, tomatoes, and basil."
                image="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?w=400&h=300&fit=crop"
                category="Dinner"
                prepTime="20 mins"
                servings="4"
                likes="32"
                userName="Emma Rodriguez"
                :ingredients="['1 lb pizza dough', '1/2 cup tomato sauce', '8 oz fresh mozzarella', '2-3 Roma tomatoes, sliced', 'Fresh basil leaves', '2 tbsp olive oil', 'Salt to taste', 'Grated Parmesan (optional)']"
                :instructions="['Preheat oven to 475°F with pizza stone if available.', 'Roll out pizza dough on a floured surface to desired thickness.', 'Transfer dough to pizza pan or parchment paper.', 'Spread tomato sauce evenly, leaving a border for the crust.', 'Arrange mozzarella and tomato slices on top.', 'Drizzle with olive oil and season with salt.', 'Bake for 12-15 minutes until crust is golden and cheese is bubbly.', 'Top with fresh basil leaves and serve hot.']"
            />

            <!-- Fluffy Buttermilk Pancakes -->
            <x-food-card 
                recipeId="4"
                title="Fluffy Buttermilk Pancakes"
                description="Light and fluffy pancakes perfect for a weekend breakfast. Serve with maple syrup and fresh berries."
                image="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=300&fit=crop"
                category="Breakfast"
                prepTime="10 mins"
                servings="4"
                likes="28"
                userName="Sarah Johnson"
                :ingredients="['2 cups all-purpose flour', '2 tablespoons sugar', '2 teaspoons baking powder', '1 teaspoon baking soda', '1/2 teaspoon salt', '2 cups buttermilk', '2 large eggs', '1/4 cup melted butter', '1 teaspoon vanilla extract']"
                :instructions="['In a large bowl, whisk together flour, sugar, baking powder, baking soda, and salt.', 'In another bowl, whisk together buttermilk, eggs, melted butter, and vanilla.', 'Pour wet ingredients into dry ingredients and stir until just combined. Do not overmix.', 'Heat a griddle or large skillet over medium heat and lightly grease.', 'Pour 1/4 cup batter for each pancake onto the griddle.', 'Cook until bubbles form on the surface, then flip and cook until golden brown.', 'Serve immediately with your favorite toppings.']"
                :comments="[
                    [
                        'id' => 1,
                        'user_name' => 'Michael Chen',
                        'user_avatar' => 'https://ui-avatars.com/api/?name=Michael+Chen&background=random',
                        'body' => 'These pancakes were amazing! My whole family loved them. Thanks for sharing!',
                        'created_at' => '2025-10-21T10:30:00Z'
                    ],
                    [
                        'id' => 2,
                        'user_name' => 'Emma Rodriguez',
                        'user_avatar' => 'https://ui-avatars.com/api/?name=Emma+Rodriguez&background=random',
                        'body' => 'Can I substitute regular milk for buttermilk?',
                        'created_at' => '2025-10-22T14:15:00Z'
                    ]
                ]"
            />

            <!-- Classic Caesar Salad -->
            <x-food-card 
                recipeId="5"
                title="Classic Caesar Salad"
                description="A crisp and refreshing Caesar salad with homemade croutons and creamy dressing."
                image="https://images.unsplash.com/photo-1546793665-c74683f339c1?w=400&h=300&fit=crop"
                category="Lunch"
                prepTime="15 mins"
                servings="4"
                likes="21"
                userName="Michael Chen"
                :ingredients="['1 large head romaine lettuce', '1/2 cup croutons', '1/4 cup grated Parmesan', '2 anchovy fillets', '2 cloves garlic', '1/4 cup olive oil', '2 tbsp lemon juice', '1 egg yolk', 'Salt and pepper to taste']"
                :instructions="['Wash and chop romaine lettuce into bite-sized pieces.', 'Make croutons by toasting bread cubes with olive oil until golden.', 'Mash anchovies and garlic together in a bowl.', 'Whisk in egg yolk, lemon juice, and olive oil to make dressing.', 'Toss lettuce with dressing until well coated.', 'Add croutons and grated Parmesan cheese.', 'Season with salt and pepper, then serve immediately.']"
            />

            <!-- Grilled Salmon with Lemon Butter -->
            <x-food-card 
                recipeId="6"
                title="Grilled Salmon with Lemon Butter"
                description="Tender grilled salmon fillets with a zesty lemon butter sauce. Perfect for a healthy dinner."
                image="https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=400&h=300&fit=crop"
                category="Dinner"
                prepTime="10 mins"
                servings="4"
                likes="35"
                userName="Emma Rodriguez"
                :ingredients="['4 salmon fillets (6 oz each)', '4 tbsp butter', '2 lemons', '2 cloves garlic, minced', '2 tbsp fresh dill', 'Salt and pepper to taste', 'Olive oil for grilling']"
                :instructions="['Preheat grill to medium-high heat and oil the grates.', 'Season salmon fillets with salt and pepper on both sides.', 'Grill salmon skin-side down for 5-6 minutes, then flip.', 'Cook for another 4-5 minutes until fish flakes easily.', 'While salmon cooks, melt butter in a small pan.', 'Add garlic, lemon juice, and dill to the butter sauce.', 'Remove salmon from grill and drizzle with lemon butter sauce.', 'Serve hot with lemon wedges on the side.']"
            />
        </div>
    </div>
</x-app-layout> 