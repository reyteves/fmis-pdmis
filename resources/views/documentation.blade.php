

@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Documentation</title>
    <style>
        /* Apply some additional styling for the iframe container if needed */
        #pdf-container {
            width: 100%;
            height: 100vh; 
        }
    </style>
</head>

<body>

    <div class="panel text-right">
  
    <button class="btn btn-primary" onclick="window.location.href = '{{ url('/') }}';">Home</button>

    </div>

    <!-- Embed the PDF using an iframe with full viewport height -->
    <iframe id="pdf-container" src="{{ asset('docs/SAD-PDMIS.pdf') }}" frameborder="0"></iframe>

</body>

</html>

@endsection