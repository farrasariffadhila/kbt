<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tronic</title>
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #87CEEB; /* Warna biru langit */
                background-image: linear-gradient(to bottom, #87CEEB, #f0f8ff); /* Gradasi dari biru langit ke putih lembut */
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: Figtree, sans-serif;
                flex-direction: column;
            }

            .title {
                font-size: 48px;
                font-weight: bold;
                color: #1E90FF; /* Biru laut */
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                margin-bottom: 20px;
                font-family: 'Courier New', Courier, monospace; /* Gaya font unik */
                letter-spacing: 5px;
            }

            .button-container {
                display: flex;
                gap: 20px;
            }

            .button-container a {
                display: inline-block;
                padding: 15px 30px;
                font-size: 18px;
                color: white;
                background-color: transparent;
                border: 2px solid #1E90FF; /* Warna biru laut */
                border-radius: 10px;
                text-decoration: none;
                text-align: center;
                transition: all 0.3s ease;
            }

            .button-container a:hover {
                background-color: #1E90FF; /* Efek hover dengan warna biru yang lebih pekat */
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="title">Tronic</div>
        <div class="button-container">
            <a href="{{ route('login') }}">Log in</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </body>
</html>
