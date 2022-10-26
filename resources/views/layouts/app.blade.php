<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" sizes="192*192" href="networking.png">

    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .post {
            position: relative;
            flex: 1 0 220px;
            color: #fff;
            cursor: pointer;
            width: 293px;
            height: 293px;
        }

        .post:hover .post-info,
        .post:focus .post-info {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);


        }

        .post-info {
            display: none;
        }
    </style>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            {{ $header }}
        </header>
        @endif

        <!-- Page Content -->
        <main class="mt-10 pb-2">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <script>
        let img = document.getElementById('postImage');
        let sec1 = document.getElementById('sec1');
        let sec3 = document.getElementById('sec3');
        let sec4 = document.getElementById('sec4');
        if(img!=null){
            let imgheight = img.offsetHeight;
            let sec1Height = sec1.offsetHeight;
            let sec3Height = sec3.offsetHeight;
            let sec4Height = sec4.offsetHeight;
            let height = imgheight - (sec1Height + sec3Height + sec4Height);
            document.getElementById('commentArea').style.maxHeight = height.toString()+'px';
        }
    </script>
</body>

</html>