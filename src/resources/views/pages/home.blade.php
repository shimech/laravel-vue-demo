@extends('layouts.base')

@section('title', 'Home')

@section('header-text', 'Home')

@section('main')
<div class="page-list">
    <ul>
        <li><a href="/vuex">Vuex</a></li>
        <li><a href="/zipcode">住所自動入力</a></li>
    </ul>
</div>
@endsection