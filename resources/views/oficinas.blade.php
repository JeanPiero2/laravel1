@foreach ($oficinas as $oficina)
{{ $oficina->phone }}<hr>
{{ $oficina->city }}<hr>
{{ $oficina->state }}<hr>
{{ $oficina->country }}<hr>
@endforeach