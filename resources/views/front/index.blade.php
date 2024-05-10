@extends("layouts.front")

@section("css")

@endsection

@section("content")
<br>

Yaş : {{ $age ?? $person->age }}
2.Değer : {{ $age ?? @$person->aa }}

@endsection

@section("js")

@endsection