<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
@include('components.navbar')
<div class="news-container">
    <div class="search-bar">
        <input type="text" placeholder="Search news...">
        <button class="category-btn">All Categories</button>
    </div>

    <h2>Top Posts</h2>
    <div class="top-posts">
        @foreach ($topPosts as $post)
            <div class="post-card">
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
                <h3><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></h3>
                <p>{{ Str::limit($post->excerpt, 80) }}</p>
                <a class="read-btn" href="{{ route('news.show', $post->id) }}">Read More</a>
            </div>
        @endforeach
    </div>

    <h2>Recent Posts</h2>
    <div class="recent-posts">
        @foreach ($recentPosts as $post)
            <div class="recent-card">
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
                <div>
                    <h4><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></h4>
                    <p>{{ Str::limit($post->excerpt, 60) }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="more-btn-container">
        <button class="more-btn">More Posts</button>
    </div>
</div>
@include('components.footer')
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Make sure it's inside public/css -->
  
</head>
<body>

    @include('components.navbar')

    <main class="news-container">
        <div class="search-bar">
            <input type="text" placeholder="Search news...">
            <button class="category-btn">All Categories</button>
        </div>

        <h2>Top Posts</h2>
        <div class="top-posts">
            @foreach ($topPosts as $post)
                <div class="post-card">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                    <h3><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></h3>
                    <p>{{ Str::limit($post->excerpt, 80) }}</p>
                    <a class="read-btn" href="{{ route('news.show', $post->id) }}">Read More</a>
                </div>
            @endforeach
        </div>

        <h2>Recent Posts</h2>
        <div class="recent-posts">
            @foreach ($recentPosts as $post)
                <div class="recent-card">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                    <div>
                        <h4><a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a></h4>
                        <p>{{ Str::limit($post->excerpt, 60) }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="more-btn-container">
            <button class="more-btn">More Posts</button>
        </div>
    </main>

    @include('components.footer')

</body>
</html>
