@php
    $num = 68;

    $names = ['Arif','Bilal','Zahid','Kamran','Haris']



@endphp


<h1>Basic of Laravel</h1>


@foreach ($names as $n)

<p>{{ $n }}</p>
    
@endforeach

{{-- 
@for ($i=0; $i < count($names); $i++)

<p>{{ $names[$i] }}</p>
    
@endfor --}}




{{-- @if ($num%2 == 0)
    <p>{{$num}} : is even number</p>
@else
    <p>{{ $num }} : is odd number</p>
@endif

@for ($i= 0; $i <= 10; $i++)
 
    <p>{{ $i }}</p>
@endfor



@for ($i= 0; $i <= 10; $i++)
    @if ($i%2==0)
    <p style="background-color: plum;">{{ $i }} : is even number</p>
    @else
    <p style="background-color: palevioletred">{{ $i }} : is odd number</p>

    @endif
@endfor --}}

