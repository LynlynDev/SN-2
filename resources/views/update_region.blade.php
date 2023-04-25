<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body >
    <form action= "/region_update" method = "Post">
        {{ csrf_field() }}
        <h1>Mise à jour de Région</h1>
        <label for="" id="region">Région</label>
        <input type="hidden" value="{{ $reg->label }}" name="id">
        <input type="text" name= "region" value="{{$reg->label}}" placeholder="region">
        <button type="submit" class="btn btn-outline-primary">Ok</button>
    </form>
    </body>
</html>
