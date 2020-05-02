@extends('layouts.base')

@section('title', '住所自動入力')

@section('header-text', '住所自動入力')

@section('main')
<div id="app-zipcode">
    <input-component></input-component>
</div>
<div id="app-vuex" disabled></div>
@endsection

@section('script')
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
@endsection