<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Control de Medios</title>
    {{-- Estilos --}}
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body style="background-color:rgb(247, 243, 243);">
    <div class="d-flex flex-row vh-100">
        @include('template.sidebar')
        <div class="w-75 " style="margin-left: 255px !important;">
            @include('home.home')
        </div>
    </div>
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
