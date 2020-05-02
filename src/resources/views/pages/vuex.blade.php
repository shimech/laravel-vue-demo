@extends('layouts.base')

@section('title', 'Vuex')

@section('header-text', 'Vuex')

@section('main')
<div id="app">
    <router-view></router-view>
</div>
@endsection

@section('script')
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
@endsection