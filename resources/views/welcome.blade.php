<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: midnightblue;
        }

        .container {
            background-color: blanchedalmond;
            width: 600px;
            padding: 25px;
            text-align: center;
            border-radius: 10px;
        }

        .todo-body {
            display: flex;
            align-items: center;
            background-color: darkgray;
            border-radius: 30px;
            margin-bottom: 20px;
            padding: 10px
        }

        .todo-body input {
            border: none;
            outline: none;
            background: transparent;
            padding: 5px 0;
            font-size: 20px;
            width: 600px;
        }
    </style>
</head>

<body class="antialiased">
    @livewire('todo-list')
</body>

</html>
