<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!-- site metas -->
      <title>Nest Swallow</title>
      <link rel="shortcut icon" href="{{asset('assets/images/logo3.ico')}}">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      @include('template.style')

   </head>
   <!-- body -->
    <body class="main-layout">
        @include('template.navbar1')
        <main>
            {{-- @include('template.navbar1') --}}

                @yield('content')

                @yield('content1')

                @yield('content2')

            @include('template.footer1')
        </main>
        @include('template.script1')
    </body>

</html>

