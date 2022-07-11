<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}">
    <title>Aprendible - {{ $title ?? '' }}</title>
</head>
<body>
    <x-layouts.navigation />

    {{$slot}}

</body>
</html>
