<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini invoices </title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        h1 { font-size: 3em; margin-bottom: 0.5em; }
        p { font-size: 1.2em; }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background: #fff;
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
            border-radius: 30px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #f0f0f0;
            color: #6a11cb;
        }
    </style>
</head>
<body>
    <div>
        <h1>   Mini Invoices </h1>
        <p>  Doing it easy !  </p>
        @if (Route::has('login'))
            <div>
                <a href="{{ route('login') }}" class="btn"> login</a>
                <a href="{{ route('register') }}" class="btn">register </a>
            </div>
        @endif
    </div>
</body>
</html>
