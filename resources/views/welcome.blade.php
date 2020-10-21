@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>隨機題庫系統</h1>
    </div>
@endsection

@section('my_menu')
    <li><a class="nav-link" href="/home">我的選項</a></li>
    @parent
@stop
