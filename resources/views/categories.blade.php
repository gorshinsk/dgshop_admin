<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категории</title>
</head>
<body>
    <h1>Список категорий</h1>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->title }}</li>
        @endforeach
    </ul>
</body>
</html>