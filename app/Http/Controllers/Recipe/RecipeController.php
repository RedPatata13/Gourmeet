<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Events\PostCreated;
use App\Events\RecipeReacted;

class RecipeController extends Controller
{
    /**
     * Store a new recipe.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|json',
            'description' => 'required|string|max:500',
            'ingredients' => 'nullable|json',
            'cover_image' => 'nullable|string',
            'prep_time' => 'nullable|integer',
            'cook_time' => 'nullable|integer',
            'servings' => 'nullable|integer',
        ]);

        $recipe = Auth::user()->posts()->create($validated);

        event(new PostCreated($recipe));

        return response()->json([
            'message' => 'Recipe created successfully',
            'recipe'  => $recipe
        ]);
    }

    /**
     * Show a recipe by ID.
     */
    public function show(Recipe $recipe)
{
    // Eager load relationships
    $recipe->load('user', 'comments.user');

    return view('recipeDetails', compact('recipe'));
}


    /**
     * Show a recipe by slug.
     */
    public function showBySlug($slug)
    {
        $recipe = Recipe::with('user')
                        ->where('slug', $slug)
                        ->firstOrFail();

        return view('recipeDetails', compact('recipe'));
    }

    /**
     * Toggle a like reaction for the given recipe.
     */
    public function like(Request $request, Recipe $recipe)
    {
        $user = Auth::user();

        // Toggle the like
        $existingReaction = $recipe->reactions()
                                   ->where('user_id', $user->id)
                                   ->first();

        if ($existingReaction) {
            // Unlike
            $existingReaction->delete();
            $recipe->decrement('reaction_count');
            $status = 'unliked';
        } else {
            // Like
            $recipe->reactions()->create([
                'user_id' => $user->id,
            ]);
            $recipe->increment('reaction_count');
            $status = 'liked';
        }

        // Optionally broadcast for real-time updates
        broadcast(new RecipeReacted($recipe, $user))->toOthers();

        return response()->json([
            'message' => 'Reaction updated successfully',
            'status'  => $status,
            'reaction_count' => $recipe->reaction_count,
        ]);
    }

    /**
     * Add a comment to a recipe.
     */
    public function comment(Request $request, Recipe $recipe)
    {
        $validated = $request->validate([
            'body' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = $recipe->comments()->create([
            'recipe_id' => $recipe->id,
            'user_id'   => Auth::id(),
            'body'      => $validated['body'],
            'parent_id' => $validated['parent_id'] ?? null,
        ]);

        $recipe->increment('comment_count');

        // (optional) broadcast event here, e.g., RecipeCommented

        // return response()->json([
        //     'message' => 'Comment added successfully',
        //     'comment' => $comment,
        // ]);

        return redirect()->back()->with('success','Comment added successfully');
    }

    /**
     * List all recipes (for index page).
     */
    public function index()
    {
        $recipes = Recipe::with('user')->latest()->get();
        return view('recipes.index', compact('recipes'));
    }
}
