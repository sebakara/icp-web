@foreach($blogs as $blog)
<div class="blog-item">
    <img src="{{ asset($blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $blog->title }}</h4>
        <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}" class="btn btn-primary" style="margin-bottom:1%">Read More</a>
    </div>
</div>
@endforeach
