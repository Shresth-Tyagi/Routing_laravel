<!-- values from last page array is passed in this page we can say -->
{{--  
@foreach ($names as $value)
<p> {{ $value }} </p>   
@endforeach
--}}

@extends('layouts.parent')

@section('main_page_content')

<h3> This is the main page content from their child layout</h3>

<!---- this will show in console window -->
<script>
    var a = 10;
    console.log('This is script use in blade');
    console.log(a);
</script>

@php
    $fruits = ['apple', 'banana','mango', 'orange'];
    echo json_encode($fruits);
@endphp

<script>
   var data = @json($fruits);
   data.forEach(function (val){
    console.log(val);
   })
   console.log(data);
// console.log($fruits);

</script>
@endsection


<!-- This is the secound section of same yield so it will not goona work
    because it is a secound section -->
@section('main_page_content')

<h1>Hello this is shresth tyagi</h1>

@endsection