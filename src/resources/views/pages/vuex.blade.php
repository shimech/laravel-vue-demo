@extends('layouts.base')

@section('title', 'Vuex')

@section('header-text', 'Vuex')

@section('main')
<div id="app-vuex">
    <router-view></router-view>
</div>
<div id="app-zipcode" disabled></div>
@endsection

@section('script')
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
@endsection