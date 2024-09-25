<h1>This is normal route welcome page</h1>


<h2><a href="/hello">Dashboard page</a></h2>
<h2><a href="{{ route('aboutpage') }}">About-page</a></h2>




<!-- How to use condition in balde file -->
{{ 5+1 }}
<br>
{{ "Hello" }}
<br>
{{ "<h1>Hello</h1>" }}
<br>
{!! "<h1>Hello</h1>" !!}

<!--- hello -->
<br>

{{ $id=10 }}

@if ($id>5){
    {{ "variable is: " . $id }}
}
@else{
   {{ "hello" }}
}
    
@endif

<br><br>
@php
  $var = 6;
@endphp
@isset($var){
  {{ $var }}
}
@endisset

<br><br>
{{ $variable = 5 }}

@isset($variable)
{{ "variable is isset" }}
<br>
  {{ "variable is: " . $variable }}
@endisset

<br>
{{ $variable = "" }}

@empty($variable)
  {{ "variable is: empty" . $variable }}
@endempty

<br>
<br>
@php
$numbers = array(1,2,3,4,5,6,7,8,9,10);
  var_dump($numbers);
@endphp

<br><br>

@for ($i=0; $i<10;$i++)
   
<li>{{ "value of i is: " . $i  }}</li>

@endfor
<br><br>

@php
    $users = ["Shresth tyagi","John","Harshit"];
@endphp 

@foreach ($users as $user)
@if ($loop->first)
 <li style="color: red">{{ $loop->index }} => {{ $user }} </li>
@else
    <li>{{ $loop->index }} => {{ $user }} </li>

 @endif
@endforeach    

<br><br>
{!! "<script>alert('Shresth Tyagi')</script>" !!}
<br><br>

