<!DOCTYPE html>

<link rel="stylesheet" href="/app.css">

<head>
    <title>Mi Blog</title>

</head>

<body>


@foreach($posts as $post)

    <article>
        <h1>
            <a href="/post/{{$post->id}}">
                {{ $post->title }}
            </a>
        </h1>


        <p>
            {{ $post->body }}
        </p>

    </article>
@endforeach


</body>
