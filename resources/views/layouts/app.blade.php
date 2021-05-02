<!doctype html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ASABEN') }}</title>
    <!-- スクリプト -->
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- フォント関連 -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CSSファイル -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    {{-- ヘッダー部分 --}}
    
    {{-- 内容・コンテキスト --}}
    <div id="app">
        <main class="pt-12 pb-16">
            @yield('content')
        </main>
    </div>

    <!-- 画面下部に配置 -->
    {{--
    @include('layouts.footer')
    --}}

</body>

</html>