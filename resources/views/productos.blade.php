<h1>PRODUCTO</h1>
@php
    $nombre = "piero";
    $edad = "19";
@endphp
<h2>hola {{ $nombre }}</h2>
@if ($edad >= 18)
<h3>eres mayor de edad</h3>
@else
<h3>eres menor de edad</h3>
@endif