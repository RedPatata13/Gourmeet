<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class foodCard extends Component
{
    public $recipeId;
    public $title;
    public $description;
    public $image;
    public $category;
    public $categoryColor;
    public $prepTime;
    public $servings;
    public $likes;
    public $userName;
    public $userAvatar;
    public $ingredients;
    public $instructions;
    public $comments;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $recipe = null,
        $recipeId = null,
        $title = 'Recipe Title',
        $description = 'Recipe description',
        $image = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400',
        $category = 'Dinner',
        $prepTime = '10 mins',
        $servings = '4',
        $likes = '0',
        $userName = 'User Name',
        $userAvatar = null,
        $ingredients = null,
        $instructions = null,
        $comments = null
    ) {
        // If array is passed, extract data from it
        if (is_array($recipe)) {
            $this->recipeId = $recipe['id'] ?? $recipeId;
            $this->title = $recipe['title'] ?? $title;
            $this->description = $recipe['description'] ?? $recipe['body'] ?? $description;
            $this->image = $recipe['image'] ?? $recipe['cover_image'] ?? $image;
            $this->category = $recipe['category'] ?? $category;
            $this->prepTime = $recipe['prep_time'] ?? $recipe['prepTime'] ?? $prepTime;
            $this->servings = $recipe['servings'] ?? $servings;
            $this->likes = $recipe['likes'] ?? $recipe['reaction_count'] ?? $likes;
            $this->userName = $recipe['user_name'] ?? $recipe['user']['name'] ?? $userName;
            $this->userAvatar = $recipe['user_avatar'] ?? $recipe['user']['avatar'] ?? $userAvatar;
            $this->ingredients = $recipe['ingredients'] ?? $ingredients;
            $this->instructions = $recipe['instructions'] ?? $instructions;
            $this->comments = $recipe['comments'] ?? $comments;
            $this->categoryColor = $this->getCategoryColor($this->category);
            $this->userAvatar = $this->userAvatar ?? "https://ui-avatars.com/api/?name=" . urlencode($this->userName) . "&background=random";
            return;
        }

        // Otherwise use individual parameters (current implementation)
        $this->recipeId = $recipeId;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;
        $this->categoryColor = $this->getCategoryColor($category);
        $this->prepTime = $prepTime;
        $this->servings = $servings;
        $this->likes = $likes;
        $this->userName = $userName;
        $this->userAvatar = $userAvatar ?? "https://ui-avatars.com/api/?name=" . urlencode($userName) . "&background=random";
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.food-card');
    }

    /**
     * Get category color class
     */
    private function getCategoryColor($category)
    {
        return match($category) {
            'Breakfast' => 'bg-orange-600',
            'Lunch' => 'bg-green-500',
            'Dinner' => 'bg-blue-600',
            'Dessert' => 'bg-pink-500',
            'Snack' => 'bg-yellow-500',
            'Appetizer' => 'bg-purple-500',
            default => 'bg-gray-600',
        };
    }
}
