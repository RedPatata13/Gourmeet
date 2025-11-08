<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class viewRecipe extends Component
{
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

    /**
     * Create a new component instance.
     */
    public function __construct(
        $title = 'Recipe Title',
        $description = 'Recipe description',
        $image = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400',
        $category = 'Dinner',
        $prepTime = '10 mins',
        $servings = '4',
        $likes = '0',
        $userName = 'User Name',
        $userAvatar = null
    ) {
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
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.view-recipe');
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
