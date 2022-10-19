<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Promotion </title>
</head>

<body style="padding: 5rem">
    @if (Session::has('success'))
        <span>
            {{ Session::get('success') }}
        </span>
        <br>
        <br>
    @endif
    <div style="display: flex; justify-content: space-between;">
        <div>
            <input type="text" placeholder="Search" id="search-input">
        </div>
        <div>
            <a href="{{ route('promotion.create') }}">
                <button> Ajouter </button>
            </a>
        </div>
    </div>
    <br>
    <hr>
    <div id="promotions">
        <ul>
            @foreach ($promotions as $promotion)
                <li>
                    {{ $promotion->title }}
                    <a href="{{ route('promotion.edit', ['promotion' => $promotion]) }}"> Edit </a>
                    <a href="{{ route('promotion.delete', ['promotion' => $promotion]) }}"> Delete </a>
                </li>
            @endforeach
        </ul>
    </div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
