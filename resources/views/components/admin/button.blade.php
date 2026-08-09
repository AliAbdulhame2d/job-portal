
@props(['type'=>'button' , 'variant'=>'primary'])

@php

 $classes = match ($variant) {
    'primary' => 'bg-sky-500 hover:bg-sky-600 text-white',
    'warning' => 'bg-yellow-500 hover:bg-yellow-600 text-white',
    'danger' => 'bg-red-500 hover:bg-red-600 text-white',
     default => 'bg-gray-500 hover:bg-gray-600 text-white',
 };
   
@endphp

<button type="{{$type}}" {{$attributes->merge(['class' => "inline-flex px-4 py-2 items-center rounded-md transition duration-200 {$classes}"])}} >{{$slot}}</button>
