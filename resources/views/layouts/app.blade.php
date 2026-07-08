<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PT Bumi Insan Perkasa')</title>

    {{-- SEO --}}
    <meta name="description"
        content="PT Bumi Insan Perkasa is a trusted engineering and industrial contractor providing General Contractor, Mechanical Works, Scaffolding, Insulation, Refractory, Labour Supply, and General Trade services in Indonesia.">

    <meta name="keywords"
        content="PT Bumi Insan Perkasa, General Contractor, Mechanical Works, Scaffolding, Insulation, Refractory, Labour Supply, General Trade">

    <meta name="author" content="PT Bumi Insan Perkasa">

    {{-- Theme Color --}}
    <meta name="theme-color" content="#0f172a">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="PT Bumi Insan Perkasa">
    <meta property="og:description"
        content="Trusted engineering company providing General Contractor, Mechanical, Scaffolding, Insulation & Refractory services.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="PT Bumi Insan Perkasa">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PT Bumi Insan Perkasa">
    <meta name="twitter:description"
        content="Trusted engineering company providing General Contractor, Mechanical, Scaffolding, Insulation & Refractory services.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div
    id="scrollProgress"
    class="fixed top-0 left-0 h-1 bg-blue-700 z-[9999]"
    style="width: 0%">
    </div>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.back-to-top')

</body>

</html>