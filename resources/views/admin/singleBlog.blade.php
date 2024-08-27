<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $blog->title }}</title>
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/styles.css') }}">
</head>

<body>
  <a style="margin-top: 1%;" href="/" class="btn">Home</a>
  <header class="header">

    <h1 class="post-title">{{ $blog->title }}</h1>
    <p>Published on {{ $blog->created_at}}</p>
  </header>

  <section class="featured-image-section">
    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="featured-image">
  </section>

  <section class="content">
    <p>{{ $blog->content }}</p>
  </section>

  <footer>

    <!-- Back to Home Button -->
    <a style="margin-bottom: 1%;" href="/" class="btn">Home</a>
  </footer>

</body>

</html>