<head>
    <title>{{ config('app.name') }} ~ SVG</title>
    @livewireStyles
    <link rel="stylesheet" href="./assets/css/styles.css" />
</head>

<body>
    @livewire('livewire-ui-modal')

    {{ $slot }}
</body>
<footer>
    @livewireScripts
    <!-- Alpine v3 -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Focus plugin -->
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
</footer>