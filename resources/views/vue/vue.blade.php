<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <title>Document</title>
</head>
<body>

<div id="app">

    @include ('vue.header')

    <section class="section">
        <div class="container">
            <router-view></router-view>
        </div>
    </section>


</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>