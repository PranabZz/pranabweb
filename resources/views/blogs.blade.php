<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="box max-w-7xl mx-auto">
    <div>
        <nav>
            <div class="nav-heading">PranabWrites</div>
            <div class="nav-links"><a href="{{ route('portfolio') }}">Portfolio</a></div>
        </nav>
        <section>
            @foreach ($blogs as $blog)
                <div class="card">
                    <a href="{{ route('blog-show', $blog->slug) }}">
                        <div class="img"><img src="{{ $blog->thumbnailUrl() }}" alt="{{ $blog->thumbnailUrl() }} " class="flex jusitify-center object-cover" >
                        </div>
                        <div class="text">
                            <div class="title">{{ $blog->title }}</div>
                            <div class="category ">{{ $blog->category }}</div>
                            <div class="desc line-clamp-2">{!!$blog->preview!!}</div>
                            <div class="time">{{$blog->date()}}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
    </div>
</body>

</html>
