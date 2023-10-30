{{ ($myblogs) }}
@foreach ($myblogs as $Blog)
{{ $Blog->content  }}</br><br>
@endforeach