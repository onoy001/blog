@if ($session)
    <div class="alert alert-{{ $type }}">
      <li>{{$session}}</li>
    </div>
@endif