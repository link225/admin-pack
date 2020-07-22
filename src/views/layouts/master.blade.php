<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    {{--  <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">  --}}
    <title>Master</title>
    <Style>
        body{
            background-image: url("{{ asset('img/corn.jpg') }}");
            margin-top: 20%;

        }
        input:focus {
            border-bottom: 1px solid #4527a0  !important;
            box-shadow: 0 1px 0 0 #4527a0  !important;
          }

          label.active {
            color: #4527a0  !important;
          }
          
        .card-image{
            display: flex;
            {{--  -ms-flex-align: center;  --}}
            justify-content: center;
            align-self: auto;
        }
    </Style>
</head>
<body>
   <div class="container-fluid">
    <main>
        @yield('content')
    </main>
   </div>

    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>