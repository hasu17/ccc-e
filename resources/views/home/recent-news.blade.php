<section class="recent-news">
    <h2 class="section-title">Recent News</h2>
    <div class="news-cards">
        @for($i = 0; $i < 3; $i++)
        <div class="news-card">
            <img src="{{ asset('images/news' . ($i+1) . '.jpg') }}" alt="News Image">
            <div class="news-content">
                <h3>News Title {{ $i+1 }}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor.</p>
            </div>
        </div>
        @endfor
    </div>
</section>
