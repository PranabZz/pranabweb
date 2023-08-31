<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}" />
    <script src="https://<hostname.tld>/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/h7bgs0zxn4ow1b8yy88h9bbv0t53xqy7c791pd4ew2qz3hsj/tinymce/6/plugins.min.js"
        referrerpolicy="origin"></script>
</head>

<body>
    <div class="blog">
        <nav>
            <div class="nav-heading">PranabWrites</div>
            <div class="nav-links">Portfolio</div>
        </nav>
        <section>
            <div class="blog">
                <div class="img"><img src="{{ $blog->thumbnailUrl() }}" alt="{{ $blog->thumbnailUrl() }}">
                </div>
                <div class="text">
                    <div class="title text-5xl">{{ $blog->title }}</div>
                    <div class="category ">
                        {{ $blog->category }}
                    </div>

                    <div class="description">{!!$blog->description!!}</div>

                </div>
    
            </div>
        </section>
    </div>
</body>

</html>
