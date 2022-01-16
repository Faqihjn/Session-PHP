<!doctype html>
<html lang="en">

<head>
    @include('layouts/head')
</head>

<body>
    @include('layouts/header')

    <main role="main " class="container">
        @yield('content')
    </main>

    @include('layouts/footer')
    @include('layouts/scripts')
</body>
</html>