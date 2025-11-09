<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Events\PostCreated;
use App\Events\RecipeReacted;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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
        'cover_image' => 'nullable|image|max:2048',
        'prep_time' => 'nullable|integer',
        'cook_time' => 'nullable|integer',
        'servings' => 'nullable|integer',
    ]);

    Log::info('Store method called', ['has_file' => $request->hasFile('cover_image')]);
    Log::info('=== STORE METHOD STARTED ===');
    
    // Debug the entire request
    Log::info('Request method: ' . $request->method());
    Log::info('Request headers:', $request->headers->all());
    Log::info('Request all data:', $request->all());
    Log::info('Request files:', $request->allFiles());

    Log::info('hasFile(cover_image): ' . ($request->hasFile('cover_image') ? 'YES' : 'NO'));
    Log::info('file(cover_image): ' . ($request->file('cover_image') ? 'EXISTS' : 'NULL'));
    Log::info('has(title): ' . ($request->has('cover_image') ? 'YES' : 'NO'));
    // Log::info();

    // Handle file upload with better debugging
    if ($request->hasFile('cover_image')) {
        $file = $request->file('cover_image');
        
        Log::info('File details', [
            'original_name' => $file->getClientOriginalName(),
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
            'is_valid' => $file->isValid()
        ]);

        try {
            // Try storing with different disks for testing
            $path = $file->store('recipes', 'public');
            
            Log::info('File stored successfully', [
                'path' => $path,
                'full_path' => storage_path('app/public/' . $path),
                'disk' => 'public'
            ]);

            $validated['cover_image'] = $path;

        } catch (\Exception $e) {
            Log::error('File storage failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'error' => 'File upload failed: ' . $e->getMessage()
            ], 500);
        }
    } else {
        Log::warning('No cover_image file found in request');
    }

    // Debug before creating recipe
    Log::info('Creating recipe with data', $validated);

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
        $recipe->load('user');
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
    if (!$user) {
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    // Check if user already liked
    $existingReaction = $recipe->reactions()->where('user_id', $user->id)->first();

    if ($existingReaction) {
        $existingReaction->delete();
        $status = 'unliked';
        $recipe->decrement('reaction_count');
    } else {
        $recipe->reactions()->create([
            'user_id' => $user->id,
            'type' => 'like',
            $recipe->increment('reaction_count')
        ]);
        $status = 'liked';
    }

    return response()->json([
        'message' => 'Reaction updated successfully',
        'status' => $status,
        'reaction_count' => $recipe->reactions()->count(),
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
            'user_id'   => Auth::id(),
            'body'      => $validated['body'],
            'parent_id' => $validated['parent_id'] ?? null,
        ]);

        $recipe->increment('comment_count');

        // (optional) broadcast event here, e.g., RecipeCommented

        return response()->json([
            'message' => 'Comment added successfully',
            'comment' => $comment,
        ]);
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
