Hello
<br>

@php
    $array = [
        'name' => 'Weverton',
        'sobrenome' => 'leonardo'
        ];
@endphp

{{ Illuminate\Support\Js::from($array) }}

{{ time() }}

<br><br>
{{ date('d/m/y') }}

<br><br>

@php
    $total = 0;
    $array = [];
    $boolean = true;
@endphp

Unless
@unless($boolean)
    Falso
@endif
<br><br>

IF
@if($boolean)
    True
@endif
<br><br>

@empty($total)
    Minha compra foi zero
@endempty
<br><br>

@empty($array)
    O array está vazio jovem!
@endempty
<br><br>

@if($total > 100)
    Muito Caro
@elseif($total > 80)
    tá Ok
@elseif($total > 50)
    tá barato
@endif
<br><br>

@if($user->name === "Ms. Jailyn O'Kon DDS")
    {{ $user->name }}
@elseif($user->email === 'maryam.homenick@example.net')
    {{ $user->email }}
@endif