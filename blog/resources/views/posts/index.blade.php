<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>
</head>

<body>
    <h1>Welcome to Coders Free Blog</h1>

    <!--<script>
        let posts = @json($posts);
    </script>

    @if (true)
<p>There are posts available.</p>
@else
<p>No posts available at the moment.</p>
@endif

    @unless (false)
    <p>This section is displayed because the condition is false.</p>
@endunless

    @isset($prueba)
    <p>The variable 'prueba' is set and its value is: {{ $prueba }}</p>
@endisset

    @empty($record)
@endempty

    @env('local')
    <p>This is the local environment.</p>
@endenv

    @production
            <p>This is the production environment.</p>
    @endproduction
    -->
    <ul>
        @forelse ($posts as $item)
            <li>
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['content'] }}</p>
            </li>
         @empty
            <p>No posts available.</p>
         @endforelse
    </ul>

    <ul>
        @for ($i = 1; $i < $cant; $i++)
            <li>Post number {{ $i }}</li>
        @endfor
    </ul>
</body>

</html>
