<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <!-- Link to the external stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-container">
    <!-- Navbar -->
@include('components.navbar')
    <!-- Main News List View -->
    <div id="main-list-view" class="main-list-view">
        <!-- Header -->
        <header class="header">
            <h1 class="header-title">News</h1>
            <div class="header-icons">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
        </header>

        <!-- Search Bar and Categories -->
        <div class="search-and-categories">
            <div class="search-container">
                <input type="text" placeholder="Search..." class="search-input">
                <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <div class="category-container">
                <select class="category-select">
                    <option>All Categories</option>
                    <option>Category 1</option>
                    <option>Category 2</option>
                    <option>Category 3</option>
                </select>
                <div class="select-arrow">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15 9.707l-1.414-1.414L10 12.086l-3.293-3.293L5.293 9.707z"/></svg>
                </div>
            </div>
        </div>

        <!-- Top Posts Section -->
        <div class="top-posts-section">
            <h2 class="section-title">Top Posts</h2>
            <div class="top-posts-grid scrollbar-hide">
                <!-- Repeat this card for each top post -->
                <div class="post-card">
                    <img class="post-image" src="https://placehold.co/600x400/87CEEB/ffffff?text=Post+Image" alt="Top Post Image">
                    <div class="post-content">
                        <h3 class="post-title">UNIPORT Department of Agriculture develops local pest resistant and replantable maize</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button onclick="showArticleView()" class="read-more-button">Read More</button>
                    </div>
                </div>
                <div class="post-card">
                    <img class="post-image" src="https://placehold.co/600x400/F08080/ffffff?text=Post+Image" alt="Top Post Image">
                    <div class="post-content">
                        <h3 class="post-title">Another great article title here</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button onclick="showArticleView()" class="read-more-button">Read More</button>
                    </div>
                </div>
                <div class="post-card">
                    <img class="post-image" src="https://placehold.co/600x400/90EE90/ffffff?text=Post+Image" alt="Top Post Image">
                    <div class="post-content">
                        <h3 class="post-title">A third post about something interesting</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button onclick="showArticleView()" class="read-more-button">Read More</button>
                    </div>
                </div>
                <div class="post-card">
                    <img class="post-image" src="https://placehold.co/600x400/FFD700/ffffff?text=Post+Image" alt="Top Post Image">
                    <div class="post-content">
                        <h3 class="post-title">And a fourth one to fill the space</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button onclick="showArticleView()" class="read-more-button">Read More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Posts Section -->
        <div class="recent-posts-section">
            <h2 class="section-title">Recent posts</h2>
            <div class="recent-posts-grid">
                <!-- Repeat this card for each recent post -->
                <div class="recent-post-card">
                    <div class="recent-post-flex">
                        <img class="recent-post-image" src="https://placehold.co/100x100/A9A9A9/ffffff?text=Post+Image" alt="Recent Post Image">
                        <div>
                            <h3 class="recent-post-title">A simple post title</h3>
                            <p class="recent-post-excerpt">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                <span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="recent-post-card">
                    <div class="recent-post-flex">
                        <img class="recent-post-image" src="https://placehold.co/100x100/A9A9A9/ffffff?text=Post+Image" alt="Recent Post Image">
                        <div>
                            <h3 class="recent-post-title">A simple post title</h3>
                            <p class="recent-post-excerpt">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                <span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="recent-post-card">
                    <div class="recent-post-flex">
                        <img class="recent-post-image" src="https://placehold.co/100x100/A9A9A9/ffffff?text=Post+Image" alt="Recent Post Image">
                        <div>
                            <h3 class="recent-post-title">A simple post title</h3>
                            <p class="recent-post-excerpt">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                <span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="recent-post-card">
                    <div class="recent-post-flex">
                        <img class="recent-post-image" src="https://placehold.co/100x100/A9A9A9/ffffff?text=Post+Image" alt="Recent Post Image">
                        <div>
                            <h3 class="recent-post-title">A simple post title</h3>
                            <p class="recent-post-excerpt">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                <span>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More posts button -->
        <div class="more-posts-container">
            <button onclick="showMorePostsView()" class="more-posts-button">
                <span>More posts</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Single News Article View (Full Screen) - hidden by default -->
    <div id="article-view" class="article-view hidden">
        <!-- Header for article view -->
        <header class="article-header">
            <!-- Back button -->
            <button onclick="showListView()" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span>Back to News</span>
            </button>
        </header>

        <!-- Article content -->
        <div class="article-content">
            <img class="article-image" src="https://placehold.co/800x600/6A5ACD/ffffff?text=Main+Article+Image" alt="Main Article Image">
            <div class="article-text-container">
                <div class="article-breadcrumb">
                    <a href="#" class="breadcrumb-link">Home</a> &gt; News
                </div>
                <h2 class="article-title">UNIPORT Department of Agriculture. Develops local pest resistant and replantable maize</h2>
                <p class="article-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    <br><br>
                    Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque dapibus elit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.
                    <br><br>
                    Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                </p>
            </div>
        </div>
    </div>

    <!-- More Posts View (Full Screen) - hidden by default -->
    <div id="more-posts-view" class="more-posts-view hidden">
        <!-- Header for more posts view -->
        <header class="article-header back-button-container">
            <button onclick="showListView()" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span>Back to News</span>
            </button>
        </header>
        <h2 class="section-title">All Posts</h2>
        <div class="all-posts-grid">
            <!-- A grid of posts, 3x3 layout on larger screens -->
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/87CEEB/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">First full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/F08080/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Second full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/90EE90/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Third full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/FFD700/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Fourth full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/A9A9A9/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Fifth full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/B0E0E6/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Sixth full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <!-- More posts added for a more complete grid view -->
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/DDA0DD/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Seventh full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/ADD8E6/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Eighth full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
            <div class="post-card">
                <img class="post-image" src="https://placehold.co/600x400/4682B4/ffffff?text=Post+Image" alt="Post Image">
                <div class="post-content">
                    <h3 class="post-title">Ninth full-page post title</h3>
                    <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button onclick="showArticleView()" class="read-more-button">Read More</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const mainListView = document.getElementById('main-list-view');
        const articleView = document.getElementById('article-view');
        const morePostsView = document.getElementById('more-posts-view');

        // Function to show the single article view and hide the other views
        function showArticleView() {
            mainListView.classList.add('hidden');
            morePostsView.classList.add('hidden');
            articleView.classList.remove('hidden');
        }

        // Function to show the main news list view and hide the other views
        function showListView() {
            mainListView.classList.remove('hidden');
            articleView.classList.add('hidden');
            morePostsView.classList.add('hidden');
        }

        // Function to show the more posts view and hide the other views
        function showMorePostsView() {
            mainListView.classList.add('hidden');
            articleView.classList.add('hidden');
            morePostsView.classList.remove('hidden');
        }
    </script>
    @include('components.footer')
</body>
</html>
