<!-- Use these values in another page (or) we can say we pass the value 
in another page -->
{{-- 
@php
    $fruits = ["Apple","mango","banana","orange"];
@endphp
@include('child',['names' => $fruits])
 --}}

<h1><header> This is the header from parent layout</header></h1>

@yield('main_page_content')

<h1><footer>This is the footer from parent layout</footer></h1>

