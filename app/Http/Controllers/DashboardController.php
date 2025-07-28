<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Pastikan user sudah load relationship ideas
        $user->load('ideas');

        $stats = [
            'totalIdeas' => $user->ideas->count(),
            'publishedIdeas' => $user->ideas->where('status', 'published')->count(),
            'totalViews' => $user->ideas->sum('views'),
            'totalLikes' => $user->ideas->sum('likes'),
        ];

        $recentIdeas = $user->ideas()->latest()->limit(5)->get();

        $featuredIdeas = Idea::where('is_featured', true)
            ->where('status', 'published')
            ->with('user')
            ->limit(6)
            ->get();

        return Inertia::render('Dashboard', [
            'stats' => $stats,
            'recentIdeas' => $recentIdeas,
            'featuredIdeas' => $featuredIdeas,
        ]);
    }
}
