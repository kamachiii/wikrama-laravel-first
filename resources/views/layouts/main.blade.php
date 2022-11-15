<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="img/gojo.png" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    {{-- CSS Style --}}
    <link rel="stylesheet" href="css/style.css">
    <title>{{ $title }}</title>
  </head>
  <body>

      @include('partials.navbar')

      <div class="container mt-4">
        {{-- Notif Berhasil --}}
        @if ($message = Session::get('success'))
          <p class="alert alert-success">{{ $message }}</p>
        @endif

        {{-- Notif Update --}}
        @if ($message = Session::get('update'))
          <p class="alert alert-primary">{{ $message }}</p>
        @endif

        {{-- Notif Delete --}}
        @if ($message = Session::get('delete'))
          <p class="alert alert-danger">{{ $message }}</p>
        @endif

        @yield('container')

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  </body>
</html>
