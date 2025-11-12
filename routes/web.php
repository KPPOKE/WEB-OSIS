<?php
use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestPosts = \App\Models\Posts::where('status', 'published')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->orderByDesc('published_at')
        ->take(3)
        ->get();
    $upcomingEvents = \App\Models\Event::where('status', 'published')
        ->where('starts_at', '>=', now()->startOfDay())
        ->orderBy('starts_at')
        ->take(3)
        ->get();
    return view('home',[
        'title' => 'Home',
        'latestPosts' => $latestPosts,
        'upcomingEvents' => $upcomingEvents,
    ]);
});

Route::get('about', function () {
    return view('about',['title' => 'About']);
});




Route::get('/ekskul', [EskulController::class, 'index'])->name('eskul.index');
Route::redirect('/eskul', '/ekskul', 301);


Route::get('news', function () {
    $posts = \App\Models\Posts::where('status', 'published')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->orderByDesc('published_at')
        ->paginate(8);
    return view('news',[
        'title' => 'Berita',
        'posts' => $posts,
    ]);
});

Route::get('news/{slug}', function (string $slug) {
    $post = \App\Models\Posts::where('slug', $slug)->firstOrFail();
    abort_if($post->status !== 'published' || empty($post->published_at) || $post->published_at->isFuture(), 404);
    return view('news-detail', [
        'title' => $post->name,
        'post' => $post,
    ]);
});

Route::get('event', function () {
    $events = \App\Models\Event::where('status', 'published')
        ->orderBy('starts_at')
        ->paginate(6);
    return view('event', [
        'title' => 'Acara',
        'events' => $events,
    ]);
});

Route::get('event/{slug}', function (string $slug) {
    $event = \App\Models\Event::where('slug', $slug)->firstOrFail();
    return view('event-detail', [
        'title' => $event->title,
        'event' => $event,
    ]);
});

Route::get('contact', function () {
    return view('contact',['title' => 'Contact']);
});
