<!DOCTYPE html>
<html lang="en">

<head>

    @include('/includes.head')

</head>

<body>

    @include('/includes.header')

    <div>
        @yield('content')
    </div>

</body>
<footer>
    @include('includes.footer')
</footer>

</html>
