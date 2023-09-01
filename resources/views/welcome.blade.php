<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite('resources/css/app.css')

    </head>
    <body>
        <h1 class="text-3xl font-bold underline">
            Hello world!
          </h1>



        <center>
        <livewire:counter />

        </center>
        <livewire:super-B />
    </body>
</html>
