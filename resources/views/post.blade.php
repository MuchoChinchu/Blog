<link rel="stylesheet" href="/app.css">

<head>
    <title>Mi Blog</title>

</head>

<body>
    <article>
        <h1>
            <a>
                {{ $post->title }}
            </a>
        </h1>


        <p>
            {{$post->body}}
        </p>

    </article>

    <a href="/">
        <- VOLVER

    </a>
<body>
