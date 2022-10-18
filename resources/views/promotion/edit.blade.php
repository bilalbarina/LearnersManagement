<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Promotion </title>
</head>
<body style="padding: 5rem">
    <form action="{{ route('promotion.update', ['promotion' => $promotion]) }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ $promotion->title }}">
        <input type="submit" value="Update">
    </form>
</body>
</html>