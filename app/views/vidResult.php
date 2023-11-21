<header class="container">
    <section class="header-section">
        <div class="logo-section">
            <a href="/"><img src="icon/logo.png" alt="Gyan logo" height="40px" /></a>
        </div>
        <form class="search-container" action="\search" method="GET">
            <input type="hidden" name="type" value="<?= $type ?>">
            <input class="search-box" type="text" name="s" autocomplete="off" spellcheck="off" value="<?= $term ?>">
            <button class="search-button">Search</button>
        </form>
    </section>
    <div class="tabs-container">
        <ul class="tab-list">
            <li class="<?= $type == 'site' ? "active" : ""; ?>">
                <a href='search?query=<?= $term ?>&type=site'>Sites</a>
            </li>
            <li class="<?= $type == 'img' ? 'active' : '' ?>">
                <a href='search?query=<?= $term ?>&type=img'>Images</a>
            </li>
            <li class="<?= $type == 'vid' ? 'active' : '' ?>">
                <a href='search?query=<?= $term ?>&type=vid'>Videos</a>
            </li>
        </ul>
    </div>
</header>
<main class="results-section" style="margin:0 auto;">

    <div class='vid-results m-20'>
        <div class='result-container'>
            <h1 class="center">Under Construction...</h1>
        </div>
        <!-- <p>$timetaken ms time taken"</p> -->
    </div>
</main>