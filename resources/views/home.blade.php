@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
<div class="slider">
    <ul>
        <li>
            <img src="{{asset('img/img4.jpg')}}" alt=""  >
        </li>
        <li>
            <img src="{{asset('img/img6.jpg')}}" alt="" >
        </li>
        <li>
            <img src="{{asset('img/img2.jpg')}}" alt="" >
        </li>
        <li>
            <img src="{{asset('img/img5.jpg')}}" alt="" >
        </li>
    </ul>
</div>
@endsection