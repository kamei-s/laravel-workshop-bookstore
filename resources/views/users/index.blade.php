<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #2b7de1;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #2b7de1;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1>ユーザー一覧</h1>
<ul>
    @forelse($users as $user)
        <li>
            <a href="{{ url('/users/' . $user['id'] . '/comics') }}">
                {{ $user['name'] }}
            </a>
        </li>
    @empty
        <li>ユーザーが見つかりません。</li>
    @endforelse
</ul>
</body>
</html>
