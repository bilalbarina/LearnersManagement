<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> {{ $title ?? 'Home' }} </title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>

<body>
    @if ($errors->has('*'))
        <div class="text-white bg-red-600 w-full py-2 text-sm font-semibold text-center">
            {{ $errors->first() }}
        </div>
    @elseif (Session::has('success'))
        <div class="text-white bg-green-500 w-full py-2 text-sm font-semibold text-center" id="success">
            {{ Session::get('success') }}
        </div>
    @endif
    @yield('body')

    @yield('scripts')
    <script>
        setTimeout(() => {
            $('#success').hide()
        }, 2000);
    </script>
</body>
</html>
