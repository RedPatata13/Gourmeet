@extends('layouts.AppLayout')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">All Recipes</h1>

    <div class="grid grid-cols-1 gap-6 justify-items-center">
        @if($recipes->isEmpty())
            <div class="text-center p-6 bg-gray-100 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">No Recipes Found</h2>
                <p class="text-gray-600">It looks like there are no recipes yet. Check back later or add your own!</p>
            </div>
        @else
            @foreach($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        @endif
    </div>
</div>
@endsection
