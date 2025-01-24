<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コミック一覧</title>
</head>
<body>
    <h1>ユーザーのコミック一覧</h1>
    <ul>
@foreach($comics as $comic)
    <li>{{ $comic['title'] }} - {{ $comic['author'] }}</li>
    @endforeach
    </ul>
    <a href="{{ url('/users') }}">ユーザー一覧に戻る</a>
    </body>
    </html>
