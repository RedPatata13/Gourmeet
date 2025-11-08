<?php

namespace App\Http\Controllers\Recipe;

// use App\Events\PostCreated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Events\PostCreated;
class RecipeController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required:|string',
            'ingredients' => 'nullable|json',
            'cover_image' => 'nullable|string',
            'prep_time' => 'nullable|integer',
            'cook_time' => 'nullable|integer',
            'servings' => 'nullable|integer',
        ]);

        // $recipe = auth()->user()->posts()->create(($validated));
        // $recipe = Auth::user()->recipe;
        $recipe = Auth::user()->posts()->create($validated);

        // broadcast(new \App\Events\PostCreated($recipe))->toOthers();   
        // event(PostCreated($recipe));
        event(new PostCreated($recipe));

        return response()->json(['message', 'Recipe created successfully', 'recipe' => $recipe]);
    }

    public function react(Request $request, Recipe $recipe){
        $validated = $request->validate(['type' => 'required|string']);

        $reaction = $recipe->reactions()->updateOrCreate([
            ['user_id' => Auth::id()],
            ['title'=> $validated['title']],
        ]);

        $recipe->update(['reaction_count' => $recipe->reactions()->count()]);

        broadcast(new \App\Events\RecipeReacted($recipe, $reaction))->toOthers();

        return response()->json(['message','Reaction added','reaction'=> $reaction]);
    }

    public function comment(Request $request, Recipe $recipe){
        $validated = $request->validate([
            'body' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = $recipe->comments()->create([
            'user_id' => Auth::id(),
            'body' => $validated['body'],
            'parent_id' => $validated['parent_id'] ?? null,
        ]);

        $recipe->increment('comment_count');
    }
}
