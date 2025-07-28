<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::with(['user', 'category'])
            ->where('status', 'published')
            ->latest()
            ->paginate(12);

        $categories = Category::all();

        return Inertia::render('Ideas/Index', [
            'ideas' => $ideas,
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return Inertia::render('Ideas/Create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required|exists:categories,slug',
            'stage' => 'required|in:idea,mvp,prototype,traction,launched',
            'team_members' => 'nullable|array',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $validated['user_id'] = Auth::id();

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Idea::create($validated);

        return redirect()->route('dashboard')->with('success', 'Ide berhasil dibuat!');
    }

    public function show(Idea $idea)
    {
        $idea->load(['user', 'progress', 'category']);
        $idea->increment('views');

        $relatedIdeas = Idea::where('category', $idea->category)
            ->where('id', '!=', $idea->id)
            ->where('status', 'published')
            ->limit(4)
            ->get();

        return Inertia::render('Ideas/Show', [
            'idea' => $idea,
            'relatedIdeas' => $relatedIdeas,
        ]);
    }

    public function edit(Idea $idea)
    {
        $this->authorize('update', $idea);

        $categories = Category::all();

        return Inertia::render('Ideas/Edit', [
            'idea' => $idea,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Idea $idea)
    {
        $this->authorize('update', $idea);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required|exists:categories,slug',
            'stage' => 'required|in:idea,mvp,prototype,traction,launched',
            'team_members' => 'nullable|array',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $idea->update($validated);

        return redirect()->route('ideas.show', $idea)->with('success', 'Ide berhasil diupdate!');
    }

    public function destroy(Idea $idea)
    {
        $this->authorize('delete', $idea);

        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Ide berhasil dihapus!');
    }

    public function myIdeas()
    {
        $ideas = Auth::user()->ideas()->with('category')->latest()->paginate(10);

        return Inertia::render('Ideas/MyIdeas', [
            'ideas' => $ideas,
        ]);
    }
}
