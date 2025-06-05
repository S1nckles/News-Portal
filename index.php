<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
</head>
<body>
<header>
    <nav>
      <h1>News <span>Portal</span></h1>
      <form action="#" method="get">
        <input type="search" placeholder="Search...">
        <button type="submit">🔍</button>
      </form>
      <button aria-label="Menu">☰</button>
    </nav>
  </header>

  <main>
    <section aria-labelledby="hot-topics">
      <h2 id="hot-topics">Hot Topics</h2>
      <div class="featured-news">
        <article>
          <img src="swimmer.jpg" alt="Swimming competition">
          <div>
            <h3>Massa tortor nibh nulla condimentum imperdiet scelerisque...</h3>
            <p><time datetime="2025-06-03T13:00">2 Hours Ago</time> | CNN Indonesia</p>
          </div>
        </article>
        <aside>
          <p><strong>Nisi</strong>, sagittis aliquet sit rutrum. Nunc, id vestibulum quam ornare adipiscing... <a href="#">read more</a></p>
        </aside>
      </div>
    </section>

    <section aria-labelledby="latest-news">
      <h2 id="latest-news">Latest News</h2>
      <div class="news-grid">
        <article>
          <img src="news1.jpg" alt="">
          <h3>News Title Lorem Ipsum Dolor Sit Amet</h3>
          <p><time datetime="2025-06-03T14:00">1 Hour Ago</time> | CNN Indonesia</p>
        </article>
        <!-- Повторюємо <article> для кожного блоку новин (усього 8 разів) -->
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2021 News Portal</p>
  </footer>
</body>
</html>