@foreach($users as $user)
    {{ $loop->depth }}
    {{$user->name}} <br>
@endforeach