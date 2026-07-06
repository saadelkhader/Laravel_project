<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'exemple' }}</title>
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style>
        .card {
            background-color: #693c3c;
            padding: 1rem; 
            border-radius: 0.5rem;
        }
        .max-w-400 {
            max-width: 400px;
        }
        nav {
            display: flex;
            gap: 1rem;
            background-color: #e02828;
            padding: 1rem;
        }
        main {
            padding: 2rem;
        }
    </style>
</head>
<body class="bg-gray-900 text-white margin-0 p-0 ">
    <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
    </nav>
    <main>
    {{ $slot }}
    </main>
</body>
</html>