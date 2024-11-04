@extends('layouts.app')

@section('content')
<section id="blog-detail" class="blog-detail">
    <div class="container">
        <div class="row">
            <main class="col-lg-8 blog-content">
                <article class="blog-post">
                    <h2 class="blog-title">{{ $blog->title }}</h2>
                    <img src="{{ asset($blog->image) }}" class="img-fluid blog-image" alt="{{ $blog->title }}">
                    <div class="blog-content mt-4">
                        <p>{{ $blog->content }}</p>
                    </div>
                </article>
            </main>

            <aside class="col-lg-4 sidebar">
                <h4>Other Blogs</h4>
                <ul class="list-group">
                    @foreach($otherBlogs as $otherBlog)
                        <li class="list-group-item">
                            <a href="{{ route('blogs.show', $otherBlog->id) }}">{{ $otherBlog->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</section>
@endsection