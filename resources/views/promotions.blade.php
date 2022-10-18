<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Promotion </title>
</head>
<body style="padding: 5rem">
    <form action="{{ route('promotions.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="submit" value="Create Promotion">
    </form>

    <ul>
        @foreach ($promotions as $promotion)
        <li>
            {{ $promotion->title }}
        </li>
        @endforeach    
    </ul>
</body>
</html>